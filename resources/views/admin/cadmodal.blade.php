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
                                    <form class="" action="" method="post" novalidate>
                                        
                                        </p>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome do Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Modalidade</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" tabindex="-1">
													<option></option>
													<option value="Futsal Masculino">Futsal Masculino</option>
													<option value="Futsal Feminino">Futsal Feminino</option>
													<option value="Volei">Volei</option>
													<option value="Ping Pong">Ping Pong</option>
													<option value="Carimba">Carimba</option>
													
												</select>
											</div>
										</div>
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Gênero da Modalidade</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" tabindex="-1">
													<option></option>
													<option value="Masculino">Masculino</option>
													<option value="Feminino">Feminino</option>
													<option value="Feminino">Misto</option>
													
												</select>
											</div>
										</div>
                                        
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Nome da Musa<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control" type="text" id="" name=""  title="" required />
												
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
                        </div>
            <!-- /page content -->
            @endsection