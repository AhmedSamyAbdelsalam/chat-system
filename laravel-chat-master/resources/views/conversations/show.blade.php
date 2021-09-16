@extends('layouts.app')
@section('content')

    <div class="container py-5 px-4">

        <div class="row rounded-lg overflow-hidden shadow">

            @include('conversations.partials.header')

            <!-- Users box-->
            <div class="col-5 px-0">
                <div class="bg-white">

                    <livewire:conversations.conversation-users :conversation="$conversation"
                                                               :users="$conversation->users" />

                    <div class="messages-box">
                        <div class="list-group rounded-0">

                            <livewire:conversations.conversation-list :conversations="$conversations" />

                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Box-->
            <div class="col-7 px-0">
                <div class="px-4 py-5 chat-box bg-white">

                    <livewire:conversations.conversation-messages :conversation="$conversation"
                                                                  :messages="$conversation->messages" />

                </div>

                <!-- Typing area -->
                <livewire:conversations.conversation-reply :conversation="$conversation" />

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(function() {
            $('.chat-box').stop().animate({
                scrollTop: $('.chat-box')[0].scrollHeight
            }, 500);
        });
    </script>
@endsection
