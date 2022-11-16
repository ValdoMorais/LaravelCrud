@include('layouts.app')
<h1>Lista de usuarios <a href="{{route('users.cadastrar')}}">+</a> <br></h1>

    @foreach ($users as $user ) 
        {{$user -> name}} 
        {{$user -> email}}
        | <a href="{{route('users.edit', $user ->id)}}">editar</a> <br>
    @endforeach

@include('layouts.footer')