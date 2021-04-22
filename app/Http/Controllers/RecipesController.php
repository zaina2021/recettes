<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        return view('recettes');
    }

    
    public function show($url) {

        $recipe = \App\Models\Recipe::where('url',$url)->first(); //get first recipe with recipe_nam == $recipe_name
       
        return view('recettes', compact('recipe'));
     }
}
