@extends('layout')

@section('content')

    <h1>Create Page</h1>

    <form action="/store" method="post">
        @csrf
        <div class="form-group mt-2">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" required>
        </div>
        <div class="form-group mt-2">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>
        <div class="form-group mt-2">
            <input type="submit" class="btn btn-primary" value="create">
        </div>
    </form>
    
@endsection