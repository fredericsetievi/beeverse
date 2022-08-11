@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <h1>@lang('word.register')</h1>
    <section>
        <div class="container">
            <div class="container py-2 h-100">

                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="fw-bolder">@lang('word.create_new_account')</h3>

                                <hr class="mb-3 pb-2 pb-md-0 mb-md-5" style="color: #2934d0;">

                                {{-- Error Message --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="name">@lang('word.name')</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" class="mb-0" value="{{ old('name') }}"
                                                placeholder="Full Name">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="email">@lang('word.email')</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}"
                                                placeholder="Email Address">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="phone">@lang('word.phone')</label>
                                            <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" value="{{ old('phone') }}"
                                                placeholder="Phone start with 62">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="dob">@lang('word.dob')</label>
                                            <input type="text" class="form-control @error('dob') is-invalid @enderror"
                                                id="dob" name="dob" value="{{ old('dob') }}"
                                                placeholder="yyyy-mm-dd">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="phone">@lang('word.gender')</label>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="radio-male"
                                                    name="gender" value="Male"
                                                    {{ old('gender') && old('gender') == 'Male' ? 'checked' : '' }} checked>
                                                <label class="form-check-label" for="radio-male">@lang('word.male')</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="radio-female"
                                                    name="gender" value="Female"
                                                    {{ old('gender') && old('gender') == 'Female' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio-female">@lang('word.female')</label>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="phone">@lang('word.instagram')</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://www.instagram.com/</span>
                                        </div>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                            id="basic-url" aria-describedby="basic-addon3" name="instagram"
                                            placeholder="username" value="{{ old('instagram') }}">
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="image">@lang('word.profile_picture')</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="phone">@lang('word.msg_choose_hobbies')</label>
                                            @foreach ($hobbies as $hobby)
                                                <div class="form-check">
                                                    <input class="form-check-input @error('hobby[]') is-invalid @enderror"
                                                        type="checkbox" id="check" name="hobby[]"
                                                        value="{{ $hobby->id }}">
                                                    <?php
                                                    $lang = App::getLocale();
                                                    ?>
                                                    @if ($lang == 'en')
                                                        <label class="form-check-label">{{ $hobby->name_en }}</label>
                                                    @else
                                                        <label class="form-check-label">{{ $hobby->name_id }}</label>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="password">@lang('word.password')</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                autocomplete="new-password" id="password" name="password"
                                                placeholder="8 Characters Password">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="password_confirmation">@lang('word.confirm_password')</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                autocomplete="new-password" id="password" name="password_confirmation"
                                                placeholder="Password Confirmation">
                                        </div>
                                    </div>

                                    <div class="col-md-10 mb-2 mt-3">
                                        <h5>@lang('word.registration_price'): Rp {{ number_format($registration_price, 0, ',', '.') }}
                                        </h5>
                                        <input type="hidden" name="registration_price"
                                            value="{{ $registration_price }}">
                                    </div>

                                    <div class="d-flex justify-content-center mt-3 pt-2">
                                        <input class="btn btn-primary btn-lg px-5" type="submit"
                                            value="@lang('word.register')" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="col-md-10 mt-3 mb-5 d-flex justify-content-center">
        <h5>@lang('word.msg_already_have_account') <a href="{{ route('login_page') }}" class="text-primary">@lang('word.login')</a></h5>
    </div>
@endsection
