<?php

namespace App\Http\Controllers;

use App\Models\NestedTopic;
use App\Http\Requests\StoreNestedTopicRequest;
use App\Http\Requests\UpdateNestedTopicRequest;

class NestedTopicController extends Controller
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
     * @param  \App\Http\Requests\StoreNestedTopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNestedTopicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NestedTopic  $nestedTopic
     * @return \Illuminate\Http\Response
     */
    public function show(NestedTopic $nestedTopic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NestedTopic  $nestedTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(NestedTopic $nestedTopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNestedTopicRequest  $request
     * @param  \App\Models\NestedTopic  $nestedTopic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNestedTopicRequest $request, NestedTopic $nestedTopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NestedTopic  $nestedTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(NestedTopic $nestedTopic)
    {
        //
    }
}
