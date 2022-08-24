@extends('layouts.mainad')

@section('title','Administrador | Copa Wesley Ferreira')

@section("content")
<!-- ver um jeito de fazer com que o cronometro nao zere ao atulizar a pagina-->
<!-- assim que aperta o butão nas tabela p adicionar um evento no jogo que ele capture o minuto.-->
<!--Ao encerrar o primeiro temos os dados sao guardados, pro segundo tempo so soma os cartoes e os gols, 
as faltas zeram ( porem precisa guarda essa infomações-->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sumula Copa WF | Online</h3>
              </div>

              <div class="title_right">
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#QuestaoModal">
        Cronometro
    </button>

    <div class="bs-example">

        <div id="QuestaoModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body" width="200px">
                        
                    <div class="container" style="text-align:center">
    <h3>CRONÔMETRO</h3>
    <div class="principal">
      <p class="tempo">
        <h1><span class="minutos">00</span>:<span class="segundos">00</span>:<span class="milissegundos">00</span></h1>
      </p>
      <div>
      <button onclick="iniciar()" class="iniciar">INICIAR</button>
<button onclick="parar()" class="parar">PARAR</button>
<button onclick="resetar()" class="resetar">RESETAR</button>
      </div>
    </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="count">TIme1</div>

                          <h3>Modalidade</h3>
                          <p></p>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="count"style="text-align:center">  0 </div>

                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          
                          <div class="count" style="text-align:center"> 0</div>
                            
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          
                          <div class="count">Time2</div>

                          <h3>Modalidade</h3>
                        </div>
                      </div>
                    </div>
                    <h3>1° Tempo</h3>            
                    <div class="row top_tiles" style="margin: 10px 0;">
                      <div class="col-md-3 tile">
                        <span>Falta Time 1 (Pega do banco)</span>
                        <h2>0 </h2>
                        
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Falta Time 2 (Pega do banco)</span>
                        <h2>0</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Cartões Amarelos</span>
                        <h2>0</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Cartões Vermelhos</span>
                        <h2>0</h2>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <button type="button" onclick="return confirm('Deseja realmente encerrar o 1° Tempo?')" class="btn btn-primary btn-lg">Final do 1º Tempo</button>
                    </div>
                    <h3>2° Tempo</h3>
                    <div class="row top_tiles" style="margin: 10px 0;">
                      <div class="col-md-3 tile">
                        <span>Falta Time 1 (Pega do banco)</span>
                        <h2>0 </h2>
                        
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Falta Time 2 (Pega do banco)</span>
                        <h2>0</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Cartões Amarelos</span>
                        <h2>0</h2>
                        <span class="sparkline_two" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                      </div>
                      <div class="col-md-3 tile">
                        <span>Cartões Vermelhos</span>
                        <h2>0</h2>
                        <span class="sparkline_three" style="height: 160px;">
                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>

                      </div>
                      <button type="button" onclick="return confirm('Deseja realmente encerrar o 2° Tempo?')" class="btn btn-primary btn-lg">Final do 2° Tempo</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
                      
          
         
          
          

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jogadores Time 1<small>modelidade pegado banco </small></h2>
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
                        <th scope="col">Nº</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>
                            <!-- Ao aperta o butao atualiza o banco c/ +1 de acordo com jogador-->
                            <a href="editjogo" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> F </a>
                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-trash-o"></i> C </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> C </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> GF </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> GC </a>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
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
                    <h2>Jogadores Time 2<small>modelidade pegado banco </small></h2>
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
                        <th scope="col">Nº</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>
                            <!-- Ao aperta o butao atualiza o banco c/ +1 de acordo com jogador-->
                            <a href="editjogo" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> F </a>
                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-trash-o"></i> C </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> C </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> GF </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> GC </a>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
        

            </div>

                      @endsection

