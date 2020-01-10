<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidate;

class ElectionReady
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
        $president = empty(Candidate::where('seat','president'))?false:true;
        $vice =empty( Candidate::where('seat','vice'))?false:true;
        $secretary = empty(Candidate::where('seat','secretary'))?false:true;
        $finance = empty(Candidate::where('seat','finance'))?false:true;  
        $treasurer= empty(Candidate::where('seat','treasurer'))?false:true; 
        $spdir = empty(Candidate::where('seat','spdir'))?false:true; 
        $sodir = empty(Candidate::where('seat','sodir'))?false:true; 
        $pro = empty(Candidate::where('seat','pro'))?false:true; 
        if(!$president && !$vice && !$secretary && !$finance && !$treasurer && !$spdir && !$sodir && !$pro){
            return response([
                'unauthorised'=>'Your name does not match the email given'
            ],401)->header('Content-Type','Application/json');
        }

        return $next($request);
    }
}
