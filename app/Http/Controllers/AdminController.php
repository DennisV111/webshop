<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //hier iets met inloggen doen
    
    //public function __construct() {
    //    $this->middleware('auth');
    //}
     
    /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Http\Response
    */
     
    public function index() {
        return view('admin.index');
    }
}