<?php
namespace App\controllers;

use App\core\Controller;
use App\models\Usuario;

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
