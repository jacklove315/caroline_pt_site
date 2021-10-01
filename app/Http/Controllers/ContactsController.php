<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;


class ContactsController extends Controller
{
    /**
     * Return all contacts
     */
    public function get()
    {
        $contacts = User::whereNotIn('id', [auth()->user()->id])->get();

        return response()->json($contacts);
    }

    /**
     * Return messages for the selected user
     */
    public function getMessagesFor($id)
    {
        $messages = Message::where('from', $id)->where('to', auth()->user()->id)
            ->orWhere('to', $id)->where('from', auth()->user()->id)->get();

        return response()->json($messages);
    }

    /**
     * Post new message and return updated list of messages
     */
    public function send(Request $request)
    {

        Message::create([
            'from' => auth()->user()->id,
            'to' => $request->contact_id,
            'text' => $request->text
        ]);

        //get new list of messages
        $messages = Message::where('from', $request->contact_id)->where('to', auth()->user()->id)
            ->orWhere('to', $request->contact_id)->where('from', auth()->user()->id)->get();

        //after we send the message we need to broadcast it
//        broadcast(new NewMessage($message));

        return response()->json($messages);

    }
}
