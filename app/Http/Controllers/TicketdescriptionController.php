<?php

namespace App\Http\Controllers;

use App\ticketdescription;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Tickets\TicketDescriptionResource;
use Illuminate\Support\Facades\DB;

/**
* @Class Name: TicketdescriptionController
* @Author: Mrinal Dutta
* @Last Modified: April 16, 2018
* @Description: Controls the Ticket Description related data.
*/

class TicketdescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0057
     */
    public function index()
    {
        return TicketDescriptionResource::collection(ticketdescription::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0058
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
     * Module ID: API_0059
     */
    public function store(Request $request)
    {
        $ticket_desc = new ticketdescription;
        $ticket_desc->ticket_type = $request->ticket_type;
        $ticket_desc->ticket_price = $request->ticket_price;
        $ticket_desc->available_tickets = $request->available_tickets;
        $ticket_desc->ticketdescriptionable_id = $request->ticketdescriptionable_id;
        $ticket_desc->ticketdescriptionable_type = $request->ticketdescriptionable_type;
        $ticket_desc->save();
        return response([
            'ticket_desc_id' => $ticket_desc->id,
            'status' => "Event created successfull"
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticketdescription  $ticketdescription
     * @return \Illuminate\Http\Response
     * Module ID: API_0060
     */
    public function show(ticketdescription $ticketdescription)
    {
        return new TicketDescriptionResource($ticketdescription);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticketdescription  $ticketdescription
     * @return \Illuminate\Http\Response
     * Module ID: API_0061
     */
    public function edit(ticketdescription $ticketdescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticketdescription  $ticketdescription
     * @return \Illuminate\Http\Response
     * Module ID: API_0062
     */
    public function update(Request $request, ticketdescription $ticketdescription)
    {
      $ticketdescription->update($request->all());
      return response([
          'user_id' => $ticket->id,
          'status' => "Update successful"
      ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticketdescription  $ticketdescription
     * @return \Illuminate\Http\Response
     * Module ID: API_0063
     */
    public function destroy(ticketdescription $ticketdescription)
    {
        $ticketdescription->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
