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
    @foreach($data as $item)
      @if($loop->first)
      <p>※データ一覧</p>
      @endif
      <li>No, {{$loop->iteration}}. {{$item}}</li>
      @if($loop->last)
      <p>--ここまで</p>
      @endif
    @endforeach
</body>
</html>