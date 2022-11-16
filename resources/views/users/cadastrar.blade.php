@include('layouts.app')

<br>
 <H1>Registrar Usuario</H1>
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error"> {{$error}}</li>
            @endforeach
        </ul>   
    </div> 
@endif
<div class="container">


    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="insira o nome" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="email" placeholder="insira o email" value="{{old('email')}}" >
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name= "password" placeholder="insira o password" >
        </div>
            <button type="submit" class="btn btn-primary"> Enviar</button>
        </div>
    </form>
</div>

@include('layouts.footer')