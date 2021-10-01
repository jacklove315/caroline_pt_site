@extends('dashboard.master')
@section('content')
    <div class="card">
        <div class="card-header">
            I am a card header
        </div>

        <div class="card-body" style="padding: 0">
            <chat-app-component :user="{{auth()->user()}}"></chat-app-component>
        </div>
    </div>
@endsection
