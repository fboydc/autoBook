<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Validation\Validator\PresenceOf;
class NewcustomerForm extends Form
{
    public function initialize($entity = null, $options = null)
    {
        $first = new Text('first');
        $first->setLabel('First:');
        $first->setFilters(array('striptags', 'string'));
        $first->addValidators(array(
            new PresenceOf(array(
                'message' => 'First name is required'
            ))
        ));

        $this->add($first);

        $last = new Text('last');
        $last->setLabel('Last:');
        $last->setFilters(array('striptags', 'string'));
        $last->addValidators(array(
            new PresenceOf(array(
                'message' => 'Last name is required'
            ))
        ));

        $this->add($last);

        $address1 = new Text('address1');
        $address1->setLabel('Address Line 1:');
        $address1->setFilters(array('striptags', 'string'));
        $address1->addValidators(array(
           new PresenceOf(array(
               'message'  => 'Address Line 1 is required'
           ))
        ));

        $this->add($address1);

    }
}