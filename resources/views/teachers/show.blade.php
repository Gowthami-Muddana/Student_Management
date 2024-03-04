@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> teachers Page</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $teachers->name }}</h5>
            <p class="card-text">Course_Name : {{ $teachers->course_name }}</p>
            <p class="card-text">Batch_Name : {{ $teachers->batch_name }}</p>
            <p class="card-text">Batvh Timings : {{ $teachers->batchtimings}}</p>
            <p class="card-text">Mobile : {{ $teachers->mobile}}</p>
        </div>
        </br>
    </div>
</div>
@endsection