<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepublishedbookRequest;
use App\Http\Requests\UpdatepublishedbookRequest;
use App\Models\publishedbook;

class PublishedbookController extends Controller
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
     * @param  \App\Http\Requests\StorepublishedbookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepublishedbookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publishedbook  $publishedbook
     * @return \Illuminate\Http\Response
     */
    public function show(publishedbook $publishedbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publishedbook  $publishedbook
     * @return \Illuminate\Http\Response
     */
    public function edit(publishedbook $publishedbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepublishedbookRequest  $request
     * @param  \App\Models\publishedbook  $publishedbook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepublishedbookRequest $request, publishedbook $publishedbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publishedbook  $publishedbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(publishedbook $publishedbook)
    {
        //
    }
}
