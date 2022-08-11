<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hobby;
use App\Models\UserHobby;
use App\Models\Avatar;
use App\Models\Wishlist;
use App\Models\UserAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    private function setLang()
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale('en');
        }
    }


    public function addWishlist($userId)
    {
        $current_user = auth()->user();
        $user_liked = User::find($userId);

        $is_wishlist = Wishlist::where('user_id', $current_user->id)
            ->where('user_liked_id', $user_liked->id)
            ->first();

        if ($is_wishlist == null) {
            $wishlist = new Wishlist();
            $wishlist->user_id = $current_user->id;
            $wishlist->user_liked_id = $user_liked->id;
            $wishlist->save();
        } else {
            $is_wishlist->delete();
        }

        return redirect()->back();
    }

    public function indexAvatar()
    {
        $this->setLang();

        $data = [
            'avatars' => User::find(auth()->user()->id)->avatars,
            'user' => auth()->user(),
        ];

        return view('avatar.show', $data);
    }

    public function indexFriend()
    {
        $this->setLang();
        $friends = collect([]);
        $users = User::where('visible', true)->where('id', '!=', auth()->user()->id)->get();

        foreach ($users as $user) {
            $user->age = Carbon::parse($user->dob)->diffInYears(Carbon::now());

            $user->is_wishlist = false;
            $user->match = false;

            $user->is_wishlist = Wishlist::where('user_id',  auth()->user()->id)
                ->where('user_liked_id', $user->id)
                ->first();

            if ($user->is_wishlist) {

                $user->match = Wishlist::where('user_id', $user->id)
                    ->where('user_liked_id', auth()->user()->id)
                    ->first();

                if ($user->match) {
                    $friends->add($user);
                    $user->match = true;
                }
            }
        }

        $data = [
            'users' => $friends,
        ];

        return view('friend.index', $data);
    }

    public function indexProfile()
    {
        $this->setLang();

        $data = [
            'user' => auth()->user(),
        ];

        return view('profile.index', $data);
    }

    public function edit()
    {
        $this->setLang();

        $hobbies = Hobby::all();

        foreach ($hobbies as $hobby) {
            $hobby->is_checked = false;
            if (UserHobby::where('user_id', auth()->user()->id)->where('hobby_id', $hobby->id)->first() != null) {
                $hobby->is_checked = true;
            }
        }

        $data = [
            'user' => auth()->user(),
            'hobbies' => $hobbies,
        ];

        return view('profile.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|' . Rule::unique('users')->ignore(auth()->user()->id, 'id') . '|max:255',
            'phone' => 'required|numeric|digits_between:10,13',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
            'instagram' => 'required|regex:/^\S*$/u',
            'hobby' => 'required|min:3',
        ]);

        if (! preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$request->dob)) {
            return redirect()->back()->withErrors(['dob' => 'Invalid Date of Birth']);
        } 

        if(Carbon::parse($request->dob)->diffInYears(Carbon::now()) < 18) {
            return redirect()->back()->withErrors(['dob' => 'You must be 18 years old to register']);
        }

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        if ($request->image !== NULL) {
            $ext_image = $request->image->getClientOriginalExtension();
            $name_image = "user-" . time() . "." . $ext_image;
            $move_image = $request->image->storeAs('public/images/user', $name_image);
            $user->image = $name_image;
        }
        $user->instagram = "http://www.instagram.com/" . $request->instagram;
        $user->save();

        $user = User::where('email', $request->email)->first();

        $old_hobbies = UserHobby::where('user_id', $user->id)->get();
        foreach ($old_hobbies as $old_hobby) {
            $old_hobby->delete();
        }

        foreach ($request->hobby as $hobby) {
            $user_hobby = new UserHobby();
            $user_hobby->user_id = $user->id;
            $user_hobby->hobby_id = $hobby;
            $user_hobby->save();
        }

        // dd(auth()->user()->phone);

        return redirect()->route('profile_page')->with('success', 'Profile updated successfully');
    }

    public function topup()
    {
        $user = auth()->user();
        $user->coin += 100;
        $user->save();

        return redirect()->back()->with('success', 'Topup success');
    }

    public function deactivateAccount()
    {
        $user = auth()->user();

        if ($user->coin < 50) {
            return redirect()->back()->with('error', 'You need 50 coin to deactivate your account! You have only ' . $user->coin . ' coin');
        }

        $user->visible = false;
        $user->coin -= 50;
        $user->bin_image = $user->image;
        $user->image = 'bear-' . rand(1, 3) . '.jpg';
        $user->save();

        return redirect()->back()->with('success', 'Account disabled and 50 coin deducted');
    }

    public function reactivateAccount()
    {
        $user = auth()->user();

        if ($user->coin < 5) {
            return redirect()->back()->with('error', 'You need 5 coin to reactivate your account! You have only ' . $user->coin . ' coin');
        }

        $user->visible = true;
        $user->coin -= 5;
        $user->image = $user->bin_image;
        $user->bin_image = null;
        $user->save();

        return redirect()->back()->with('success', 'Account enabled and 5 coin deducted');
    }
}
