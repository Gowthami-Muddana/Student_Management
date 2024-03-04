@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Payments</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment No : {{ $enrollments->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Date: {{ $enrollments->paid_date}}</p>
            <p class="card-text">Amount : {{ $enrollments->amount }}</p>
        </div>
        </br>
    </div>
</div>
@endsection