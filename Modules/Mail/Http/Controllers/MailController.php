<?php

declare(strict_types=1);

namespace Modules\Mail\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Mail\Http\Requests\CreateMailRequest;
use Modules\Mail\Services\Mail as MailService;
// use Illuminate\Support\Facades\Gate;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Renderable
     */
    public function index(): Renderable
    {
        // if (! Gate::allows('send-mail')) {
        //     abort(403);
        // }

        return view('mail::mail.index');
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('mail::mail.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request Validation
     * 
     * @return Renderable
     */
    public function store(CreateMailRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        MailService::handle($validated);

        return redirect()->route('mails.index')->with('status', 'Sent');
    }
}
