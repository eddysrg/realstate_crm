<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        //Validation
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'message' => ['required', 'string'],
        ]);

        return back()->with('success', '“Thanks for reaching out. We’ll be in touch shortly. Stay tuned!”');
    }
}
