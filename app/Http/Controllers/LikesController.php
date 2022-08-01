<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelikesRequest;
use App\Http\Requests\UpdatelikesRequest;
use App\Models\likes;

class LikesController extends Controller
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
     * @param  \App\Http\Requests\StorelikesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelikesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function show(likes $likes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function edit(likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelikesRequest  $request
     * @param  \App\Models\likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelikesRequest $request, likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function destroy(likes $likes)
    {
        //
    }
}
