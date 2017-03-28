<?php

class ProjectsController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function createAction()
    {
        $form = new ProjectForm();


        $this->view->form = $form;
    }
}