@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teachers page</div>
    <div class="card-body">
        <form action="{{ url('teachers')  }}" method="POST">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Course </label></br>
            <select name="course_name" id="course_name" class="form-control">
                @foreach($courses as $id => $name)
                <option value="{{$name }}">{{ $name }}</option>
                @endforeach
            </select></br>
            <label>Batch name </label></br>
            <select name="batch_name" id="batch_name" class="form-control">
                @foreach($batches as $id => $name)
                <option value="{{$name }}">{{ $name }}</option>
                @endforeach
            </select>
            <label>Batch Timings</label></br>
            <input type="datetime-local" name="batchtimings" id="batchtimings" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" maxlength="10"  title="Please enter exactly 10 digits" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop