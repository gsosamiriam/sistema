<?php

namespace App\Controllers;

class Home extends BaseController
{

   

    public function index(): string
    {
        return 
        view('/templates/headerSimple').
        view('login_view');
    }

    public function inicio(): string
    {
        return 
        view('/templates/header').
        view('dashboard_view');
    
    }

}
