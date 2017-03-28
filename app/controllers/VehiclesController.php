<?php

use Phalcon\Image\Adapter\Gd as image;
class VehiclesController extends ControllerBase
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function indexAction()
    {
        $vehicles = Vehicles::find();

        $this->view->vehicles = $vehicles;
    }

    public function createAction()
    {

        $form = new VehicleForm();


        if($this->request->isPost())
        {
            $vehicle = new Vehicles();
            if($form->isValid($this->request->getPost(), $vehicle)){

                $vehicle->plate_num = $this->request->getPost("plate_num");
                $vehicle->ownerid = $this->request->getPost("ownerid");
                $vehicle->make = $this->request->getPost("make");
                $vehicle->model = $this->request->getPost("model");
                $vehicle->milage = $this->request->getPost("milage");
                $vehicle->year = $this->request->getPost("year");
                $vehicle->color = $this->request->getPost("color");
                $vehicle->ch_num = $this->request->getPost("ch_num");
                $vehicle->type = $this->request->getPost("type");


                if($vehicle->save())
                {

                    $form->clear();

                    $this->flash->success("Vehicle created succesfully");

                    return $this->dispatcher->forward([
                        "controller" => "vehicles",
                        "action"    => "index"
                    ]);
                }else{
                    foreach($vehicle->getMessages() as $message){
                        $this->flash->error($message);
                    }

                    return $this->dispatcher->forward([
                        "controller" => "vehicles",
                        "action"    => "index"
                    ]);
                }
            }else{
                foreach($form->getMessages() as $message){
                    $this->flash->error($message);
                }

                return $this->dispatcher->forward([
                        "controller" => "vehicles",
                        "action"    => "index"
                ]);
            }





        }

        $this->view->form = $form;

    }



    public function profileAction($id){

        $vehicle = Vehicles::findFirst($id);

        if(!$vehicle){
            $this->flash->error("Vehicle was not found!");

            return $this->dispatcher->forward([
               "controller" => "vehicles",
                "action" => "index"
            ]);
        }

        $this->view->vehicle = $vehicle;

        $images = Vehicleimages::find(['vehicleid'=>$id]);
        if(sizeof($images) == 0){
            echo" <ol class=\"carousel-indicators\" id=\"indicators\">";
            echo "<li data-target=\"#profile_carousel\" data-slide-to=\"0\" class=\"active\"></li>";
            echo "</ol>";
            echo " <div class=\"carousel-inner\" role=\"listbox\" id=\"images_content\">";
            echo "<div class=\"item active\">";
            echo Phalcon\Tag::image([
               "src"=>"/img/car-icon.png"
            ]);
            echo "</div>";
            echo "</div>";
        }else{
            echo "Images";
        }


    }
}

