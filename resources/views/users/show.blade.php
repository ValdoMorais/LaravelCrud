@include('layouts.app')
<h1 class="text-2x1 font-semibold lending-tigh py-2">Lista de usuarios <a href="{{route('users.cadastrar')}}" class="shadow bg-purple-500 hover:bg-purple">+</a> <br></h1>


<form action="{{route('home')}}" method="get">
    <input type="text" name="search" id="" placeholder="pesquisar p/ nome">
    <button>Pesquisar</button>
</form>
<br>

<table class="table-auto border-collapse border border-slate-500 w-100 ">
    
    <thead>
      <tr>
        <th class="border border-slate-600 h-10 min-h-0" >Nome</th>
        <th class="border border-slate-600 ">Email</th>
        <th class="border border-slate-600">Detalhes</th>
        <th class="border border-slate-600">Editar</th>
        <th class="border border-slate-600">Apagar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user ) 
        <tr>
            
            <td class="border border-slate-700 h-8 min-h-0">
                {{$user -> name}} 
            </td>
            <td class="border border-slate-700">
                {{$user -> email}}
            </td>    
            <td class="border border-slate-700"> 
                <a class="shadow bg-red-500 " href="{{route('users.showuser', $user ->id)}}">detalhes</a>
            </td>
            <td class="border border-slate-700">
                <a class="shadow bg-purple-500 hover:bg-purple" href="{{route('users.edit', $user ->id)}}">editar</a> <br> 
            </td>
            <td class="border border-slate-700">
                <form action="{{route('users.apagar', $user ->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="shadow bg-blue-500 hover:bg-purple"> apagar </button>
                </form>
            </td>
                
        </tr>
        @endforeach
    </tbody>
    
</table>

@include('layouts.footer')