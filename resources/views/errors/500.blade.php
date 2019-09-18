<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>500 - Internal Server Error </title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Bree+Serif|Source+Sans+Pro:300,400);
        body{
            font-family: 'Source Sans Pro', sans-serif;
            background: #eeeeee;
            color: #d1232a;
        }
        .bree-font{
            font-family: 'Bree Serif', serif;
        }
        #main-body{
            text-align: center;
            position:fixed;
            top: 50%;
            left: 50%;
            width:30em;
            height:18em;
            margin-top: -22em;
            margin-left: -15em;
        }
        .enormous-font{
            font-size: 10em;
            margin-bottom: 0em;
        }
        .big-font{
            font-size: 2em;
        }
        .big-font a {
            text-decoration: underline;
            color: #d1232a;
        }
    </style>
</head>
<body>
    <div id="main-body">
        <p class="enormous-font bree-font"> 500 </p>
        <h2>Sorry, unexpected error :(</h2>
        <p class="big-font"><a href="{!! action('User\HomeController@index') !!}">Về trang chủ</a></p>
    </div>
</body>
</html>