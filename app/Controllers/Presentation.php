<?php

namespace App\Controllers;

class Presentation extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function index()
    {
        echo view('commun/header');
        echo view('presentation');
    }
}
