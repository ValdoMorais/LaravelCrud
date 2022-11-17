@include('layouts.app')

<br>
<h2 class="text-2x1 font-semibold lending-tigh py-2">Detalhes do usuario {{ $user->name}}</h2>

<table class="table-auto border-collapse border border-slate-500 w-100">
    <thead>
      <tr>
        <th class="border border-slate-600">Nome</th>
        <th class="border border-slate-600">email</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-slate-700">
                {{$user -> name}} 
            </td>
            <td class="border border-slate-700">
                {{$user -> email}} 
            </td>
            <td class="border border-slate-700">
                <form action="{{route('users.apagar', $user ->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button color="white"> Apagar </button>
                </form>
            </td>
    <br>


@include('layouts.footer')