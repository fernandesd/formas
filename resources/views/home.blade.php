@extends('adminlte::page')

@section('title', 'Formas - Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form>
  <div class="form-group">
    <label for="inputDescrição">Descrição:</label>
    <input type="text" class="form-control" id="inputDescrição" placeholder="Uma descrição curta das extrações">
  </div>
  <div class="form-group">
    <label for="inputExtrações">Extrações</label>
    <textarea class="form-control"  placeholder="Insira aqui as suas extrações" rows="7" id="inputExtrações"></textarea>
  </div>  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop