@csrf
<div class="mb-3">
    <input type="text" class="form-control" name="name" placeholder="insira o nome" value="{{old('name') ?? old('name')}}">
</div>
<div class="mb-3">
    <input type="text" class="form-control" name="email" placeholder="insira o email" value="{{old('email')  ?? old('email')}}" >
</div>
<div class="mb-3">
    <input type="text" class="form-control" name= "password" placeholder="insira o password" >
</div>
    <button type="submit" class="btn btn-primary"> Enviar</button>
</div>