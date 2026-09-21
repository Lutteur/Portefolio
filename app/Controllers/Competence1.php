<?php

namespace App\Controllers;

class Competence1 extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function index()
    {
        echo view('commun/header');
        echo view('competence1');
    }
}