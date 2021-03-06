<?php

namespace App\Http\Controllers;

use App\event;
use App\user;
use Illuminate\Http\Request;
use App\Http\Resources\Event\UserEventResourceCollection;
use App\Http\Resources\Event\EventResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

/**
* @Class Name: EventController
* @Author: Mrinal Dutta
* @Last Modified: April 27, 2018
* @Description: Controls the Event related data.
*/

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0022
     */
    public function index(Request $request)
    {
      // events to show as preview to Organisers page who has created events.
                       //maybe this if condition is unnecessary
           $events = user::find($request->header('user_id'))->events->where('event_status','=',0)->where('event_is_active','=',1);
           return UserEventResourceCollection::collection($events);

    }

    /**
     * Show the form for creating a new resource.x
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0023
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
     * Module ID: API_0024
     */
    public function store(Request $request)
    {
      $event = new event;
      $event->eventtype_id = $request->eventtype_id;
      $event->event_name = $request->event_name;
      $event->event_start_time = $request->event_start_time;
      $event->event_end_time = $request->event_end_time;
      $event->event_venue = $request->event_venue;
      $event->event_city = $request->event_name;
      $event->event_description = $request->event_description;
      $event->event_status = 0;
      $event->user_id = $request->user_id;
      $event->save();
      return response([
          'event_id' => $event->id,
          'status' => "Event created successful"
      ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     * Module ID: API_0025
     */
    public function show(event $event)
    {
        return new EventResource($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     * Module ID: API_0026
     */
    public function edit(event $event)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     * Module ID: API_0027
     */
    public function update(Request $request, event $event)
    {
      $event->update($request->all());
      return response([
          'event_id' => $event->id,
          'status' => "Update successfull"
      ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     * Module ID: API_0028
     */
    public function destroy(event $event)
    {
        //
    }
}
