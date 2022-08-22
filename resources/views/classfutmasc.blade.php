@extends('layouts.main')

@section('title','Copa Wesley Ferreira')

@section("content")
<div class="container col-lg-6">
    <table class="table table-sm table-dark">
  <thead>
    
  <h1>Grupo A</h1>
    <tr>
      <th scope="col">Col.</th>
      <th scope="col">Clube</th>
      <th scope="col">Pts</th>
      <th scope="col">Vt</th>   
      <th scope="col">Emp</th>      
      <th scope="col">Der</th>   
      <th scope="col">SG</th>

    </tr>
  </thead>
  <tbody>
    <tr class="bg-success">
      <th scope="row">1</th>
      <td>Improvaveis</td>
      <td>3</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      
      <td>@mdo</td>
    </tr>
    <tr class="bg-danger">
      <th scope="row">2</th>
      <td>Clube</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr class="bg-primary">
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
<table class="table table-sm table-dark">
  <thead>
    <h1>Grupo B</h1>
    <tr>
      <th scope="col">Col.</th>
      <th scope="col">Clube</th>
      <th scope="col">Pts</th>
      <th scope="col">PJ</th>
      <th scope="col">Vt</th>      
      <th scope="col">Emp</th>      
      <th scope="col">Der</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Clube</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
@endsection