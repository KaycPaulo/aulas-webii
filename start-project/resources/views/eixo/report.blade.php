<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Report</title>
</head>

<body>
    @foreach ($cursos as $item)
        <h1>{{$item->name}}</h1>
        <h4>{{$item->abreviatura}}</h4>
        <h4>{{$item->duracao}} ano(s)</h4>
        <hr>
    @endforeach
</body>

</html>