@extends('layouts.app')


@section('content')

@if($produtos)
<div class="container">
<small style="margin-bottom: 30px;"> <a href="{{url('/produto')}}">Voltar</a> </small>
  <h1>Informações detalhadas</h1>


      @if($produtos->quantidade < 1)
        <div class="alert alert-danger" role="alert">PRODUTO INDISPONÍVEL NO MOMENTO</div>
      @else
        <div class="alert alert-success" role="alert">PRODUTO DISPONÍVEL</div>
      @endif
      <table class="table table-sm table-bordered table-striped">
          <tr>
            <td><strong>Nome: </strong>{{ $produtos->nome or '...' }}</td>
          </tr>
          <tr>
            <td><strong>Preço: </strong>{{ $produtos->preco or '...'}}</td>
          </tr>
          <tr>
            <td><strong>Descrição: </strong>{{ $produtos->descricao or '...'}}</td>
          </tr>
          <tr>
            <td><strong>quantidade: </strong>{{ $produtos->quantidade or '...'}}</td>
          </tr>
      </table>


</div>
@else
<div class="container">
  <div style="text-align:center;">
    <img src="{{ asset('/img/404.png') }}" class="img-responsive" alt="">
      <h3>Ops!... Produto não encontrado..</h3>
      <span style="margin-bottom: 30px;"> <a href="{{url('/produto')}}">Voltar</a> </span>
  </div>
</div>

@endif
@endsection
