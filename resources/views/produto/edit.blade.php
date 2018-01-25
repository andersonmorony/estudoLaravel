@extends('layouts.app')


@section('content')



<div class="container">

  <small style="margin-bottom: 30px;"> <a href="{{url('/produto')}}">Voltar</a> </small>

  {!! Form::model($produtos, ['url' => ['/produto', $produtos->id], 'method' => 'PATCH']) !!}

  {!! Form::label('nome', 'Nome') !!}
  {!! Form::text('nome', null ,['class' => 'form-control', 'placeholder' => 'Nome:', 'required']) !!}
  {!! Form::label('preco', 'Preço') !!}
  {!! Form::number('preco', null ,['class' => 'form-control', 'placeholder' => '0.00', 'required']) !!}
  {!! Form::label('descricao', 'Descrição') !!}
  {!! Form::text('descricao', null ,['class' => 'form-control', 'placeholder' => 'Descrição', 'required']) !!}
  {!! Form::label('quantidade', 'Quantidade') !!}
  {!! Form::number('quantidade', null ,['class' => 'form-control', 'placeholder' => '0', 'required']) !!}

  {!! Form::submit('ENVIAR', ['class' => 'btn btn-success', 'style' => 'margin-top:10px', 'required']) !!}

  {!! Form::close() !!}

</div>

@endsection
