@extends('layouts.main')

@section('title', 'Friend')

@section('content')
    <h1>@lang('word.your_friend')</h1>

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
                                        <h5><span class="badge bg-info" style="margin-left: 5px">@lang('word.your_friend')</span>
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
                                                class="btn btn-primary" style="margin-left: 12px;">
                                                @lang('word.chat')</button></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="mt-5" style="height: 400px;">
            <h2>@lang('word.msg_no_friend')</h2>
        </div>
    @endif
@endsection
