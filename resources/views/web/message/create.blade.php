@extends('web.master')

@section('title')
    Create - Tạo
@endsection

@section('content')
    <form action="{{ route('web.home.store-messages') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name='description' placeholder="description">
        <input type="text" name="content" placeholder="content">
        <button class="btn btn-success" type="submit">Submit</button>
    </form>

    @if (session('success'))
        {{ session('success') }}
    @endif
@endsection