<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class checkApiKey
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
        if(Auth::check()){
            $user = Auth::user();
        }else{
            $key = $request->header('api-key');
            $user = user::where("api_key", "=", $key)->first();
        }

        if($user){
            return $next($request);
        }else{
            return response()->json(["success" => false, "reason" => "Invalid API Key"], 401);
        }
    }
}
