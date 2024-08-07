<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->fd = $this->model('ejemplo');;
    }

    public function index()
    {
        $privilegios = $this->fd->getPrivi();

        $this->view('pages/ver' , $privilegios);
    }
}