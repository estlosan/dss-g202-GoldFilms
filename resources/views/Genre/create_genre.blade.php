@extends('layout')

@section('content')

<h1>Create<span class="label label-default"></span></h1>

<form class="form" action="{{url('/genre/new/create')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}
    
    <div class="form-group">
        <label for="label_genero">Genre</label>
        <input type="text" name="genre" id="genre" placeholder="Insert the new genre" required>
    </div>

    <div class="form-group">
        <button type="sumbit" value="create" class="btn btn-default">Create</button>
    </div>

</form>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection