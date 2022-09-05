@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")
          
        <div class="right_col" role="main">
        @include('components.show-error')
        

          <br />



            <div class="mb-5">
                <form action="{{ route('groups.draw') }}" class="row col-6" method="POST">
                    @csrf
                    <input type="number" class="form-control col-7" name="groups_number" placeholder="Número de grupos">
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary">Sortear grupos</button>
                    </div>
                </form>
            </div>
            

            
          <div class="">
            @foreach($groups as $group)
            <div class="clearfix">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                                <h2>Grupo {{ $group->group_letter }}<small>Futsal Masculino</small></h2>
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
                                    @foreach($group->teams as $team)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $team->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
@endsection
