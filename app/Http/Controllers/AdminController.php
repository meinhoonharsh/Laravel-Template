<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_user_admin');
    }

    public function index()
    {
        return view('pages.admin.dashboard');
    }
}
