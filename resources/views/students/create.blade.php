@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students page</div>
    <div class="card-body">
        <form action="{{ url('students')  }}" method="POST">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control" required="">
             </br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" class="form-control" required=""></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" maxlength="10"  title="Please enter exactly 10 digits" class="form-control" ></br>
                        <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>
            
            <input type="submit" value="save" class="btn btn-success"></br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</div>
@stop