<?php

class news_controller extends controller
{

    public function __construct()
    {
        parent::__construct();

        //Modlü yüklle
        $this->model->load();
    }

    public function home()
    {

      $this->render('news/home'); 
    }

    public function add()
    {
        //
    }

    public function delete()
    {
        //
    }


    public function edit()
    {
        //   
    }

}