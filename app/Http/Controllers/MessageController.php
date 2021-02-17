<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index()
    {
        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|max:50',
            'phone' => 'max:15',
            'email' => 'required|max:50',
            'body' => 'required'
        ]);

        //create eloquent model
        Message::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'body' => $request->body
        ]);

        //notify admin with email
        Mail::to('gigouleas@gmail.com')
            ->send(new MessageReceived($request->name, $request->phone, $request->email, $request->body));

        return response('success', 201);
    }
}
