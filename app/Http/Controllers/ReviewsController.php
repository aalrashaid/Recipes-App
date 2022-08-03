<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;
use App\Models\Reviews;

use App\Models\Recipe;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Recipes = Recipe::all();

        return view('Reviews.create', compact('$Recipes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewsRequest  $request
     * @return \Illuminate\Http\Response
     * @return RedirectResponse
     */
    public function store(StoreReviewsRequest $request): RedirectResponse
    {

        // dd();
        //
        DB::transaction(function () use ($request) {

            auth()->user()->Reviews()->create($request->except('csrf_token'));
        });

        // $Reviews = new Reviews;

        // $Reviews->user_id = auth()->user()->id;
        // // $Reviews->recipes_id = $Recipe->id;
        // $Recipe = Recipe::find($request->get('recipes_id'));
        // $Reviews->comments = $request->comments;

        //dd($Reviews);

        $Reviews = Reviews::Create(

            // 'user_id' => auth()->user()->id,
            // 'recipes_id' => $request->recipes_id,
            // 'reply_id' => $request->reply_id,
            // 'user_id' => auth()->user()->id ,
            // 'comments' => $request->comments,
        );
        dd($Reviews);

        $Reviews->save();

        //dd($Reviews);
        //user.
        return redirect()->route('user.Recipes.index')->with([
            'class' => 'success',
            'message' => 'Recipe successfully created'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewsRequest  $request
     * @return \Illuminate\Http\Response
     * @return RedirectResponse
     */
    public function replayStore(StoreReviewsRequest $request): RedirectResponse
    {
        return redirect()->route('user.Recipes.index')->with([
            'class' => 'success',
            'message' => 'Recipe successfully created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(Reviews $reviews)
    {
        //

        return view('Recipes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewsRequest  $request
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewsRequest $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
