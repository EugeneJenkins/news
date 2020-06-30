<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return string|null
     */
    public function handle($request,Closure $next)
    {
        $id=Auth::user()->id;
        $user = DB::table('authors')->where('id_users', $id)->first();


        if ($user==null){
            return redirect('/author');
        }
        return $next($request);
    }
}
