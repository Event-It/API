<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Resources\User\UserResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      return UserResource::collection(user::all());
=======
        return UserResource::collection(user::all());
        //return user::all();
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
        $userid = DB::select('SELECT distinct(user_id) from user_usertype where usertype_id='.$request->usertype_id.' AND user_email = "'.$request->user_email.'" AND user_usertype_is_active = 1');
        if(empty($userid)) {
          $user = new user;
          $user->user_first_name = $request->user_first_name;
          $user->user_last_name = $request->user_last_name;
          $user->save();
          $values = array('user_id' => $user->id, 'usertype_id' => $request->usertype_id, 'user_email' => $request->user_email, 'user_password' => $request->user_password, 'user_token' => md5($user->id . $request->usertype . $request->email . $request->password));
          $authID = DB::table('user_usertype')->insertGetId($values);
          $results = DB::select('SELECT user_id , user_token from user_usertype where id ='.$authID.' AND user_usertype_is_active = 1');
          return response($results,Response::HTTP_CREATED);
        } else if(count($userid) == 1) {
          $values = array('user_id' => $userid[0]->user_id, 'usertype_id' => $request->usertype_id, 'user_email' => $request->user_email, 'user_password' => $request->user_password, 'user_token' => md5($userid[0]->user_id . $request->usertype . $request->email . $request->password));
          $authID = DB::table('user_usertype')->insertGetId($values);
          $results = DB::select('SELECT user_id , user_token from user_usertype where id ='.$authID);
          return response($results,Response::HTTP_CREATED);
        } else
            return "User Already Exist. Cannot Register You Again, Nigga";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
      $user->update($request->all());
      return response([
          'user_id' => $user->id,
          'status' => "Update successful"
      ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
