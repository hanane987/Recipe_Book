<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\Recipe_request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $reciprs=Recipe::where('user_id',Auth::id())->get();
         return view('recipe.index',compact('reciprs'));

      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Recipe_request $request)
    {
        $data = $request->validated();


        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/recipes'), $imageName);
            $data['image_path'] = $imageName;
        } else {

            dd('No file uploaded.');
        }

        Recipe::create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'image_path'=>$data['image_path'],
            'user_id'=>Auth::id(),
        ]);

        return redirect(route('recipe.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe_request $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipe.update',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Recipe_request $request, Recipe $recipe)
    {
        $data = $request->validated();

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/recipes'), $imageName);
            $data['image_path'] = $imageName;
        }

        $recipe->update($data);

        return redirect(route('recipe.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
      $data= Recipe::find($recipe->id);

      $data->delete();
      return redirect(route('recipe.index'));

    }




}
