<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $properties = Property::select('title', 'price', 'image', 'address', 'bedrooms', 'bathrooms', 'area')->limit(6)->get();
        return view('home', ['properties' => $properties]);
    }

    public function store(Request $request)
    {

        //Validation
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'message' => ['required', 'string'],
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->name,
        ]);

        return back()->with('success', '“Thanks for reaching out. We’ll be in touch shortly. Stay tuned!”');
    }
}
