@extends('layouts.app')
@section('content')

    <div class="container py-5 px-4">

        <div class="row rounded-lg overflow-hidden shadow">

            @include('conversations.partials.header')

            <!-- Users box-->
            <div class="col-5 px-0">
                <div class="bg-white">

                    <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">Recent</p>
                    </div>

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
                    Index
                </div>
            </div>
        </div>
    </div>

@endsection
