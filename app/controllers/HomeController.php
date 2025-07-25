<?php
require_once(__DIR__ . '/../core/Controller.php');
require_once(__DIR__ . '/../models/Usuario.php');

class HomeController extends Controller
{
    public function index()
    {
        $user = new Usuario();
        $data = $user->getUserData();
        $this->view('home/index', $data);
    }

    public function contact()
    {
        $data = [];
        $this->view('home/contact', $data);
    }
}
