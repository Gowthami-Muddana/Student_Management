@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Enrollment page</div>
    <div class="card-body">
        <form action="{{ url('enrollments')  }}" method="POST">
            {!! csrf_field() !!}
            <label for="enroll_no">Enroll No</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enroll_no}}"
                readonly=""><br>
            <label>Batch</label></br>
            <select name="batch_id" id="batch_id" class="form-control">
                @foreach($batches as $id=> $name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
            <label>Student</label></br>




            <select name="student_id" id="student_id" class="form-control">

                @foreach($students as $id=> $name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
            <label>Join_Date</label></br>
            <input type="date" name="join_date" id="join_date" class="form-control" required=""></br>

            <label>Fee</label></br>
            <input type="text" name="fee" id="fee" class="form-control" required=""></br>
            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop