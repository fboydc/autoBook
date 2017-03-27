<?php


use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Numericality;
class VehicleForm extends Form
{
    public function initialize($entity = null, $options = array())
    {
        $owners = Owners::find(array("columns"=>"id, concat(last,', ',first) as fullname"));

        if(!$owners)
        {
            $this->flash->warning("No customers have been created. A car's owner needs to be created first");

            return false;
        }else{



            $owner = new Select('ownerid', $owners, array(
                'using' => array('id','fullname'),
                'useEmpty' => true,
                'emptyText'=> 'Select Owner',
                'emptyValue' => ''
            ));

            $owner->setLabel('Owner');
            $this->add($owner);


            $make = new Select('make', [],[
                "useEmpty" => true,
                "emptyText" =>"select make",
                "emptyValue" => ""
            ]);

            $make->setLabel("Make");
            $make->addValidators(array(
                new PresenceOf(array(
                    "message" => "Make field is required."
                ))
            ));

            $this->add($make);

            $model = new Select('model',[],[
                "useEmpty" => true,
                "emptyText" =>"select model",
                "emptyValue" => ""
            ]);

            $model->setLabel("Model");
            $model->addValidators(array(
                new PresenceOf(array(
                    "message" => "Model field is required."
                ))
            ));

            $this->add($model);


            $year = new Select('year',[],[
                "useEmpty" => true,
                "emptyText" =>"select year",
                "emptyValue" => ""
            ]);
            $year->setLabel("Year");
            $year->addValidators(array(
               new PresenceOf(array(
                   "message" => "The year field is required."
               ))
            ));

            $this->add($year);

            $color = new Text("color");
            $color->setFilters(array('striptags','string'));
            $color->setLabel("Color");
            $color->addValidators(array(
               new PresenceOf(array(
                   "message" => "The color field is required."
               ))
            ));

            $this->add($color);

            $milage = new Text("milage");
            $milage->setFilters(array('striptags','int'));
            $milage->setLabel("Milage");
            $milage->addValidators(array(
               new PresenceOf(array(
                   "message" => "The milage field is required."
               ))
            ));

            $this->add($milage);

            $chnum = new Text("ch_num");
            $chnum->setFilters(array('striptags','string'));
            $chnum->setLabel("Chassis Number");
            $chnum->addValidators(array(
                new PresenceOf(array(
                    "message" => "The chassis number field is required."
                ))
            ));

            $this->add($chnum);


            $type = new Select("type",[],[
               "useEmpty" => true,
                "emptyText" => "select type",
                "emptyValue" => ""
            ]);

            $type->setLabel("Type");
            $type->addValidators(array(
                new PresenceOf(array(
                    "message" => "The type field is required."
                ))
            ));

            $this->add($type);


            $platenum = new Text("plate_num");
            $platenum->setFilters(array("striptags", "string"));
            $platenum->setLabel("Plate Number");
            $platenum->addValidators(array(
               new PresenceOf(array(
                   "message" => "The plate number field is required."
               ))
            ));

            $this->add($platenum);
        }




    }


    public function messages($name){

        if($this->hasMessagesFor($name)){
            foreach($this->hasMessagesFor($name) as $message){
                $this->flash->error($message);
            }
        }
    }
}