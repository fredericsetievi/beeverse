<?php

namespace App\Http\Controllers;

use App\Models\USer;
use App\Models\Wishlist;
use App\Models\Avatar;
use App\Models\UserAvatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    private function setLang()
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale('en');
        }
    }

    public function index()
    {
        $this->setLang();

        $avatars = Avatar::paginate(8);

        foreach ($avatars as $avatar) {
            $avatar->is_buyed = false;
            if (auth()->user() != null) {
                if (UserAvatar::where('user_id', auth()->user()->id)->where('avatar_id', $avatar->id)->first()) {
                    $avatar->is_buyed = true;
                }
            }
        }

        $data = [
            'avatars' => $avatars,
        ];

        return view('avatar.index', $data);
    }

    public function store($avatar_id)
    {
        $user = User::find(auth()->user()->id);
        if ($user->coin >= Avatar::find($avatar_id)->price) {
            $user->coin -= Avatar::find($avatar_id)->price;
            $user->save();
            $user_avatar = new UserAvatar;
            $user_avatar->user_id = auth()->user()->id;
            $user_avatar->avatar_id = $avatar_id;
            $user_avatar->save();
            return redirect()->back()->with('success', 'Avatar successfully bought');
        } else {
            return redirect()->back()->with('error', 'You don\'t have enough coin');
        }
    }

    public function indexSend($avatar_id)
    {
        $this->setLang();
        $friends = collect([]);
        $users = User::where('visible', true)->where('id', '!=', auth()->user()->id)->get();

        foreach ($users as $user) {
            $is_wishlist = false;

            $is_wishlist = Wishlist::where('user_id',  auth()->user()->id)
                ->where('user_liked_id', $user->id)
                ->first();

            if ($is_wishlist) {

                $is_match = Wishlist::where('user_id', $user->id)
                    ->where('user_liked_id', auth()->user()->id)
                    ->first();

                if ($is_match) {
                    $friends->add($user);
                }
            }
        }

        $data = [
            'avatar' => Avatar::find($avatar_id),
            'friends' => $friends,
        ];

        return view('avatar.send', $data);
    }

    public function send(Request $request, $avatar_id)
    {
        $request->validate([
            'friend_id' => 'required',
        ]);

        $user = User::find(auth()->user()->id);
        if ($user->coin >= Avatar::find($avatar_id)->price) {
            if (UserAvatar::where('user_id', $request->friend_id)->where('avatar_id', $avatar_id)->first()) {
                return redirect()->back()->with('error', 'Your friend already have this avatar');
            }
            $user->coin -= Avatar::find($avatar_id)->price;
            $user->save();
            $user_avatar = new UserAvatar();
            $user_avatar->user_id = $request->friend_id;
            $user_avatar->avatar_id = $avatar_id;
            $user_avatar->save();
            return redirect()->back()->with('success', 'Avatar successfully bought');
        } else {
            return redirect()->back()->with('error', 'You don\'t have enough coin');
        }
    }

    public function show($user_id)
    {
        $this->setLang();

        $data = [
            'avatars' => User::find($user_id)->avatars,
            'user' => User::find($user_id),
        ];

        return view('avatar.show', $data);
    }
}
