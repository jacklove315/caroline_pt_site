@extends('dashboard.master')
@section('content')
    <section>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Book a Class</h1>
        </div>

        <div class="d-flex">
            <div class="p-3 mb-4 rounded-3" style="width: 100%; background-color: lightgray" >
                <h5>Booking a class</h5>
                <p>This weeks classes. Book now pay later or Book now Pay now</p>
            </div>
        </div>

        <div class="card" style="margin-bottom: 5%;">
            <div class="card-header d-flex">
                <div class="">
                    Classes
                </div>
                <div class="ms-auto">
                    {{\Carbon\Carbon::now()->format('D d M')}}
                </div>

            </div>

            <div class="card-body" style="padding: 2%">
                <classes :user-id="{{auth()->user()->id}}"></classes>
            </div>
        </div>

    </section>

@endsection
