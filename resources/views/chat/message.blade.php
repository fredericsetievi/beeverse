@foreach ($chats as $chat)
    {{-- chat lawan --}}
    @if ($chat->sending_user_id != auth()->user()->id)
        <div class="message px-2 py-2 d-flex flex-column align-items-start">
            <div class="message-header mb-2">
                <div class="message-header-left">
                    <img class="chat-profile-img" src="{{ asset('/storage/images/user/' . $friend->image) }}"
                        alt="profile picture">
                    <b>{{ $friend->name }}</b>
                    <span class="text-muted">{{ \Carbon\Carbon::parse($chat->created_at)->format('H:i') }}</span>
                </div>
            </div>
            @if ($chat->message != null)
                <div class="message-body">
                    <p class="mb-0">{!! $chat->message !!}</p>
                </div>
            @endif

            @if ($chat->image != null)
                {{-- {{ $chat->image }} --}}
                <img class="message-img" src="{{ asset('/storage/images/chat/' . $chat->image) }}" alt="image">
            @endif
        </div>
    @else
        {{-- chat sendiri --}}
        <div class="message px-2 py-2 d-flex flex-column align-items-end">
            <div class="message-header mb-2">
                <div class="message-header-left">
                    <span class="text-muted ">{{ \Carbon\Carbon::parse($chat->created_at)->format('H:i') }}</span>
                </div>
            </div>
            @if ($chat->message != null)
                <div class="message-body-self">
                    <p class="mb-0">{!! $chat->message !!}</p>
                </div>
            @endif
            @if ($chat->image != null)
                {{-- {{ $chat->image }} --}}
                <img class="message-img" src="{{ asset('/storage/images/chat/' . $chat->image) }}" alt="image">
            @endif
        </div>
    @endif
@endforeach

<script>
    var messageContainer = document.querySelector('#message-container');
    messageContainer.scrollTop = messageContainer.scrollHeight - messageContainer.clientHeight;
</script>
