@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error"> {{$error}}</li>
            @endforeach
        </ul>   
    </div> 
@endif