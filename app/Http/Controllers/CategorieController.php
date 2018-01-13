<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategorieController extends Controller
{
    public function all(){

        $categories = categories::all();

        dump($categories);

        return $categories;

    }

    public function new(){
        
        return view('categories.categorie-form');
        
    }


}
