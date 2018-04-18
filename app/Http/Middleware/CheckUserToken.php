<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if($request->has('user_id')) {
        $token = $request->header('token');
        $id = $request->user->id;
        $result =  DB::select( DB::raw("SELECT count(*) AS COUNT FROM user_usertype WHERE user_id = $id AND user_token='$token'"));
        if((int)$result[0]->COUNT == 1)
          return $next($request);
      }
      return response(['status'=>'Not a valid token'], Response::HTTP_UNAUTHORIZED);
    }
}
