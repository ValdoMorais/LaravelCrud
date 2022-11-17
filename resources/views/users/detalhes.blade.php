@include('layouts.app')

<br>
<h2>Detalhes do usuario {{ $user->name}}</h2>

    <ul>
        <li> {{$user -> name }}</li>
        <li> {{$user -> email}} </li>
    </ul>
    <br>
    <form action="{{route('users.apagar', $user ->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button color="white"> Apagar </button>
    </form>
    <br>


@include('layouts.footer')