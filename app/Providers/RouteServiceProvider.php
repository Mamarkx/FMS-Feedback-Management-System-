<?php
namespace Middleware;

use Closure;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCustomCondition
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
        
    }
}
