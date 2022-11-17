@include('layouts.app')

<br>
 <H1>Registrar Usuario</H1>
<br>
@include('layouts.validationForm')
<div class="container">


    <form action="{{route('user.store')}}" method="post">
       @include('users._partial.form')
    </form>
</div>

@include('layouts.footer')