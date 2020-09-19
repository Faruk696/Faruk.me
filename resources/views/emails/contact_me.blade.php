<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>Portfolio</h1>
    <hr>
    @foreach($data as $sdata)
      <p>{{ $sdata }}</p>
    @endforeach
</body>
</html>