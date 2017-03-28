<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
class Vehicles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $ownerid;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $make;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $model;

    /**
     *
     * @var Decimal
     * @Column(type="decimal", length=, nullable=false)
     */
    public $milage;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $year;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $color;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $ch_num;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $type;

    /**
     *
     * @var String
     * @Column(type="string", length=45, nullable=false)
     */
    public $plate_num;
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('ownerid', 'Owners', 'id', ['alias' => 'Owners']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vehicles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicles[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicles
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public function validation()
    {


        $validator = new Validation();

        $validator->add(
            'plate_num',
            new UniquenessValidator([
                'message' => 'A car with this plate number is already registered'
            ])
        );

        $validator->add(
            'ch_num',
          new UniquenessValidator([
              'message' => 'A car with this chassis number is already registered'
          ])
        );

        return $this->validate($validator);

    }



}
