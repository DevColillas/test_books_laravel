<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(StoreContactRequest $request)
    {
        return redirect()->route('contact.index')->with('success', __('contact.success'));
    }
}
