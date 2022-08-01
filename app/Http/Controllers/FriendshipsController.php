<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFriendshipsRequest;
use App\Http\Requests\UpdateFriendshipsRequest;
use App\Models\Friendships;

class FriendshipsController extends Controller
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
     * @param  \App\Http\Requests\StoreFriendshipsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendshipsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friendships  $friendships
     * @return \Illuminate\Http\Response
     */
    public function show(Friendships $friendships)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Friendships  $friendships
     * @return \Illuminate\Http\Response
     */
    public function edit(Friendships $friendships)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendshipsRequest  $request
     * @param  \App\Models\Friendships  $friendships
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendshipsRequest $request, Friendships $friendships)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friendships  $friendships
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendships $friendships)
    {
        //
    }
}
