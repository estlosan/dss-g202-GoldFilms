@extends ('layout')

@section ('content')

<h1>Search results:</h1>

<div class="Caratulas">
    <a href="/films/{{$film->id}}" class="text-center" >
        <img style="width: 150px;
            height: 220px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            margin-bottom: 10px;" src="/images/{{$film->name}}.jpg" >
    </a>
</div>

@endsection