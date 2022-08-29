@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")

        <!-- page content -->
        <div class="right_col" role="main">
        @include('components.show-error')


          <br />


            <div class="clearfix"></div>

            <div class="mb-5">
                <form action="{{ route('groups.draw') }}" class="row col-6" method="POST">
                    @csrf
                    <input type="number" class="form-control col-7" name="groups_number" placeholder="Número de grupos">
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary">Sortear grupos</button>
                    </div>
                </form>
            </div>

            <div class="row" style="display: block;">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
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
                        <th scope="col">Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Otto</td>
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
                        <th scope="col">Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Otto</td>
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


            </div>








@endsection
