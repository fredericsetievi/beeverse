@extends('layouts.main')

@section('title', 'Chat')

@section('css')
    <style>
        .message-container {
            /* width: 1000px; */
            overflow-y: scroll;
            height: 650px;
            border-radius: 15px;
            padding: 10px;
            box-shadow: 0 0 10px rgb(220, 220, 220);
        }

        .input-container {
            width: 800px;
        }

        .day-label {
            font-size: 0.9em;
            color: #868e96;
        }

        .message-body {
            background-color: #c5d1d9;
            padding: 7px 20px;
            border-radius: 0 15px 15px 15px;
            max-width: 60%;
            word-wrap: break-word;
        }

        .message-body-self {
            background-color: #112aca;
            color: white;
            padding: 7px 20px;
            border-radius: 15px 15px 0 15px;
            max-width: 60%;
            word-wrap: break-word;
        }

        .message-img {
            max-width: 30%;
            height: auto;
            margin-top: 10px
        }

        .chat-profile-img {
            width: 35px;
            height: 35px;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 10px;
        }

        .text-muted {
            font-size: 0.8em
        }
    </style>
@endsection

@section('content')

    <div class="page-container d-flex flex-column align-items-center">
        <div class="container mt-3">
            {{-- back to home page --}}
            <a href="{{ route('home_page') }}"><button type="button" class="btn btn-secondary" aria-label="Close"><i
                        class="bi bi-arrow-left-circle"></i>
                    @lang('word.back')</button></a>
        </div>

        {{-- title --}}
        <h5 class="fw-bold mb-3">@lang('word.chat_with')
            {{ $friend->name }}
        </h5>

        {{-- status --}}
        @if (session('status'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- chat message --}}
        <div class="message-container col-md-8" id="message-container">
            @include('chat.message')
        </div>

        {{-- input message form --}}
        <div class="input-container mt-3">
            <form action="{{ route('send_chat', $friend->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="message" id="message"
                            placeholder="@lang('word.type_a_message')" autocomplete="off">
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <button class="btn btn-primary w-100" type="submit" id="send-message"><i
                                class="bi bi-send-fill"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <label for="image">@lang('word.upload_picture')<i class="bi bi-paperclip"></i></label>
                    <input style="width: 70%" type="file" class="form-control" id="image" name="image">
                </div>
            </form>
        </div>

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
    </div>
@endsection


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                // var pos = $('#message-container').scrollTop();
                var page = window.location.href;

                $.ajax({
                    url: page + '/message',
                    success: function(data) {
                        // alert(data);
                        $('#message-container').html(data);
                        // $('#message-container').scrollTop(pos);
                    }
                });
                // console.log('refresh');
                // console.log(window.location.href + '/message');
            }, 3000);
        });
    </script>
@endsection
