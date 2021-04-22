<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = \App\Models\Recipe::all()->sortByDesc('date');
        return view('welcome', compact('recipes'));
    }

     

}
