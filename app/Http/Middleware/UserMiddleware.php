<?php

namespace App\Http\Middleware;

use App\Recipient;
use Closure;

class UserMiddleware
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
       /* $user = \Auth::user();
        $recipient = Recipient::find(0);
        if($recipient === NULL || ($recipient !== NULL && $recipient->user_id == $user->id)) {
            return $next($request);
        }
        return redirect('/dashboard/overview');*/

    }
}
