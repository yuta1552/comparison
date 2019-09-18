@extends('layouts.app')
@section('content')

    <h1>アイテム新規登録ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($item, ['route' => 'items.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('product', 'アイテム名：') !!}
                    {!! Form::text('product', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price1', '価格A：') !!}
                    {!! Form::tel('price1', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price2', '価格B：') !!}
                    {!! Form::tel('price2', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録する', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>


@endsection