@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Course Details</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Course Name : {{ $courses->name }}</h5>
            <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
            <p class="card-text">Start Date : {{ $courses->startdate }}</p>
            <p class="card-text">End Date : {{ $courses->enddate }}</p>
        </div>
        </br>
    </div>
</div>
@endsection