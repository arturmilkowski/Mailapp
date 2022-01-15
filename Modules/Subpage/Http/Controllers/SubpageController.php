<?php

namespace Modules\Subpage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Subpage\Services\Subpage;

class SubpageController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param string $slug Slug
     * 
     * @return Renderable
     */
    public function show(string $slug = ''): Renderable
    {
        $page = Subpage::handle($slug);
        
        return view('subpage::show', ['page' => $page]);
    }

}
