<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    private function setLang()
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale('en');
        }
    }

    public function index($user_id)
    {
        $this->setLang();

        $data = [
            'friend' => User::find($user_id),
            'chats' => Chat::where(function ($query) use ($user_id) {
                $query->where('sending_user_id', auth()->user()->id)->where('receiving_user_id', $user_id);
            })->orWhere(function ($query) use ($user_id) {
                $query->where('sending_user_id', $user_id)->where('receiving_user_id', auth()->user()->id);
            })->orderBy('created_at', 'asc')->get(),
        ];

        return view('chat.index', $data);
    }

    public function store(Request $request, $friend_id)
    {
        if (($request->hasFile('image') && !$request->filled('message')) || !$request->filled('message')) {
            return redirect()->back()->with('status', 'Please type message before sending');
        }

        $request->validate([
            'message' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $chat = new Chat();
        $chat->sending_user_id = auth()->user()->id;
        $chat->receiving_user_id = $friend_id;
        $chat->message = $request->message;
        if ($request->hasFile('image')) {
            $ext_image = $request->image->getClientOriginalExtension();
            $name_image = "chat" . time() . "." . $ext_image;
            $request->image->storeAs('public/images/chat', $name_image);
            $chat->image = $name_image;
        }
        $chat->created_at = Carbon::now();
        $chat->save();

        return redirect()->back();
    }

    public function showMessage($user_id)
    {
        $this->setLang();

        $data = [
            'friend' => User::find($user_id),
            'chats' => Chat::where(function ($query) use ($user_id) {
                $query->where('sending_user_id', auth()->user()->id)->where('receiving_user_id', $user_id);
            })->orWhere(function ($query) use ($user_id) {
                $query->where('sending_user_id', $user_id)->where('receiving_user_id', auth()->user()->id);
            })->orderBy('created_at', 'asc')->get(),
        ];

        return view('chat.message', $data)->render();
    }
}
