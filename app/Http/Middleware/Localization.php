<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
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
        $languages = ['ka', 'en', 'ru'];
        $isCorrect = false;
        foreach($languages as $lang){
            if($request->language == $lang){
                $isCorrect = true;
            }
        }

        if($isCorrect){
            app()->setLocale($request->language);
            return $next($request);
        } else {
            return abort(404);
        }
        
    }
}
