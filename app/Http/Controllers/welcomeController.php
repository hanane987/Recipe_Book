<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
     public function index()
    {
        $reciprs=Recipe::Where('');
        return view('welcome.welcome',compact('reciprs'));

     }
     public function search(Request $request){

        $keyword = $request->input('keyword');
        $reciprs = Recipe::where('title','like','%'.$keyword.'%')
        ->orWhere('description','like','%'.$keyword.'%')->get();

        if(!$reciprs){
            return view('welcome.welcome',compact('reciprs'));
        }
        return view('welcome.welcome',compact('reciprs'));



    }
    public function view()
    {
        $reciprs=Recipe::all();
        return view('recipe.view',compact('reciprs'));

     }

}

