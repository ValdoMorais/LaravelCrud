@include('layouts.app')

<br>
<h1>Editar {{$user ->name}}</h1>

@include('layouts.validationForm')

<div class="container">


    <form action="{{route('users.update', $user->id)}}" method="Post">
        @method('PUT')
        @include('users._partial.form')
    </form>
</div>

@include('layouts.footer')