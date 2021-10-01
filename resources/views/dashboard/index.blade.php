@extends('dashboard.master')
@section('content')
    <home-section inline-template>
        <div>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1>Welcome, {{auth()->user()->name}}</h1>
                <img src="/images/strongman.png" alt="">
            </div>

            <div class="d-flex">
                <div class="p-3 mb-4 rounded-3" style="width: 100%; background-color: lightyellow">
                    <h5>Announcements</h5>
                    @if($announcements)
                        @foreach($announcements as $announce)
                            {{ $announce['message'] }}
                        @endforeach
                    @else
                        <p>There are currently no announcements</p>
                    @endif
                </div>
            </div>


            <div class="row">
                <!-- Users bookings -->
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Classes this week
                        </div>
                        <div class="card-body" style="padding: 5%;">
                            <events
                                :events="{{$events}}"
                                :user-id="{{auth()->user()->id}}"
                            >
                            </events>
                        </div>
                    </div>
                </div>

                <!-- Change password -->
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Tell me about yourself
                        </div>

                        <div class="card-body" style="padding: 5%;">
                            Receive Email when a new class is added?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home-section>
@endsection
