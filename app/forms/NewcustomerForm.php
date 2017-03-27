<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Forms\Element\Hidden;
class NewcustomerForm extends Form
{
    public function initialize($entity = null, $options = array())
    {

        if(!isset($options['edit']))
        {
            $element = new Text("id");
            $this->add($element->setLabel("Id"));

        }else{
            $this->add(new Hidden("id"));
        }
        $first = new Text('first');
        $first->setLabel('First');
        $first->setFilters(array('striptags', 'string'));
        $first->addValidators(array(
            new PresenceOf(array(
                'message' => 'First name is required.'
            ))
        ));

        $this->add($first);

        $last = new Text('last');
        $last->setLabel('Last');
        $last->setFilters(array('striptags', 'string'));
        $last->addValidators(array(
            new PresenceOf(array(
                'message' => 'Last name is required.'
            ))
        ));

        $this->add($last);

        $address1 = new Text('address1');
        $address1->setLabel('Address Line 1');
        $address1->setFilters(array('striptags', 'string'));
        $address1->addValidators(array(
           new PresenceOf(array(
               'message'  => 'Address Line 1 is required.'
           ))
        ));

        $this->add($address1);

        $address2 = new Text('address2');
        $address2->setLabel('Address Line 2:');
        $address2->setFilters(array('striptags','string'));

        $this->add($address2);

        $phonenum = new Text('phonenum');
        $phonenum->setLabel('Phone Number');
        $phonenum->setFilters(array('striptags', 'string'));
        $phonenum->addValidators(array(
           new PresenceOf(array(
               'message'    =>  'Phone number field is required.'
           ))
        ));

        $this->add($phonenum);

        $email = new Text('email');
        $email->setLabel('Email:');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message'   =>  'Email field is required'
            )),
            new Email(array(
                'message'   =>  'Not a valid e-mail'
            ))
        ));
        $this->add($email);

        $ssn = new Text('ssn');
        $ssn->setLabel('SSN');
        $ssn->setFilters(array('striptags','string'));
        $ssn->addValidators(array(
            new PresenceOf(array(
                'message'   =>  'SSN field is required.'
            ))
        ));
        $this->add($ssn);





    }


    public function messages($name)
    {
        if($this->hasMessagesFor($name))
        {
            foreach($this->hasMessagesFor($name) as $message)
            {
                $this->flash->error($message);
            }
        }
    }
}