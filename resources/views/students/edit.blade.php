@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Edit Page</div>
    <div class="card-body">
        <form action="{{ url('students/' .$students->id)  }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="number" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop