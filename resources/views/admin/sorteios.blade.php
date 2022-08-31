@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")


        <!-- page content -->
        <div class="right_col" role="main">


          <br />




            <div class="row" style="display: block;">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{ route('editjogo') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sortear Jogos</a>
                  <br>
                    <h2>Grupo A<small>Futsal MAsculino</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Time 1 </th>
                        <th scope="col">Time     </th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td><a href="{{ route('editjogo') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar D e H </a>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Thornton</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
                </div>

              <div class="row" style="display: block;">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{ route('editjogo') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sortear Jogos</a>
                  <br>
                    <h2>Grupo B<small>Futsal Masculino</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <table class="table">
                      <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Time 1 </th>
                        <th scope="col">Time2 </th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td><a href="{{ route('editjogo') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar D e H </a>
                        </td>
                        <tr>
                          <th scope="row">3</th>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


              </div>
            </div>








@endsection
