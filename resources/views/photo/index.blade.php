<!DOCTYPE html>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    @if($photoss->count())
        @foreach($photoss as $photo)
            <h4>{{$photo->name}}</h4>
            @endforeach
        {{ $photoss->render() }}

        @endif
</body>
</html>