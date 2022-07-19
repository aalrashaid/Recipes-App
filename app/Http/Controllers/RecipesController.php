<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipesRequest;
use App\Http\Requests\UpdateRecipesRequest;
use App\Models\Recipes;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

use App\Models\Categories;
use App\Models\Cuisines;
use App\Models\Thumbnails;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recipes = Recipes::all();
        //$Recipes = DB::table('users')->paginate(15);
        //$Recipes = Recipes::paginate(25);

        $Cuisines = Cuisines::all();
        $Categories = Categories::all();

        return view('Recipes.index', compact('Recipes','Cuisines','Categories'));
        //
        // $recipes = DB::table('recipes')->get();
        // $cuisines = DB::table('cuisines')->get();
        // $categories = DB::table('categories')->get();

        //return view('Recipes.index',['Recipes'=> $recipes , 'Cuisines'=>$cuisines, 'Categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cuisines = DB::table('cuisines')->get();
        $categories = DB::table('categories')->get();

        return view('Recipes.create',['Cuisines'=>$cuisines, 'Categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \App\Http\Requests\StoreRecipesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipesRequest $request)
    {
        //
        $Thumbnails = new Thumbnails;


         if ($request->hasFile('thumbnail_id')) {
             $name = $request->file('thumbnail_id')->getClientOriginalName();
             $size = $request->file('thumbnail_id')->getSize();
             $path = $request->file('thumbnail_id')->storeAs('public/Recipes/Thumbnails', $name);
         }

        $Thumbnails->user_id = auth()->user()->id;

        $Thumbnails->thumbnail = $name;
        $Thumbnails->size = $size;
        $Thumbnails->path = $path;

        $Thumbnails->save();

        // $Recipes = new Recipes;

        // $Recipes->user_id = auth()->user()->id;
        // $Recipes->cuisines_id = $request->cuisines_id;
        // $Recipes->category_id = $request->category_id;
        // $Recipes->thumbnail_id = $request['Thumbnails']['id'];
        // $Recipes->title = $request->title;
        // $Recipes->slug = SlugService::createSlug(recipes::class, 'slug', $request->title);
        // $Recipes->dsescription = $request->dsescription;
        // $Recipes->youtubevideo = $request->youtubevideo;
        // $Recipes->method = $request->method;
        // $Recipes->difficlty = $request->difficlty;
        // $Recipes->preptime = $request->preptime;
        // $Recipes->cooktime = $request->cooktime;
        // $Recipes->total = $request->total;
        // $Recipes->serving = $request->servings;
        // $Recipes->yield =$request->yield;
        // $Recipes->ingredients =$request->ingredients;
        // $Recipes->directions = $request->directions;
        // $Recipes->nutritionFacts = $request->nutritionFacts;

         $Recipes = recipes::create([

            'user_ID' => auth()->user()->id,
             //'user_id' => $request->get("user_id"),
             'cuisines_id' => $request->cuisines_id,
             'category_id' => $request->category_id,
             'thumbnail_id' => $request->Thumbnails->id,
            // 'thumbnail_id' => $Thumbnails->id,
        //     //'thumbnail_id' => $request->thumbnails['id'],
             'title' => $request->title,
             'slug' => SlugService::createSlug(recipes::class, 'slug', $request->title),
             'dsescription' => $request->dsescription,
             'youtubevideo' => $request->youtubevideo,
             'method' => $request->method,
             'difficlty' => $request->difficlty,
             'preptime' => $request->preptime,
             'cooktime' => $request->cooktime,
             'total' => $request->total,
             'servings' => $request->servings,
             'yield' => $request->yield,
             'ingredients' => $request->ingredients,
             'directions' => $request->directions,
             'nutritionFacts' => $request->nutritionFacts,

         ]);

        dd($Recipes);
        //$recipes->save();
       // dd($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipes,$id)
    {
        //
        $Recipes = Recipes::findOrFail($id);
        //dd($recipes);
        //$Recipes = Recipes::all();
        $Cuisines = cuisines::all();
        $Categories = categories::all();
        $Thumbnails = thumbnails::all();

        return view('Recipes.show', compact('Recipes','Cuisines','Categories','Thumbnails'));

    //     $recipes = DB::table('recipes')->get();
    //     $cuisines = DB::table('cuisines')->get();
    //     $categories = DB::table('categories')->get();

    //     dd($recipes);

    //     return view('Recipes.show', ['Recipes'=> $recipes , 'Cuisines'=>$cuisines, 'Categories' => $categories] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipes,$id)
    {
        //
        $Recipes = Recipes::findOrFail($id);
        //dd($recipes);
        //$Recipes = Recipes::all();
        $Cuisines = cuisines::all();
        $Categories = categories::all();
        $Thumbnails = thumbnails::all();

        return view('Recipes.edit', compact('Recipes','Cuisines','Categories','Thumbnails') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipesRequest  $request
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipesRequest $request, Recipes $recipes)
    {
        //
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipes $recipes)
    {
        //
        return view('Recipes.destroy');
    }
}
