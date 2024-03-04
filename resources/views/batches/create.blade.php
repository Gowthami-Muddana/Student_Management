@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches </div>
    <div class="card-body">
        <form action="{{ url('batches')  }}" method="post">
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
            <label>Batch Name</label></br>
            <input type="text" name="name" id="batch_name" class="form-control"></br>
            <label>Course </label></br>
            <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->
            <select name="course_id" id="course_id" class="form-control">
                @foreach($courses as $id => $name)
                <option value="{{$id }}">{{ $name }}</option>
                @endforeach
            </select>



            <label>Start Date</label></br>
            <input type="date" name="start_date" id="start_date" class="form-control"></br>
            <label>End Date</label></br>
            <input type="date" name="end_date" id="end_date" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop