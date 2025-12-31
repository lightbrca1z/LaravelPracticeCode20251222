<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade/Index1</title>
</head>
<body>
    <h1>Blade/Index1</h1>
    <p>&#064;whileディレクティブの例</p>
    <ol>
        @php
            $counter = 0;
        @endphp
        @while($counter < count($data))
        <li>{{$data[$counter]}}</li>
        @php
            $counter++;
        @endphp
        @endwhile
    </ol>
</body>
</html>