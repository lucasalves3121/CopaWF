@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Jogos <small>Altere os resultados corretamente.</small></h3>
              </div>

              
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resultados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Times</th>
                          <th>Data do Jogo</th>
                          <th>Placar</th>
                          <th>Grupo</th>
                          <th style="width: 20%">Editar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Pesamakini Backend UI</a>
                            <br />
                          </td>
                          <td>
                            <ul class="list-inline">
                            <a>01.01.2022</a>    
                              
                            </ul>
                          </td>
                          <td class="project_progress">
                            
                            <h5>0   x   0</h5>
                          </td>
                          <td>
                          <h5>Pega do Banco</h5>
                          </td>
                          <td>
                            <a href="editjogo" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection