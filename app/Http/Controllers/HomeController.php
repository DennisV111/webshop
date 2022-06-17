<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    public function index()
    {
        return view('frontend.index');
    }

    public function featuredItems()
    {
        $featuredBooks = Item::inRandomOrder()->take(8)->get();

        return view('frontend.index')->with('featuredBooks', $featuredBooks);
    }
}