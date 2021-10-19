<?php

namespace App\Http\Controllers;

use App\Models\Electorate;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class ElectorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $electorates = Electorate::with(['region','province'])->get();

        return Jetstream::inertia()->render($request, 'Electorates/Show', [
            'electorates' => $electorates
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Electorate  $electorate
     * @return \Illuminate\Http\Response
     */
    public function show(Electorate $electorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Electorate  $electorate
     * @return \Illuminate\Http\Response
     */
    public function edit(Electorate $electorate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Electorate  $electorate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Electorate $electorate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Electorate  $electorate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electorate $electorate)
    {
        //
    }
}
