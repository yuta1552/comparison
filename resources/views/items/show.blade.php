@extends('layouts.app')
@section('content')

    <h1>{{ $item->product }} の詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>アイテム名</th>
            <td>{{ $item->product }}</td>
        </tr>
        <tr>
            <th>価格A</th>
            <td>{{ $item->price1 }}</td>
        </tr>
        <tr>
            <th>価格B</th>
            <td>{{ $item->price2 }}</td>
        </tr>
    </table>
    
    {!! link_to_route('items.edit', 'このアイテムを編集', ['id' => $item->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($item, ['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
        {!! Form::submit('このアイテムを削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection