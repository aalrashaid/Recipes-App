<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGendersRequest;
use App\Http\Requests\UpdateGendersRequest;
use App\Models\Gender;

class GendersController extends Controller
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
     * @param  \App\Http\Requests\StoreGendersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGendersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gender  $genders
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $genders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $genders
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $genders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGendersRequest  $request
     * @param  \App\Models\Gender  $genders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGendersRequest $request, Gender $genders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $genders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $genders)
    {
        //
    }
}
