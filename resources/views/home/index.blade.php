@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{-- Success and Error Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container z-999">
        <div class="row">
            <div class="order-2 order-lg-1 d-flex flex-column align-items-center justify-content-center">
                <h1><span>@lang('word.msg_connect_beeverse')</span></h1>
                <div class="col-6 text-center text-lg-start">
                    {{-- search bar --}}
                    <form class="d-flex" action="{{ route('search') }}" method="get">
                        <div class="input-group mt-4">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                placeholder="@lang('word.search_hobby')" name="keyword" value="{{ request('keyword') }}">
                            <div class="dropdown">
                                @if (request('gender'))
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ request('gender') }}
                                    </button>
                                @else
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        @lang('word.choose_gender')
                                    </button>
                                @endif
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <input class="dropdown-item" type="submit" name="gender" value="@lang('word.all_gender')">
                                    <input class="dropdown-item" type="submit" name="gender" value="@lang('word.male')">
                                    <input class="dropdown-item" type="submit" name="gender" value="@lang('word.female')">
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($users->count() > 0)
        <div class="card border-0 mt-4">
            <div class="card-body row justify-content-center">
                @foreach ($users as $user)
                    <div class="card ms-1 me-1 mb-1 shadow" style="width: 400px">
                        <a href="{{ route('show_avatar', $user->id) }}">
                            <img src="{{ asset('storage/images/user/' . $user->image) }}" class="card-img-top mt-2"
                                alt="user-image" style="height:300px; width:100%">
                        </a>

                        <div class="card-body">
                            <div style="height:100%">
                                <h2>{{ $user->name }}</h2>
                                <div class="badge-info d-flex">
                                    <h5><span class="badge {{ $user->gender == 'Male' ? 'bg-primary' : 'bg-danger' }}"
                                            style="margin-right: 5px">{{ $user->gender }}</span>
                                    </h5>
                                    <h5><span class="badge bg-warning">@lang('word.age'): {{ $user->age }}
                                        </span></h5>
                                    @if ($user->match == true)
                                        <h5><span class="badge bg-success" style="margin-left: 5px">@lang('word.your_friend')</span>
                                        </h5>
                                    @elseif($user->is_wishlist == true)
                                        <h5><span class="badge bg-info" style="margin-left: 5px">@lang('word.wait_for_approval')</span>
                                        </h5>
                                    @endif
                                </div>

                                <div class="hobby-badge d-flex mb-2" style="flex-direction: row; flex-wrap: wrap;">
                                    @foreach ($user->hobbies as $hobby)
                                        <span class="badge bg-secondary" style="margin-right: 5px; margin-bottom: 4px;">
                                            <?php
                                            $lang = App::getLocale();
                                            ?>
                                            @if ($lang == 'en')
                                                {{ $hobby->name_en }}
                                            @else
                                                {{ $hobby->name_id }}
                                            @endif
                                        </span>
                                    @endforeach
                                </div>

                                <small><i class="bi bi-envelope"></i> {{ $user->email }}</small><br>
                                <small><i class="bi bi-telephone-fill"></i> {{ $user->phone }}</small><br>
                                <small><i class="bi bi-instagram"></i> <a
                                        href="{{ $user->instagram }}">{{ $user->instagram }}</a></small><br>

                                <div class="connect-button d-flex mt-3">
                                    <form action="{{ route('add_wishlist', $user->id) }}" method="post">
                                        @csrf
                                        @if (!$user->is_wishlist)
                                            <button type="submit p-1" class="btn btn-outline-danger">
                                                <i class="bi bi-person-plus-fill"></i> @lang('word.connect')</button>
                                        @else
                                            <button type="submit p-1" class="btn btn-danger">
                                                <i class="bi bi-person-plus-fill"></i> @lang('word.disconnect')</button>
                                        @endif
                                    </form>

                                    @if ($user->match == true)
                                        <a href="{{ route('chat_page', $user->id) }}"><button type="submit p-1"
                                                class="btn btn-primary" style="margin-left: 12px">
                                                @lang('word.chat')</button></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div>
                {{ $users->appends(Request::except('page'))->links() }}
            </div>
        </div>
    @else
        <div class="mt-5" style="height: 400px;">
            <h2>@lang('word.msg_no_user')</h2>
        </div>
    @endif

@endsection
