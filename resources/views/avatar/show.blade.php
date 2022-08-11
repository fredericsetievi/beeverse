@extends('layouts.main')

@section('title', 'Collector Angels')

@section('content')
    <h1>@lang('word.collector_angels_avatar'): {{ $user->name }}</h1>

    <div class="container mt-2">
        {{-- back to home page --}}
        <a href="{{ route('home_page') }}"><button type="button" class="btn btn-secondary" aria-label="Close"><i
                    class="bi bi-arrow-left-circle"></i>
                @lang('word.back')</button></a>
    </div>
    <div class="card border-0">
        <div class="card-body row justify-content-center">
            @if ($avatars->count() > 0)
                @foreach ($avatars as $avatar)
                    <div class="card ms-1 me-1 mb-1 shadow" style="width: 300px">
                        <img src="{{ asset('storage/images/avatar/' . $avatar->image) }}" class="card-img-top mt-2"
                            alt="avatar-image" style="height:250px; width:100%">

                        <div class="card-body">
                            <div style="height:50px">
                                <h5><span class="badge bg-secondary"><i class="bi bi-cash-coin"
                                            style="color: rgb(244, 248, 14)"></i>
                                        {{ number_format($avatar->price, 0, ',', '.') }} @lang('word.coin')
                                    </span></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="mt-5" style="height: 400px;">
                    <h2 class="mt-3">{{ $user->name }} @lang('word.does_not_have_avatar')</h2>
                </div>
            @endif
        </div>
    </div>
@endsection
