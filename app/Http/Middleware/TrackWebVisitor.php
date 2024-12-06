<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\WebVisitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackWebVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        $visitDate = Carbon::today();

        WebVisitor::firstOrCreate([
            'ip_address' => $ipAddress,
            'visit_date' => $visitDate,
        ]);

        return $next($request);
    }
}
