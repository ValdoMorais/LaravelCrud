@include('layouts.app')

<br>
 <H1 class="text-2x1 font-semibold leading-tigh py-2">Registrar Usuario</H1>
<br>
@include('layouts.validationForm')
<div class="container">


    <form action="{{route('user.store')}}" method="post">
       @include('users._partial.form')
    </form>
</div>

@include('layouts.footer')