@extends('layouts.app')


@section('content')



<div class="container">

  <small style="margin-bottom: 30px;"> <a href="{{url('/produto')}}">Voltar</a> </small>

  {!! Form::open(['url' => '/produto', 'method' => 'POST']) !!}

  {!! Form::label('nome', 'Nome') !!}
  {!! Form::text('nome', '' ,['class' => 'form-control', 'placeholder' => 'Nome:', 'required']) !!}
  {!! Form::label('preco', 'Preço') !!}
  {!! Form::number('preco', '' ,['class' => 'form-control', 'placeholder' => '0.00', 'required']) !!}
  {!! Form::label('descricao', 'Descrição') !!}
  {!! Form::text('descricao', '' ,['class' => 'form-control', 'placeholder' => 'Descrição', 'required']) !!}
  {!! Form::label('quantidade', 'Quantidade') !!}
  {!! Form::number('quantidade', '' ,['class' => 'form-control', 'placeholder' => '0', 'required']) !!}

  {!! Form::submit('ENVIAR', ['class' => 'btn btn-success', 'style' => 'margin-top:10px', 'required']) !!}

  {!! Form::close() !!}

</div>

@endsection
