@extends('layout')

@section('content')

<h1>Edit<span class="label label-default"></span></h1>

<form class="form" action="{{url('/genre/edit/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

    <div class="form-group">
        <label for="label_genero">Genre</label>
             <div class="dropdown">
                    <select id="test" name="genero" onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->genre}}</option>
                    @endforeach
                </select>
            </div> 

    <label>Genre name</label>

    <div class="form-group">
        <input type="text" id="text_content" name="genero_nombre" value="" />
    </div>

    <div class="form-group">
        <button type="sumbit" class="btn btn-default">Edit</button>
    </div>
</form>

@endsection