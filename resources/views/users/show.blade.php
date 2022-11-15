@include('layouts.app')
<h1>Lista de usuarios</h1>
    @foreach ($users as $user ) 
        <label for="name">Nome: </label>{{$user -> name}} <br>
        <label for="email">Email: </label>{{$user -> email}} <br>
    @endforeach

@include('layouts.footer')