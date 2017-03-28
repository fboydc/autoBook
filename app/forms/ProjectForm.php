<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Mvc\Model\Validator\PresenceOf;
class ProjectForm extends Form
{
    public function initialize($entity = null, $options = array())
    {
        $name = new Text("name");
        $name->setLabel("Name");
        $name->setFilters(array("striptags", "string"));
        $name->addValidators(array(
           new PresenceOf(array(
               "message" => "The name field is required."
           ))
        ));

        $this->add($name);
    }
}