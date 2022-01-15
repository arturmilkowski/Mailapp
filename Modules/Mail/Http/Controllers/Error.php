<?php

declare(strict_types=1);

namespace Modules\Mail\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class Error extends Controller
{
    /**
     * Display the 403 error.
     * 
     * @return Renderable
     */
    public function __invoke(): Renderable
    {
        return view('mail::errors.403');
    }
}
