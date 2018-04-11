<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
class CheckuserToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $result =  DB::select( DB::raw("SELECT count(*) AS COUNT FROM user_usertype WHERE user_id = '$request->user_id' AND user_token='$request->token' AND usertype_id='$request->usertype_id'") );
       if((int)$result[0]->COUNT == 1)
        return $next($request);

        return response('Not a valid token', 401);
    }
}
