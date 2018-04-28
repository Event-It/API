<?php

namespace App\Http\Controllers;

use App\announcement;
use App\user;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Announcement\AnnouncementResource;

/**
* @Class Name: AnnouncementController
* @Author: Shashank Dhyani
* @Last Modified: April 20, 2018
* @Description: Controls the Announcement related data.
*/


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0001
     */
    public function index(Request $request)
    {
      return user::with('member.announcements')->find($request->user_id)->member;
      return new annoucement(AnnouncementResource::collection(user::with('member.announcements')->find($request->user_id)->member));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Module ID: API_0002
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
     * Module ID: API_0003
     */
    public function store(Request $request)
    {
        $announcement = new announcement;
        $announcement->event_id = $request->event_id;
        $announcement->announcement_heading = $request->announcement_heading;
        $announcement->announcement_text = $request->announcement_text;
        $announcement->save();
        return response([
            'status' => "Announcement posted successfully"
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     * Module ID: API_0004
     */
    public function show(announcement $announcement)
    {
        //return new AnnouncementResource($announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     * Module ID: API_0005
     */
    public function edit(announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     * Module ID: API_0006
     */
    public function update(Request $request, announcement $announcement)
    {
        $announcement->update($request->all());
        return response([
            'status' => "Update successful"
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     * Module ID: API_0007
     */
    public function destroy(announcement $announcement)
    {
        //
    }
}
