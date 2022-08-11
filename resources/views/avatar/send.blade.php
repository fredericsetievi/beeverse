@extends('layouts.main')

@section('title', 'Avatar')

@section('content')
    <h1>@lang('word.send_avatar')</h1>

    @if (auth()->user() != null)
        <h2><span class="badge bg-warning">@lang('word.your_coin'): <i class="bi bi-cash-coin" style="color: rgb(244, 248, 14)"></i>
                {{ number_format(auth()->user()->coin, 0, ',', '.') }}</span></h2>
    @endif

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

    {{-- Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="card border-0">
        <div class="card-body row justify-content-center">
            <div class="card ms-1 me-1 mb-1 shadow" style="width: 400px">
                <img src="{{ asset('storage/images/avatar/' . $avatar->image) }}" class="card-img-top mt-2"
                    alt="avatar-image" style="height:400px; width:100%">

                <div class="card-body text-center">
                    <div style="height:40px">
                        @if (auth()->user() != null)
                            <h5>@lang('word.price'): <span class="badge bg-secondary"><i class="bi bi-cash-coin"
                                        style="color: rgb(244, 248, 14)"></i>
                                    {{ number_format($avatar->price, 0, ',', '.') }} @lang('word.coin')
                                </span></h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- list friend --}}
    <form action="{{ route('send_avatar', $avatar->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            @if ($friends->count() > 0)
                <label for="friend_id" class="form-label">@lang('word.send_avatar_to'):</label>
                <select class="form-select" aria-label="Default select example" id="friend_id" name="friend_id">
                    <option value="">@lang('word.choose_your_friend')</option>
                    @foreach ($friends as $friend)
                        <option value="{{ $friend->id }}" {{ old('friend_id') == $friend->id ? 'selected' : '' }}>
                            {{ $friend->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary mt-3">
                    @lang('word.send')
                </button>
            @else
                <div class="alert alert-danger mb-0 mt-3">
                    @lang('word.msg_no_friend')
                </div>
            @endif
        </div>
    </form>
@endsection
