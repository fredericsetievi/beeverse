@extends('layouts.main')

@section('title', 'Avatar')

@section('content')
    <h1>@lang('word.buy_avatar')</h1>

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

    <div class="card border-0">
        <div class="card-body row justify-content-center">
            @foreach ($avatars as $avatar)
                <div class="card ms-1 me-1 mb-1 shadow" style="width: 300px">
                    <img src="{{ asset('storage/images/avatar/' . $avatar->image) }}" class="card-img-top mt-2"
                        alt="avatar-image" style="height:250px; width:100%">

                    <div class="card-body">
                        <div style="height:100px">
                            <h5><span class="badge bg-secondary"><i class="bi bi-cash-coin"
                                        style="color: rgb(244, 248, 14)"></i>
                                    {{ number_format($avatar->price, 0, ',', '.') }} @lang('word.coin')
                                </span></h5>
                            @if ($avatar->is_buyed == true)
                                <span class="badge bg-success">@lang('word.msg_already_bought')</span>
                            @endif

                            <div class="button mt-2 d-flex justify-content-center">
                                @if ($avatar->is_buyed == false)
                                    <form action="{{ route('buy_avatar', $avatar->id) }}" method="post">
                                        @csrf
                                        <button type="submit p-1" class="btn btn-primary" style="margin-right: 10px"><i
                                                class="bi bi-bag-fill"></i>
                                            @lang('word.buy')</button>
                                    </form>
                                @endif

                                <a href="{{ route('send_avatar_page', $avatar->id) }}"><button type="submit p-1"
                                        class="btn btn-info"><i class="bi bi-send-fill"></i> @lang('word.send_as_a_gift')</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center mt-3">
        <div>
            {{ $avatars->appends(Request::except('page'))->links() }}
        </div>
    </div>
@endsection
