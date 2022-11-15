@include('layouts.app')

<br>
<br>
<div class="container">
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="insira o nome">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="email" placeholder="insira o email">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name= "password" placeholder="insira o password">
        </div>
            <button type="submit" class="btn btn-primary"> Enviar</button>
        </div>
    </form>
</div>

@include('layouts.footer')