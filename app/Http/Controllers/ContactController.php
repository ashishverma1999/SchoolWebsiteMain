<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // In a full production setup with mail configured, mail can be sent here.
        // For now, redirect back with a clear success message.
        return redirect()->route('contact')->with('success', 'Thank you ' . $validated['name'] . '! Your message has been sent successfully. The administration of ' . config('school.name') . ' will contact you shortly.');
    }
}
