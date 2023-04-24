@extends('web.master')

@section('title')
    Edit Sửa
@endsection

@section('content')
<form action="{{ route('web.home.update-messages', $message->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="name" value="{{ $message->name }}">
    <input type="text" name='description' placeholder="description" value="{{ $message->description }}">
    <input type="text" name="content" placeholder="content" value="{{ $message->content }}">
    <button class="btn btn-success" type="submit">Submit</button>
</form>

@if (session('success'))
    {{ session('success') }}
@endif

@endsection