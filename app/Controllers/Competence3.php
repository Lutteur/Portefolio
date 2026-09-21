<?php

namespace App\Controllers;

class Competence3 extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function index()
    {
        echo view('commun/header');
        echo view('competence3');
    }
}