@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Edit Page</div>
    <div class="card-body">
 @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form action="{{ url('teachers/' .$teachers->id)  }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
            <label for="batch_id">Course Name</label><br>
<select name="course_id" id="course_id" class="form-control">
    @foreach($courses as $course)
        <option value="{{ $course->id }}" @if($course->id == $teachers->course_id) selected @endif>{{ $course->name }}</option>
    @endforeach
</select><br>
<label for="batch_id">Batch Name</label><br>
<select name="batch_id" id="batch_id" class="form-control">
    @foreach($batches as $batch)
        <option value="{{ $batch->id }}" @if($batch->id == $teachers->batch_id) selected @endif>{{ $batch->name }}</option>
    @endforeach
</select><br>

            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop