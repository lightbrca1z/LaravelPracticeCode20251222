<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade/Index1</title>
</head>
<body>
    <h1>Blade/Index1</h1>
    <p>&#064;forディレクティブの例</p>
    <ol>
    @for ($i = 1; $i < 100; $i++)
    @if ($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
    <li>No, {{ $i }}
    @else
        @break
    @endif
    @endfor
    </ol>
</body>
</html>