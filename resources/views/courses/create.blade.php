@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Course page</div>
    <div class="card-body">
        <form action="{{ url('courses')  }}" method="POST">
            {!! csrf_field() !!}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <label>Course Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
            <label>Duration</label></br>
            <label>From Date</label></br>
            <input type="date" name="startdate" id="startdate" class="form-control"></br>
            <label>End date</label></br>
            <input type="date" name="enddate" id="enddate" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>

        </form>
    </div>
</div>
@stop