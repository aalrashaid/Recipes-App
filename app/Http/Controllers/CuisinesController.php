<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuisinesRequest;
use App\Http\Requests\UpdateCuisinesRequest;
use App\Models\Cuisines;

class CuisinesController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuisinesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuisinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuisines  $cuisines
     * @return \Illuminate\Http\Response
     */
    public function show(Cuisines $cuisines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuisines  $cuisines
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuisines $cuisines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuisinesRequest  $request
     * @param  \App\Models\Cuisines  $cuisines
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuisinesRequest $request, Cuisines $cuisines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuisines  $cuisines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisines $cuisines)
    {
        //
    }
}
