@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")
<!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Cadastro</h3>
                        </div>


                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            @include('components.show-error')
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Cadastro de Jogadores <small>insira as informações corretamente</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>

                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="{{ route('player.store') }}" method="post" novalidate>
                                        @csrf
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome do Jogador<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nº da Camisa do Jogador<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="number" placeholder="" required="required" />
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <div class="col-12 d-flex justify-content-center mt-4">
                                                    <button type='submit' class="btn btn-primary">Gravar</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Todos os Jogadores</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>

                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Camisa</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($players as $player)
                                                <tr>
                                                    <td>{{ $player->name }}</td>
                                                    <td>{{ $player->number }}</td>
                                                    <td>
                                                        <button class="btn btn-warning" onclick="editPlayer({{ $player->id }})">Editar</button>
                                                        <form action="{{ route('player.delete', $player->id) }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete" />
                                                        <button class="btn btn-danger">Deletar</button>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $players->links() }}
                                </div>
                            </div>
                            </div>
                        </div>

            <!-- /page content -->
            @endsection


@section('modals')
    @include('admin.components.editplayer')
@endsection


@section('javascript')
    <script>
        @if(\Illuminate\Support\Facades\Session::exists('success'))
            $(document).ready(function (){
                new PNotify({
                    title: 'Sucesso!',
                    text: 'O jogador foi cadastrado!',
                    type: 'success',
                    styling: 'bootstrap3'
                })
            });
        @endif

        function editPlayer(player_id){
            let url = '{{ route("player.find", ":id") }}';
            url = url.replace(':id', player_id);
            $.ajax({
                url: url,
            }).done(function (response) {
                for (let key in response){
                    $('#'+key).val(response[key])
                }

                $('#player_id').val(player_id)
            });

            $('#edit_team').modal('show');
        }


        $('#form_edit').submit(function(e){
            $.ajax({
                url: "{{ route('player.update', ':id') }}".replace(':id', $('#player_id').val()),
                method: 'PUT',
                data: $(this).serialize(),
            })
        })
    </script>
@endsection
