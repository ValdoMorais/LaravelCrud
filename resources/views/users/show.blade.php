@include('layouts.app')
<h1>Lista de usuarios <a href="{{route('users.cadastrar')}}">+</a> <br></h1>

    @foreach ($users as $user ) 
        {{$user -> name}} ---
        {{$user -> email}}
        | <a href="{{route('users.edit', $user ->id)}}">editar</a> 
            <form action="{{route('users.apagar', $user ->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button> apagar </button>
            </form>
        <br>
    @endforeach

@include('layouts.footer')