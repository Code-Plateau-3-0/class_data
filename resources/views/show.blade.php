@extends('layout')

@section('content')

    <h1>Show data</h1>
    

    <table class="table table-striped w-50">
        <tr>
            <th>s/n</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($data as $detail)
        <tr>
            <td>{{$detail->id}}</td>
            <td>{{$detail->firstname}}</td>
            <td>{{$detail->lastname}}</td>
            <td><a href="{{URL::to('data/'. $detail->id . '/edit')}}" class="btn btn-primary" >EDIT</a></td>
            <td><a href="{{URL::to('data/'. $detail->id . '/delete')}}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
    </table>
    
@endsection