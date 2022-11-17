@csrf
<div class="mb-3">
    <input type="text" class="form-control" name="name" placeholder="insira o nome" value="{{($user->name) ?? old('name')}}">
</div>
<div class="mb-3">
    <input type="text" class="form-control" name="email" placeholder="insira o email" value="{{($user->email)  ?? old('email')}}" >
</div>
<div class="mb-3">
    <input type="text" class="form-control" name= "password" placeholder="insira o password" >
</div>
    <button type="submit" class="shadow rounded-full bg-purple-500 hover:bg-purple w-24"> Enviar</button>
</div> 