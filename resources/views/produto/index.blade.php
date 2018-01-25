@extends('layouts.app')

@section('content')

<style media="screen">
  td{
    text-align: center !important;
  }
  .hidden
  {
    display: none;
  }
</style>

@if($qtd < 1)
  @push('scripts')
    <script type="text/javascript">
      $(window).on('load',function(){
            $('#myModal').modal('show');
        });
    </script>
  @endpush
@endif

<div class="container">

  <div class="col-md-3">
    <h4>PRODUTOS INDISPONÍVEL</h4>
    <small class="{{ $qtd < 1 ? 'hidden' : '' }}">Clique para visualizar</small>
          <div class="list-group">
            @foreach($produtos as $item)
              @if($item->quantidade <= 1)
                <a href="{{url('/produto/'.$item->id) }}" class="list-group-item list-group-item-danger">{{$item->nome }}</a>
              @endif
            @endforeach
      </div>
    </div>

  <div class="col-md-9">
    <h4>TODOS OS PRODUTOS DO ESTOQUE </h4>
    <a href="{{ url('/produto/create') }}" class="btn btn-sm btn-success">Cadastrar novo produto</a>
    <span class="pull-right">Quantidade no estoque: <span class="label label-danger">{{ $qtd}}</span> </span>
    <div class="clearfix" style="margin-bottom:10px;"></div>
    <div class="panel panel-default">
      <div class="panel-body table-responsive">
        <table class="table table-sm table-striped" id="myTable">
          <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Visualizar</th>
            <th>Editar</th>
            <th>Apagar</th>
          </thead>
          <tbody>
            @foreach($produtos as $item)
              <tr class="{{ $item->quantidade <= 1 ? 'danger' : '' }}">
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->preco }}</td>
                <td>{{ $item->descricao }}</td>
                <td>{{ $item->quantidade }}</td>
                <td><a href="/produto/{{$item->id}}" class="btn btn-info btn-sm">Visualizar</a> </td>
                <td><a href="/produto/{{$item->id}}/edit" class="btn btn-warning btn-sm">Editar</a> </td>
                <td>
                  {!! Form::open([
                      'method'=>'DELETE',
                      'url' => ['/produto', $item->id],
                      'style' => 'display:inline'
                  ]) !!}
                      {!! Form::button('Apagar', array(
                              'type' => 'submit',
                              'class' => 'btn btn-danger btn-sm',
                              'title' => 'Apagar',
                              'onclick'=>'return confirm("Confirmar exclusão?")'
                      )) !!}
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #03a9f4; color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CADASTRAR NOVO PRODUTO</h4>
      </div>
      <div class="modal-body">
      <p>Nenhum produto encontrado cadastrado no estoque, Deseja cadastrar um novo produto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">SAIR</button>
        <a href="{{ url('/produto/create') }}" type="button" class="btn btn-primary">NOVO</a>
      </div>
    </div>
  </div>
</div>

@endsection
