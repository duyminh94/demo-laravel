<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('take-form') }}" method="post" enctype="multipart/form-data">
        @csrf {{-- phím tắt token lỗi 419 --}}
        <input type="text" name="name">
        <input type="file" name="image" id="">
        <button>Submit</button>
    </form>
</body>
</html>