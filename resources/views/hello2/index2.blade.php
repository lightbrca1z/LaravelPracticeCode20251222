<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade/Index1</title>
</head>
<body>
    <h1>Blade/Index1</h1>
    @if ($msg != '')
        <p>こんにちは、{{ $msg}}さん。</p>
    @else
        <p>何か書いてください！</p>
    @endif
    <form method="post" action="/hello2/index2">
        @csrf
        <input type="text" name="msg" value="{{ $msg }}">
        <input type="submit" value="送信">
    </form>
</body>
</html>