<?php

use Phalcon\Mvc\User\Component;


class Elements extends Component
{
    private $_headerMenu = array(
       'navbar-right' => array(
           'dashboard'=>array(
                'caption' => 'Dashboard',
                'action' => 'index'
           ),
           'settings' => array(
               'caption' => 'Settings',
               'action' => 'index'
           ),
           'profile' => array(
               'caption' => 'Profile',
               'action' => 'index'
           ),
           'help' => array(
               'caption' => 'Help',
               'action' => 'index'
           ),
           'session' => array(
                'caption' => 'Log Out',
                'action' => 'end'
           ),

       ));

    private $_sideMenu = array(
        'first' =>  array(
            'dashboard'=>array(
                'caption'   =>  'Overview',
                'action'    =>  'index'
            ),

            'reports' => array(
                'caption'   => 'Reports',
                'action'    =>  'index'
            ),
            'analytics' => array(
                'caption'   =>  'Analytics',
                'action'    =>  'index'
            ),
            'export'   => array(
                'caption'   =>  'Export',
                'action'    =>  'index'
            )


        ),
        'second' => array(
            'partners'  =>  array(
                'caption'   =>  'Partners',
                'action'    =>  'index'
            ),

            'vehicles' => array(
                'caption'   => 'Vehicles',
                'action'    => 'index'
            )
        )
    );

    public function getTopMenu()
    {
            echo "<div id=\"navbar\" class=\"navbar-collapse collapse\">";
           // echo "<ul class=\"nav navbar-nav navbar-right\">";
            foreach ($this->_headerMenu as $position => $menu) {
                echo "<ul class=\"nav navbar-nav navbar-right\">";
                foreach ($menu as $controller => $option) {
                    echo "<li>";
                    echo $this->tag->linkTo($controller . '/' . $option['action'], $option['caption']);
                    echo "</li>";
                }
                echo "</ul>";
            }

            echo "</div>";


    }

    public function getSideMenu(){

        $controllerName= $this->view->getControllerName();
        echo "<div class=\"container-fluid\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-sm-3 col-md-2 sidebar\">";

        foreach($this->_sideMenu as $num => $menu)
        {
            echo "<ul class=\"nav nav-sidebar\">";
                foreach($menu as $controller => $option)
                {
                    if($controllerName  ==   $controller)
                    {
                        echo "<li class=\"active\">";
                    }else{
                        echo "<li>";
                    }
                    echo $this->tag->linkTo($controller.'/'.$option['action'], $option['caption']);
                    echo "</li>";
                }

            echo"</ul>";
        }

        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
