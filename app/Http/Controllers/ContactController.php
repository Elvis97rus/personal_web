<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
//        dd($validated['email']);
        foreach (['artemsh.job@gmail.com', $validated['email']] as $recipient) {
            Mail::to($recipient)->queue(new ContactMail($validated['name'], $validated['email'], $validated['message'], $recipient));
        }
        // Send Email / Telegram msg
        return [
            'success' => true
        ];
    }
}
