<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isuserstudent');
    }
    

    public function index() 
    {
        return view('welcome');
    }

    public function jmch(){
        return view('pages/jmch');
    }   

}
