@extends('layout')

@section('content')
    <h1>Genres</h1>

    <table class="table table-condensed table-striped table-bordered">

    <thead>
        <tr>
            <th>Genre</th>
            <th>Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genres as $genre)
        <tr>
            <td><a href="genres/{{$genre->id}}">{{$genre->genre}}</a></td>
            <td>{{$genre->id}}
            <td>
                <a class="btn btn-success btn-xs">Create</a>
                <a class="btn btn-primary btn-xs">Edit</a>
                <a class="btn btn-danger btn-xs">Delete</a>
        @endforeach
        </tr>
    </tbody>
    </table>  
    </div>

@endsection