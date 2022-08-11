@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <h1>@lang('word.my_profile')</h1>

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

    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/images/user/' . $user->image) }}" alt="profile-picture"
                                class="rounded-circle img-fluid" style="width: 150px; height: 150px">
                            <h5 class="my-3">{{ $user->name }}</h5>
                        </div>
                    </div>
                    @lang('word.hobbies'):
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                @foreach ($user->hobbies as $hobby)
                                    <li class="list-group-item d-flex justify-content-start align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <?php
                                        $lang = App::getLocale();
                                        ?>
                                        @if ($lang == 'en')
                                            <p class="mb-0">{{ $hobby->name_en }}</p>
                                        @else
                                            <p class="mb-0">{{ $hobby->name_id }}</p>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.name')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.email')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.dob')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->dob }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.phone')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.gender')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->gender }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.instagram')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->instagram }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">@lang('word.join_since')</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</p>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- edit profile button --}}
                    <div class="row">
                        <div class="col-sm-4 my-2">
                            <a href="{{ route('edit_profile_page') }}" class="btn btn-outline-primary me-1 flex-grow-1"><i
                                    class="bi bi-pencil-square me-2"></i>@lang('word.edit_profile')</a>
                        </div>
                    </div>

                    {{-- coin --}}
                    <div class="coin-cointainer d-flex mt-3">
                        <h3><span class="badge bg-warning">@lang('word.total_coin'): <i class="bi bi-cash-coin"
                                    style="color: rgb(244, 248, 14)"></i>
                                {{ number_format(auth()->user()->coin, 0, ',', '.') }}</span></h3>

                        <form action="{{ route('topup_coin') }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-info"
                                style="margin-left: 30px">@lang('word.topup')</button>
                        </form>
                    </div>


                    <div class="status-account-container mt-3">
                        @if ($user->visible == true)
                            <div class="status-account-button d-flex">
                                <h3><span class="badge bg-success">@lang('word.status_account'): <i class="bi bi-eye-fill"></i>
                                        @lang('word.active')</span></h3>

                                {{-- deactivate account --}}
                                <form action="{{ route('deactivate_account') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary"
                                        style="margin-left: 30px">@lang('word.deactivate')</button>
                                </form>
                            </div>
                            <label for="coin">@lang('word.note') : @lang('word.msg_deactivate') <i class="bi bi-cash-coin"
                                    style="color: rgb(244, 248, 14)"></i> 50 @lang('word.coin')</label>
                        @else
                            <div class="status-account-button d-flex">
                                <h3><span class="badge bg-danger">@lang('word.status_account'): <i class="bi bi-eye-slash-fill"></i>
                                        @lang('word.inactive')</span></h3>

                                {{-- reactivate account --}}
                                <form action="{{ route('reactivate_account') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary"
                                        style="margin-left: 30px">@lang('word.reactivate')</button>
                                </form>
                            </div>
                            <label for="coin">@lang('word.note') : @lang('word.msg_reactivate') <i class="bi bi-cash-coin"
                                    style="color: rgb(244, 248, 14)"></i> 5 @lang('word.coin')</label>
                        @endif
                    </div>

                </div>
            </div>
    </section>
@endsection
