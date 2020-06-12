<div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user --}}
                
                
                <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                    <div class="chat_img">
                        <img src="/assets/main_theme/medium/img/users/10.jpg" class="rounded-circle">
                    </div>
                    <div>
                        <p>{{ $message->message }}</p>
                        <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                    </div>
                    
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" class="submit">
</div>
