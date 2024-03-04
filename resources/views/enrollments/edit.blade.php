@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Edit Page</div>
    <div class="card-body">

        <form action="{{ url('enrollments/' .$enrollments->id)  }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />

            <label>Enroll No</label></br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"
                value="{{$enrollments->enroll_no}}" readonly=""></br>

                <label for="batch_id">Batch Name</label><br>
<select name="batch_id" id="batch_id" class="form-control">
    @foreach($batches as $batch)
        <option value="{{ $batch->id }}" @if($batch->id == $enrollments->batch_id) selected @endif>{{ $batch->name }}</option>
    @endforeach
</select><br>




            <label>Student Id</label></br>
            <select name="student_id" id="student_id" class="form-control">
    @foreach($students as $student)
        <option value="{{ $student->id }}" @if($student->id == $enrollments->student_id) selected @endif>{{ $student->name }}</option>
    @endforeach
</select><br>

            <label>Join_Date</label></br>
            <input type="text" name="join_date" id="join_date" class="form-control"
                value="{{$enrollments->join_date}}"></br>

            <label>Fee</label></br>

            <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop