@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> student Details</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Mobile : {{ $students->mobile }}</p>
            <p class="card-text">Email : {{ $students->email }}</p>
        </div>
        </br>
    </div>
</div>
@endsection