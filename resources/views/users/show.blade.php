@include('layouts.app')
<h1>Lista de usuarios <a href="{{route('users.cadastrar')}}">+</a> <br></h1>


<form action="{{route('home')}}" method="get">
    <input type="text" name="search" id="" placeholder="pesquisar p/ nome">
    <button>Pesquisar</button>
</form>
<br>

    @foreach ($users as $user ) 
        <ul>
            <li> {{$user -> name}} -
                 {{$user -> email}}
                | <a href="{{route('users.showuser', $user ->id)}}">Detalhes</a>
                | <a href="{{route('users.edit', $user ->id)}}">editar</a> <br> 
            </li>
        </ul>


    @endforeach

@include('layouts.footer')