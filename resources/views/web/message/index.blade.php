@extends('web.master')

@section('content')
    <table>
        <tr>
            <td>Người Gửi</td>
            <td>Email</td>
            <td>Nội Dung</td>
        </tr>
        @foreach ($messages as $item)
            <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->email }}</td>
                <td>{{ $item->content}}</td>
            </tr>
        @endforeach
        <hr>
         @foreach ($users as $item )
         @dd($item->message)
             
         @endforeach
    </table>
@endsection