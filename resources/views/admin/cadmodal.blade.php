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
                                    <h2>Cadastro de Times <small>insira as informações corretamente</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>

                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="{{ route('team.store') }}" method="post" novalidate>
                                        @csrf
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome do Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                                            </div>
                                        </div>


                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Modalidade</label>
											<div class="col-md-6 col-sm-6 ">
												<select required class="form-control" name="modality" tabindex="-1">
													<option disabled selected value="">Selecione uma opção</option>
													<option value="1">Futsal Masculino</option>
													<option value="2">Futsal Feminino</option>
													<option value="3">Volei</option>
													<option value="4">Ping Pong</option>
													<option value="5">Carimba</option>
												</select>
											</div>
										</div>
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Gênero da Modalidade</label>
											<div class="col-md-6 col-sm-6 ">
												<select required name="gender" class="form-control" tabindex="-1">
                                                    <option disabled selected value="">Selecione uma opção</option>
                                                    <option value="M">Masculino</option>
													<option value="F">Feminino</option>
													<option value="O">Misto</option>

												</select>
											</div>
										</div>

                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Nome da Musa<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control" type="text" id="" name="muse"  title="" required />
												</span>
											</div>
										</div>

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Gravar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Todos os times</h2>
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
                                            <th>Modalidade</th>
                                            <th>Gênero</th>
                                            <th>Musa</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teams as $team)
                                            <tr>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->modality }}</td>
                                                <td>{{ $team->gender }}</td>
                                                <td>{{ $team->muse }}</td>
                                                <td>
                                                    <button class="btn btn-warning">Editar</button>
                                                    <button class="btn btn-danger">Deletar</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    {{ $teams->links() }}
                                </div>
                            </div>
                        </div>
            <!-- /page content -->
            @endsection


@section('javascript')
    <script>
        @if(\Illuminate\Support\Facades\Session::exists('success'))
        $(document).ready(function (){
            new PNotify({
                title: 'Sucesso!',
                text: 'O time foi cadastrado!',
                type: 'success',
                styling: 'bootstrap3'
            })
        });
        @endif
    </script>
@endsection
