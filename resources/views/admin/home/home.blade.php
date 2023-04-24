@extends('admin.master')

@section('title')
    Home
@endsection

@section('content')
    Content <br />
    <table>
        <tr>
            <td>id</td>
            <td>image</td>
            <td>title</td>
            <td>description</td>
        </tr>
        {{-- @foreach ( $data as $item ) 
        @if ($item['id'] % 2 == 1)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['image'] }}</td>
            <td>{{ $item['title'] }}</td>
            <td>{{ $item['description'] }}</td>
        </tr>
        @endif
        @endforeach --}}
        @for ($i = 0; $i < count($data); $i++)
        @if ($data[$i]['id'] % 2 == 1)
        <tr>
            <td>{{ $data[$i]['id'] }}</td>
            <td>{{ $data[$i]['image'] }}</td>
            <td>{{ $data[$i]['title'] }}</td>
            <td>{{ $data[$i]['description'] }}</td>
        </tr>
        @else
        <tr>
            <td></td>
            <td>{{ $data[$i]['image'] }}</td>
            <td>{{ $data[$i]['title'] }}</td>
            <td>{{ $data[$i]['description'] }}</td>
        </tr>
        @endif
        @endfor
    </table>
    
@endsection