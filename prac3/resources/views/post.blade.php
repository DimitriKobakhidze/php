<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <main>{{ $data }}</main> --}}
    @foreach($data as $item)

        <h1>{{ $item->title }}</h1>
        <h2>{{ $item->description }}</h2>
        <h3>Likes: {{ $item->like }}</h3>
        <h3>Published: {{ $item->publish_date }}</h3>
        <h3>Link: {{ $item->link }}</h3>
        <hr>
    @endforeach
</body>
</html>