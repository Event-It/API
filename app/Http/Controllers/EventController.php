<?php

namespace App\Http\Controllers;

use App\event;
use App\user;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Resources\Event\EventResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

=======
use App\Http\Resources\Event\UserEventResourceCollection;
use App\Http\Resources\Event\EventResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
>>>>>>> 711f66d0a1739eac056496580a249b613b33e88e

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        return EventResource::collection(event::all());
=======
      // events to show as preview to Organisers page who has created events.
         if($request->has('user_id')){
           $events = user::find($request->user_id)->events;
           return UserEventResourceCollection::collection($events);
         }
      //

>>>>>>> 711f66d0a1739eac056496580a249b613b33e88e
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
          'status' => "Event created successfull"
      ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
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
     */
    public function destroy(event $event)
    {
        //
    }
}
