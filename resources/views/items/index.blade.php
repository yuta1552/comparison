@extends('layouts.app')
@section('content')

    <h1>アイテム一覧</h1>
    
    @if (count($items) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>アイテム名</th>
                    <th>価格A</th>
                    <th>価格B</th>
                    <th>日時</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{!! link_to_route('items.show', $item->product, ['id' => $item->id]) !!}</td>
                    <td>{{ $item->price1 }}</td>
                    <td>{{ $item->price2 }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('items.create', '新規アイテムの登録', [], ['class' => 'btn btn-primary']) !!}


@endsection