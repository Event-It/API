<?php

namespace App\Http\Controllers;

use App\transaction;
use Illuminate\Http\Request;

/**
* @Class Name: TransactionController
* @Author: Shashank Dhyani
* @Last Modified: April 9, 2018
* @Description: Controls the Transaction related data.
*/


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0064
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0065
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
     * Module ID: API_0066
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     * Module ID: API_0067
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     * Module ID: API_0068
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     * Module ID: API_0069
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     * Module ID: API_0070
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
