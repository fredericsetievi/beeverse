<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
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

        if (auth()->user() != null) {
            $users = User::where('visible', true)->where('id', '!=', auth()->user()->id)->paginate(9);
        } else {
            $users = User::where('visible', true)->paginate(9);
        }

        foreach ($users as $user) {
            $user->age = Carbon::parse($user->dob)->diffInYears(Carbon::now());

            $user->is_wishlist = false;
            $user->match = false;

            if (auth()->user() != null) {
                $is_wishlist = Wishlist::where('user_id',  auth()->user()->id)
                    ->where('user_liked_id', $user->id)
                    ->first();

                if ($is_wishlist) {
                    $user->is_wishlist = true;

                    $is_match = Wishlist::where('user_id', $user->id)
                        ->where('user_liked_id', auth()->user()->id)
                        ->first();

                    if ($is_match) {
                        $user->match = true;
                    }
                }
            }
        }

        $data = [
            'users' => $users,
        ];

        return view('home.index', $data);
    }

    public function search()
    {
        $this->setLang();

        $keyword = request('keyword');
        $gender = request('gender');

        if($gender == 'All Gender' || $gender == 'Semua Jenis Kelamin'){
            if (auth()->user() != null) {
                $users = User::where('visible', true)
                        ->where('id', '!=', auth()->user()->id)
                        ->WhereHas('hobbies', function ($query) use ($keyword) {
                            $query->where('name_en', 'like', '%' . $keyword . '%')
                                ->orWhere('name_id', 'like', '%' . $keyword . '%');
                        })
                        ->paginate(9);
            } else {
                $users = User::where('visible', true)
                        ->WhereHas('hobbies', function ($query) use ($keyword) {
                            $query->where('name_en', 'like', '%' . $keyword . '%')
                                ->orWhere('name_id', 'like', '%' . $keyword . '%');
                        })
                        ->paginate(9);
            }
        } else{
            if($gender == 'Laki-laki'){
                $gender = 'Male';
            }else if($gender == 'Perempuan'){
                $gender = 'Female';
            }

            if (auth()->user() != null) {
                $users = User::where('visible', true)
                        ->where('id', '!=', auth()->user()->id)
                        ->where('gender', $gender)
                        ->WhereHas('hobbies', function ($query) use ($keyword) {
                            $query->where('name_en', 'like', '%' . $keyword . '%')
                                ->orWhere('name_id', 'like', '%' . $keyword . '%');
                        })
                        ->paginate(9);
            } else {
                $users = User::where('visible', true)
                        ->where('gender', $gender)
                        ->WhereHas('hobbies', function ($query) use ($keyword) {
                            $query->where('name_en', 'like', '%' . $keyword . '%')
                                ->orWhere('name_id', 'like', '%' . $keyword . '%');
                        })
                        ->paginate(9);
            }
        }

        foreach ($users as $user) {
            $user->age = Carbon::parse($user->dob)->diffInYears(Carbon::now());
            
            $user->is_wishlist = false;
            $user->match = false;

            if (auth()->user() != null) {
                $is_wishlist = Wishlist::where('user_id',  auth()->user()->id)
                    ->where('user_liked_id', $user->id)
                    ->first();

                if ($is_wishlist) {
                    $user->is_wishlist = true;

                    $is_match = Wishlist::where('user_id', $user->id)
                        ->where('user_liked_id', auth()->user()->id)
                        ->first();

                    if ($is_match) {
                        $user->match = true;
                    }
                }
            }
        }

        $data = [
            'users' => $users,
        ];

        return view('home.index', $data);
    }

    // public function search()
    // {
    //     $this->setLang();

    //     $keyword = request('keyword');

    //     if (auth()->user() != null) {
    //         $users = User::where('visible', true)
    //             ->where('id', '!=', auth()->user()->id)
    //             ->WhereHas('hobbies', function ($query) use ($keyword) {
    //                 $query->where('name_en', 'like', '%' . $keyword . '%')
    //                     ->orWhere('name_id', 'like', '%' . $keyword . '%');
    //             })
    //             ->get();
    //     } else {
    //         $users = User::where('visible', true)
    //             ->WhereHas('hobbies', function ($query) use ($keyword) {
    //                 $query->where('name_en', 'like', '%' . $keyword . '%')
    //                     ->orWhere('name_id', 'like', '%' . $keyword . '%');
    //             })
    //             ->get();
    //     }

    //     foreach ($users as $user) {
    //         $user->is_wishlist = false;
    //         $user->match = false;

    //         if (auth()->user() != null) {
    //             $is_wishlist = Wishlist::where('user_id',  auth()->user()->id)
    //                 ->where('user_liked_id', $user->id)
    //                 ->first();

    //             if ($is_wishlist) {
    //                 $user->is_wishlist = true;

    //                 $is_match = Wishlist::where('user_id', $user->id)
    //                     ->where('user_liked_id', auth()->user()->id)
    //                     ->first();

    //                 if ($is_match) {
    //                     $user->match = true;
    //                 }
    //             }
    //         }
    //     }

    //     $data = [
    //         'users' => $users,
    //     ];

    //     return view('search', $data);
    // }

    // public function filter($gender)
    // {
    //     //PAGINATE
    //     if (auth()->user() != null) {
    //         if ($gender == 'All') {
    //             $users = User::where('visible', true)
    //                 ->where('id', '!=', auth()->user()->id)
    //                 ->get();
    //         } else {
    //             $users = User::where('visible', true)
    //                 ->where('id', '!=', auth()->user()->id)
    //                 ->where('gender', $gender)
    //                 ->get();
    //         }
    //     } else {
    //         if ($gender == 'All') {
    //             $users = User::where('visible', true)
    //                 ->get();
    //         } else {
    //             $users = User::where('visible', true)
    //                 ->where('gender', $gender)
    //                 ->get();
    //         }
    //     }

    //     $data = [
    //         'users' => $users,
    //     ];

    //     return view('search', $data);
    // }
}
