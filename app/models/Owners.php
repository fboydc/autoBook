<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;


class Owners extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $first;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $last;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $ssn;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $phonenum;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $dob;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $address1;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $address2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $userid;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator([
                'message'   =>  'Invalid amail address!'
            ])
        );

        $validator->add(
            'email',
            new UniquenessValidator([
                'message'   =>  'A customer with this email is already registered. Please try a different one.'
            ])
        );

        $validator->add(
            'ssn',
            new UniquenessValidator([
                'message'   =>  'This SSN is registered by another customer.'
            ])
        );

        return $this->validate($validator);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'owners';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Owners[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Owners
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public function getFullName()
    {
        return $this->last.", ".$this->first;
    }

    public function toString()
    {
        return ("first: ".$this->first." / last: ".$this->last."\naddress1: ".$this->address1." / address2: ".$this->address2."\nphonenum: ".$this->phonenum." / email: ".$this->email."\nssn: ".$this->ssn." / Date of Birth: ".$this->dob);
    }

}
