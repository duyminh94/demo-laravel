<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('handle-upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="enter your full name">
        <input type="file" name='image'>
        <button type="submit">submit</button>
    </form>

    @if (session('error'))
        <div class="alert alert-danger">
            Error: {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            Success: {{ session('success') }}
        </div>
    @endif

    @if (count($errors))
        @foreach ($errors->all() as $item )
            {{ $item }} <br />
        @endforeach
    @endif
</body>
</html>