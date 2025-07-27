<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact', ['content' => null]);
    }

    public function submitQuery(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Query::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your query has been submitted successfully!');
    }
}
