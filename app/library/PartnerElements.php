<?php

use Phalcon\Mvc\User\Component;

class PartnerElements extends Component
{
    private $_partnersHeader = array(
        'customers' => array(
                'view'=>array(
                    'caption' => 'View all',
                    'action'  => 'index'
                ),
                'create'=>array(
                    'caption' => 'Create',
                    'action'  => 'create'

                )
        ),
        'employees' => array(
            'view'=>array(
                'caption' => 'View all',
                'action' => 'viewemployees'
            )
        )
    );



    public function getMenu(){

        foreach($this->_partnersHeader as $partner=>$event)
        {
            echo "<li class=\"dropdown\">";
            echo  "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo $partner;
            echo "<span class=\"caret\"></span>";
            echo "</a>";
            echo "<ul class=\"dropdown-menu\">";
            foreach($event as $action=>$option)
            {
                echo "<li>";
                echo $this->tag->linkTo($partner.'/'.$option['action'], $option['caption']);
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        }
    }

}