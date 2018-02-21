<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>牟氏族谱</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.orgchart.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--该类型样式--}}
    <link rel="stylesheet" href="{{asset('css/baseStyle.css')}}">
</head>
<body>
<div id="chart-container" style="height: 800px"></div>
</body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/html2canvas.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.orgchart.js')}}"></script>
{{--数据--}}
<script type="text/javascript" src="{{asset('js/baseScripts.js')}}"></script>
</html>