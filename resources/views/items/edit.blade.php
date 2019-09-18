@extends('layouts.app')
@section('content')

    <h1>{{ $item->product }} の詳細編集ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($item, ['route' => ['items.update', $item->id], 'method' => 'put']) !!}
            
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
                
                {!! Form::submit('更新する', ['class' => 'btn btn-light']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection