<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello3</title>
    <style>
        body{font-size:16pt;coloe:#777;}
        h1{font-size:40px;text-align:right;
        color:#d0d0f0; margin:-20px 0px 0px 0px}
    </style>
</head>
<body>
        <h1>Blade/Index2</h1>
        <p>{{ $msg}}</p>
        <form method="post" action="/hello4">
            @csrf
            <input type="text" name="msg">
            <input type="submit" value="送信">
        </form>
</body>
</html>