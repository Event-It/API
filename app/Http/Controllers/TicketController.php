<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;

/**
* @Class Name: TicketController
* @Author: Mrinal Dutta
* @Last Modified: April 9, 2018
* @Description: Controls the Ticket related data.
*/

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0050
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0051
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
     * Module ID: API_0052
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     * Module ID: API_0053
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     * Module ID: API_0054
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     * Module ID: API_0055
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     * Module ID: API_0056
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
