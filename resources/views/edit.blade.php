@extends('layout')

@section('content')

    <h1>EDIT PAGE</h1>

    <form action="{{URL::to('data/'. $data->id . '/update')}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mt-2">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="{{$data->firstname}}" required>
        </div>
        <div class="form-group mt-2">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" value="{{$data->lastname}}" required>
        </div>
        <div class="form-group  mt-2">
            <input type="submit" value="edit" class="btn btn-primary">
        </div>
    </form>
    
@endsection