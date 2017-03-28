@extends ('layout')

@section('content')

<div class= "container-fluid">
<div class="row">
<div class="col-md-16"><h1>Usuarios Registrados:</h1></div>
@foreach ($users as $user)
<div class="col-md-16">
<a href=" {{action('UsersController@showUser',[$user->id])}}">
 <ul>{{ $user->username }}</ul> </div> </a>
@endforeach
    </div>
    </div>
        {{  $users->links() }}

@endsection