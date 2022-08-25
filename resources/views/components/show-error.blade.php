@if($errors->any())
    <div class="alert alert-danger" role="alert">
        Não foi possível enviar os dados!
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
