<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\Message;

use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    public function get() {
        $contactMessages = Message::orderBy('created_at', 'desc')->get();
        return view("isAdmin.messages",['contactMessages' => $contactMessages]);
    }

    public function toggleStatus(Request $request)
    {
        $message = Message::find($request->message_id);
        if ($message) {
            $message->status = $message->status === 'unread' ? 'read' : 'unread';
            $message->save();
        }
        return redirect()->back();
    }

    public function deleteMessage(Request $request)
    {
        $message = Message::find($request->message_id);
        if ($message) {
            $message->delete();
        }
        return redirect()->back();
    }
}
