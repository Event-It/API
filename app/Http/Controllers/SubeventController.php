<?php

namespace App\Http\Controllers;

use App\subevent;
use App\event;
use Illuminate\Http\Request;
use App\Http\Resources\SubEvent\SubEventResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

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
    public function index(event $event)
    {
          return SubEventResource::collection($event->subevents);
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
      $subevent->update($request->all());
      return response([
          'subevent_id' => $subevent->id,
          'status' => "Updated successful"
      ],Response::HTTP_CREATED);
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
      $subevent->delete();
      return response(null,Response::HTTP_NO_CONTENT);
    }
}
