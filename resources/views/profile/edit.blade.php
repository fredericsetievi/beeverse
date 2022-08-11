@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')
    <section>
        <div class="container mt-2">
            <div class="container py-2 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="fw-bolder">@lang('word.edit_profile')</h3>

                                <hr class="mb-3 pb-2 pb-md-0 mb-md-5" style="color: #2934d0;">

                                {{-- Error Message --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                <form action="{{ route('edit_profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="name">@lang('word.name')</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" class="mb-0"
                                                value="{{ old('name') ? old('name') : $user->name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="email">@lang('word.email')</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email"
                                                value="{{ old('email') ? old('email') : $user->email }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="phone">@lang('word.phone')</label>
                                            <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone"
                                                value="{{ old('phone') ? old('phone') : $user->phone }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="dob">@lang('word.dob')</label>
                                            <input type="text" class="form-control @error('dob') is-invalid @enderror"
                                                id="dob" name="dob"
                                                value="{{ old('dob') ? old('dob') : $user->dob }}" placeholder="yyyy-mm-dd">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="phone">@lang('word.gender')</label>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="radio-male"
                                                    name="gender" value="Male"
                                                    {{ (old('gender') && old('gender') == 'Male' ? 'checked' : $user->gender == 'Male') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio-male">@lang('word.male')</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="radio-female"
                                                    name="gender" value="Female"
                                                    {{ (old('gender') && old('gender') == 'Female' ? 'checked' : $user->gender == 'Female') ? 'checked' : '' }}>
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
                                            placeholder="username"
                                            value="{{ old('instagram') ? old('instagram') : substr($user->instagram, 25) }}">
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
                                            <label for="phone">@lang('word.hobbies')</label>
                                            @foreach ($hobbies as $hobby)
                                                <div class="form-check">
                                                    <input class="form-check-input @error('hobby[]') is-invalid @enderror"
                                                        type="checkbox" id="check" name="hobby[]"
                                                        value="{{ $hobby->id }}"
                                                        {{ $hobby->is_checked == true ? 'checked' : '' }}>
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

                                    <div class="d-flex justify-content-center mt-2 pt-2">
                                        <input class="btn btn-primary btn-lg px-5" type="submit"
                                            value="@lang('word.update')" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
