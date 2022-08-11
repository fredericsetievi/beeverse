@extends('layouts.main')

@section('title', 'Payment')

@section('content')
    <h1>@lang('word.payment')</h1>
    <div class="payment-container mt-5" style="margin-top: 150px; margin-bottom: 200px;">
        <div class="input-payment-container mb-5">
            <form action="{{ route('payment', $user->id) }}" method="post">
                @csrf
                <div class="col-md-10 mb-2 mt-3">
                    <h5>@lang('word.registration_price'): Rp {{ number_format($registration_price, 0, ',', '.') }}
                    </h5>
                    <input type="hidden" name="registration_price" value="{{ $registration_price }}">
                </div>
                @lang('word.input_money')
                <input type="hidden" name="registration_price" value="{{ $registration_price }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="number" name="money" id="money" value="{{ session('money') }}">
                <button type="submit" class="btn btn-primary" style="margin-left: 20px">@lang('word.pay')</button>
            </form>
        </div>

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- under paid --}}
        @if (session('underpaid'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @lang('word.msg_underpaid') Rp. {{ number_format(session('underpaid'), 0, ',', '.') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- over paid --}}
        @if (session('overpaid'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                @lang('word.msg_overpaid') Rp. {{ number_format(session('overpaid'), 0, ',', '.') }}, @lang('word.msg_overpaid_solution')
                <div class="yes-no-button d-flex">
                    <form action="{{ route('payment', $user->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="registration_price" value="{{ $registration_price }}">
                        <input type="hidden" name="money" value="{{ session('money') }}">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="overpaid" value="yes">
                        <button type="submit" class="btn btn-success">@lang('word.yes')</button>
                    </form>
                    <form action="{{ route('payment', $user->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="registration_price" value="{{ $registration_price }}">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="overpaid" value="no">
                        <button type="submit" class="btn btn-danger" style="margin-left: 20px">@lang('word.no')</button>
                    </form>
                </div>

            </div>
        @endif
    </div>
@endsection
