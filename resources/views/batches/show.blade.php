@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Batches</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Batch Name : {{ $batches->name }}</h5>
            <p class="card-text">Course : {{ $batches->course->name}}</p>
            <p class="card-text">Start Date : {{ $batches->start_date }}</p>
            <p class="card-text">End Date : {{ $batches->end_date }}</p>
        </div>
        </br>
    </div>
</div>
@endsection