@extends('layout')

@section('content')

<h1>Pagina principal</h1>

<script>
window.onload = function() {
    document.getElementById('menu-home').className = 'active';
};
</script>
@endsection