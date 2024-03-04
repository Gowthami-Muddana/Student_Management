@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Edit Page</div>
    <div class="card-body">

        <form action="{{ url('courses/' .$courses->id)  }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
            <label>Course Name</label></br>
            <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"></br>
            <label>Start Date</label></br>
            <input type="date" name="startdate" id="startdate" value="{{$courses->startdate}}" class="form-control"></br>
            <label>End Date</label></br>
            <input type="date" name="enddate" id="enddate" value="{{$courses->enddate}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop