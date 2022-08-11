<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hobby;
use App\Models\UserHobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    private function setLang()
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale('en');
        }
    }
    
    public function indexLogin()
    {
        $this->setLang();
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            if ($request->has('remember')) {
                Cookie::queue('LoginCookie', $request->input('email'), 5);
            }
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['creds' => 'Invalid Accounts']);
        }
    }

    public function indexRegister()
    {
        $this->setLang();
        $data = [
            'hobbies' => Hobby::all(),
            'registration_price' => rand(100000, 125000),
        ];
        return view('auth.register', $data);
    }

    public function authRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required|numeric|digits_between:10,13',
            'gender' => 'required|in:Male,Female',
            'dob' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'instagram' => 'required|regex:/^\S*$/u',
            'hobby' => 'required|min:3',
        ]);

        if (! preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$request->dob)) {
            return redirect()->back()->withErrors(['dob' => 'Invalid Date of Birth']);
        } 

        if(Carbon::parse($request->dob)->diffInYears(Carbon::now()) < 18) {
            return redirect()->back()->withErrors(['dob' => 'You must be 18 years old to register']);
        }

        $ext_image = $request->image->getClientOriginalExtension();
        $name_image = "user-" . time() . "." . $ext_image;
        $move_image = $request->image->storeAs('public/images/user', $name_image);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->image = $name_image;
        $user->instagram = "http://www.instagram.com/" . $request->instagram;
        $user->visible = true;
        $user->registration_price = $request->registration_price;
        $user->coin = 100;
        $user->save();

        $user = User::where('email', $request->email)->first();

        foreach($request->hobby as $hobby) {
            $user_hobby = new UserHobby();
            $user_hobby->user_id = $user->id;
            $user_hobby->hobby_id = $hobby;
            $user_hobby->save();
        }

        return redirect()->route('payment_page', $user->id);
    }

    public function indexPayment($user_id){
        $this->setLang();
        
        $user = User::find($user_id);

        $data = [
            'user' => $user,
            'registration_price' => $user->registration_price,
        ];

        return view('payment.index', $data);
    }

    public function paymentProcess(Request $request){
        if($request->overpaid == 'yes'){
            $user = User::find($request->user_id);
            $user->coin = $user->coin + ($request->money - $request->registration_price);
            $user->save();
            return redirect()->route('login_page');
        }else if($request->overpaid == 'no'){
            return redirect()->back()->withErrors(['overpaid' => 'Please fill the balance again!']);
        }   

        $request->validate([
            'money' => 'required|integer|min:0',
        ]);

        if($request->money < $request->registration_price){
            return redirect()->back()->with('underpaid', $request->registration_price - $request->money)->with('money', $request->money);
        }else if($request->money > $request->registration_price){
            return redirect()->back()->with('overpaid', $request->money - $request->registration_price)->with('money', $request->money);
        }else{
            $user = User::find($request->user_id);
            $user->coin = $user->coin + 0;
            $user->save();
        }

        return redirect()->route('login_page');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
