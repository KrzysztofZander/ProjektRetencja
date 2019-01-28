@extends('layouts.app')

@section('content')

<div class="conteiner" style="padding: 50px;">
      <!-- Pole SELECT -->
<div id="wykres i srednia" style="float: left;">
  
<div id="chartContainer" style=" width: 770px;"> </div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<form action="{{ action('ParametersController@chart') }}" method="POST" role="form">
  <input type="hidden" name="_token" value={{ csrf_token() }}>

    <div class="form" style="width: 120px; margin-top:440px;">
    <label for="chart">Wybierz parametr</label>
    <select class="form-control" id="parametr" name="parametr">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
    <input type="submit" class="btn btn-primary" value="Pokaż średnią" >
  </div>
</form>

<div class="avre" style="width: 190px; "> 
      @if(isset($charta))
        <br/>Średnia parametru {{ $number }} wynosi: {{ $charta }}

      @endif
    </div>


<template>
  <b-table hover :items="items"></b-table>
</template>


</div>
@endsection