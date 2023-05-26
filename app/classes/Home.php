<?php

namespace App\classes;
class Home
{
    public function index()
    {
        header('location: pages/home.php');
    }
}