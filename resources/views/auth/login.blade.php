@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <h1>@lang('word.login')</h1>
    <div class="login-container" style="margin-top: 50px;">

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="modal-body mt-2 d-flex justify-content-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 mb-2">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ \Illuminate\Support\Facades\Cookie::get('LoginCookie') !== null ? \Illuminate\Support\Facades\Cookie::get('LoginCookie') : old('email') }}"
                            required autocomplete="email" autofocus placeholder="Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-10 mb-2">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-10 mb-1">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="remember"
                                    {{ \Illuminate\Support\Facades\Cookie::get('LoginCookie') !== null ? 'checked' : '' }}>
                                <label class="form-check-label" for="checkbox">@lang('word.remember_me')</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 mb-5 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-4">
                            @lang('word.login')
                        </button>
                    </div>

                    <div class="col-md-10 mb-5 d-flex justify-content-center">
                        <h5>@lang('word.msg_don\'t_have_account') <a href="{{ route('register_page') }}"
                                class="text-primary">@lang('word.register')</a></h5>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
