<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        echo view('html_header');
        echo view('home');
        echo view('html_footer');
    }
    public function products()
    {
        echo view('html_header');
        echo view('products');
        echo view('html_footer');
    }
    public function where_we_are()
    {
        echo view('html_header');
        echo view('where_we_are');
        echo view('html_footer');
    }
}
