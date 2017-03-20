<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoldFilms</title>

    </head>
    <body>
    
    <li><h1>Nombre: {{$user->username}}</h1></li>
        <ul>
      <li>id: {{$user->id}}</li>
      <li>Email: {{$user->email}}</li>
      <li>password: {{$user->password}}</li>
      </ul>
</body>
</html>