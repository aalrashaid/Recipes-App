<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipesRequest;
use App\Http\Requests\UpdateRecipesRequest;
use App\Models\Recipe;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Thumbnail;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recipes = Recipe::all();
        //$recipes = DB::table('users')->paginate(15);
        //$recipes = recipes::paginate(25);

        $Cuisines = Cuisine::all();
        $Categories = Category::all();

        return view('recipes.index', compact('Recipes','Cuisines','Categories'));
        //
        // $recipes = DB::table('recipes')->get();
        // $cuisines = DB::table('cuisines')->get();
        // $categories = DB::table('categories')->get();

        //return view('recipes.index',['recipes'=> $recipes , 'Cuisine'=>$cuisines, 'Category' => $categories]);
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

        return view('recipes.create',['Cuisine'=>$cuisines, 'Category' => $categories]);
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
        $Thumbnails = new Thumbnail;


         if ($request->hasFile('thumbnail_id')) {
             $name = $request->file('thumbnail_id')->getClientOriginalName();
             $size = $request->file('thumbnail_id')->getSize();
             $path = $request->file('thumbnail_id')->storeAs('public/recipes/thumbnails', $name);
         }

        $Thumbnails->user_id = auth()->user()->id;

        $Thumbnails->thumbnail = $name;
        $Thumbnails->size = $size;
        $Thumbnails->path = $path;

        $Thumbnails->save();

        // $recipes = new recipes;

        // $recipes->user_id = auth()->user()->id;
        // $recipes->cuisines_id = $request->cuisines_id;
        // $recipes->category_id = $request->category_id;
        // $recipes->thumbnail_id = $request['thumbnails']['id'];
        // $recipes->title = $request->title;
        // $recipes->slug = SlugService::createSlug(recipes::class, 'slug', $request->title);
        // $recipes->dsescription = $request->dsescription;
        // $recipes->youtubevideo = $request->youtubevideo;
        // $recipes->method = $request->method;
        // $recipes->difficlty = $request->difficlty;
        // $recipes->preptime = $request->preptime;
        // $recipes->cooktime = $request->cooktime;
        // $recipes->total = $request->total;
        // $recipes->serving = $request->servings;
        // $recipes->yield =$request->yield;
        // $recipes->ingredients =$request->ingredients;
        // $recipes->directions = $request->directions;
        // $recipes->nutritionFacts = $request->nutritionFacts;

         $Recipes = Recipe::create([

            'user_ID' => auth()->user()->id,
             //'user_id' => $request->get("user_id"),
             'cuisines_id' => $request->cuisines_id,
             'category_id' => $request->category_id,
             'thumbnail_id' => $request->Thumbnails->id,
            // 'thumbnail_id' => $thumbnails->id,
        //     //'thumbnail_id' => $request->thumbnails['id'],
             'title' => $request->title,
             'slug' => SlugService::createSlug(Recipe::class, 'slug', $request->title),
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
     * @param  \App\Models\Recipe  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipes, $id)
    {
        //
        $Recipes = Recipe::findOrFail($id);
        //dd($recipes);
        //$recipes = recipes::all();
        $Cuisines = Cuisine::all();
        $Categories = Category::all();
        $Thumbnails = Thumbnail::all();

        return view('recipes.show', compact('Recipes','Cuisines','Categories','Thumbnails'));

    //     $recipes = DB::table('recipes')->get();
    //     $cuisines = DB::table('cuisines')->get();
    //     $categories = DB::table('categories')->get();

    //     dd($recipes);

    //     return view('recipes.show', ['recipes'=> $recipes , 'Cuisine'=>$cuisines, 'Category' => $categories] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Recipe  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipes, $id)
    {
        //
        $Recipes = Recipe::findOrFail($id);
        //dd($recipes);
        //$recipes = recipes::all();
        $Cuisines = Cuisine::all();
        $Categories = Category::all();
        $Thumbnails = Thumbnail::all();

        return view('recipes.edit', compact('Recipes','Cuisines','Categories','Thumbnails') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipesRequest  $request
     * @param  \App\Models\Recipe  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipesRequest $request, Recipe $recipes)
    {
        //
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipes)
    {
        //
        return view('recipes.destroy');
    }
}
