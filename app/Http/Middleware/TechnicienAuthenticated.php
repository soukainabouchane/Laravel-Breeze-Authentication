<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicienAuthenticated
{
      /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();

            // if user is not technicien take him to his dashboard
            if ( $user->hasRole('user') ) {
                return redirect(route('dashboard'));
            }

            // if user is not technicien take him to his dashboard
            if ( $user->hasRole('admin') ) {
                return redirect(route('admin_dashboard'));
            }

            // allow admin to proceed with request
            else if ( $user->hasRole('technicien') ) {
                return $next($request);
            }
        }

        abort(403);  // permission denied error
    }
}
