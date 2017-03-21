<?php
use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Events\Event;
use Phalcon\Acl\Adapter\Memory as AclList;
class SecurityPlugin extends Plugin
{

    public function getAcl()
    {
        if(!isset($this->persistent->acl))
        {
            $acl = new AclList();

            $acl->setDefaultAction(Acl::DENY);

            $roles = [
                'users' => new Role(
                    'Users',
                    'Member privileges.'
                ),
                'guests' => new Role(
                    'Guests',
                    'Anyone who is not signed in.'
                )
            ];


            foreach($roles as $role)
            {
                $acl->addRole($role);
            }

            $privateResources = array(
                'dashboard' => array('index'),
                'partners'  => array('index', 'createcustomers')
            );

            foreach($privateResources as $resource => $actions)
            {
                $acl->addResource(new Resource($resource), $actions);
            }

            $publicResources = array(
                'index' =>  array('index'),
                'error' => array('show404', 'show500', 'show401'),
                'session' => array('start', 'end')
            );

            foreach($publicResources as $resource => $actions)
            {
                $acl->addResource(new Resource($resource), $actions);
            }

            foreach($roles as $role)
            {
                foreach($publicResources as $resource=>$actions)
                {
                    foreach($actions as $action)
                    {
                        $acl->allow($role->getName(), $resource, $action);
                    }
                }
            }

            foreach($privateResources as $resource => $actions)
            {
                foreach($actions as $action)
                {
                    $acl->allow('Users', $resource, $action);
                }
            }

            $this->persistent->acl = $acl;
        }

        return $this->persistent->acl;

    }




    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        $auth = $this->session->get('auth');
        if(!$auth)
        {
            $role = 'Guests';
        }else{
            $role = 'Users';
        }

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        $acl = $this->getAcl();


       if(!$acl->isResource($controller))
       {
            $dispatcher->forward([
                'controller' => 'error',
                'action'    => 'show404'
            ]);

           return false;
       }

       $allowed = $acl->isAllowed($role, $controller, $action);

        if(!$allowed)
        {
            $dispatcher->forward(array(
                'controller'    =>  'error',
                'action'    =>  'show401'
            ));

            $this->session->destroy();
            return false;
        }




    }
}