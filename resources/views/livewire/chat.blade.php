
<div  class="col-xl-12 col-lg-12 col-md-12"  >
    <div class="chat-system" >
        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></div>
        <div class="user-list-box">
            <div class="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="people" >

                <div class="person" data-chat="person6" >
                    <div class="user-info">
                        <div class="f-head">
                            <img src="{{Path::asset('images/'.$receiver->image)}}" alt="">
                        </div>
                        <div class="f-body">
                            <div class="meta-info">
                                <span class="user-name" data-name="{{$receiver['name']}}">{{$receiver['name']}}</span>
                                @if($lastMessage)
                                <span class="user-meta-time">{{date('H:i a', strtotime($lastMessage['created_at'].'1 hour'))}}</span>
                                @endif
                            </div>
                            <span class="preview">
                                @if($lastMessage)
                                {{$lastMessage['message']}}
                                @else
                                No last message
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="chat-box" wire:ignore>

            <div class="chat-not-selected" >
                <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg> Click Contact Person To Chat</p>
            </div>

            <div class="chat-box-inner" >
                <div class="chat-meta-user">
                    <div class="current-chat-user-name"><span><img src="assets/img/90x90.jpg" alt="dynamic-image"><span class="name"></span></span></div>

                </div>
                <div class="chat-conversation-box" >
                    <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                        <div class="chat" data-chat="person6">
                            <div class="conversation-start">
                                @if($firstMessage)
                                <span>{{date('D, d M', strtotime($lastMessage['created_at']))}}</span>
                                @else<span>No Message</span>
                                @endif
                            </div>
                            @foreach($messages as $chat)
                            @if(Auth::user()['role']['id'] == $chat['role']['id'])
                            <div class="bubble me">
                                {{$chat->message}}
                            </div>
                            @else
                            <div class="bubble you">
                                {{$chat->message}}
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="chat-footer" >
                    <div class="chat-input" >
                        <form class="chat-form"  wire:submit.prevent="send">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <input type="text" wire:model="message" class="mail-write-box form-control" placeholder="Message" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>