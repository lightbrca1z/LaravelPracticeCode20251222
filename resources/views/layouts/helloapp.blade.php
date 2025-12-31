<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body{font-size:16px; color:#777;}
        h1{font-size:40px; text-align:right;
        color:#d0d0f0;}
        ul{
            font-size:12px;
        }
        hr{
            margin:25px 100px; border-top:1px dashed #ddd;
        }
        .menutitle{
            font-size:14px;
            font-weight:bold;
            margin:0px;
        }
        .content{
            margin:10px;
        }
        .footer{
            text-align:right;
            font-size:10px;
            margin:10px;
            border-bottom:solid 1px #ccc;
            color:#ccc;
        }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <ul>
    <p class="menutitle">※メニュー</p>
    @section('menubar')
    @show
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>