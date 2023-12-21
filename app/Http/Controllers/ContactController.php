<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Feedback;
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
            'type' => 'required',
        ]);
//        dd($validated['email']);
        $msg = Feedback::create($validated);
        dd($msg);
        foreach (['artemsh.job@gmail.com', $validated['email']] as $recipient) {
            Mail::to($recipient)->queue(new ContactMail($validated['name'], $validated['email'], $validated['message'], $recipient));
        }
        // Send Email / Telegram msg
        return [
            'success' => true
        ];
    }
}
