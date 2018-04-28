<?php

namespace App\Http\Controllers;

use App\subevent;
use Illuminate\Http\Request;

/**
* @Class Name: SubeventController
* @Author: Mrinal Dutta
* @Last Modified: April 18, 2018
* @Description: Controls the SubEvent related data.
*/


class SubeventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0036
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0037
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
     * Module ID: API_0038
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subevent  $subevent
     * @return \Illuminate\Http\Response
     * Module ID: API_0039
     */
    public function show(subevent $subevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subevent  $subevent
     * @return \Illuminate\Http\Response
     * Module ID: API_0040
     */
    public function edit(subevent $subevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subevent  $subevent
     * @return \Illuminate\Http\Response
     * Module ID: API_0041
     */
    public function update(Request $request, subevent $subevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subevent  $subevent
     * @return \Illuminate\Http\Response
     * Module ID: API_0042
     */
    public function destroy(subevent $subevent)
    {
        //
    }
}
