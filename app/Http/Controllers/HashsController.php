<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehashsRequest;
use App\Http\Requests\UpdatehashsRequest;
use App\Models\hashs;

class HashsController extends Controller
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
     * @param  \App\Http\Requests\StorehashsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehashsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hashs  $hashs
     * @return \Illuminate\Http\Response
     */
    public function show(hashs $hashs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hashs  $hashs
     * @return \Illuminate\Http\Response
     */
    public function edit(hashs $hashs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehashsRequest  $request
     * @param  \App\Models\hashs  $hashs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehashsRequest $request, hashs $hashs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hashs  $hashs
     * @return \Illuminate\Http\Response
     */
    public function destroy(hashs $hashs)
    {
        //
    }
}
