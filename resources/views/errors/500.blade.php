<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>500 - Internal Server Error </title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Bree+Serif|Source+Sans+Pro:300,400);
        *{
            maring: 0;
            padding: 0;
        }
        body{
            font-family: 'Source Sans Pro', sans-serif;
            background: #eeeeee;
            color: #0080ff;
        }
        .bree-font{
            font-family: 'Bree Serif', serif;
        }
        #content{
            margin: 0 auto;
            width: 960px;
        }
        .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }
        .clearfix {
            display: block;
        }
        #logo {
            margin: 1em;
            float: left;
            display: block;
        }
        #main-body{
            text-align: center;
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
            color: #0080ff;
        }
        hr{
            width: 25%;
            height: 1px;
            background: #0080ff;
            border: 0px;
        }
    </style>
</head>
<body>
<div id="content">
    <div class="clearfix"></div>

    <div id="main-body">
        <p class="enormous-font bree-font"> 500 </p>
        <h2>Sorry, unexpected error :(</h2>
        <p class="big-font">This error has been sent to Hotdeal admin team already.<br>
        <hr>
        <p class="big-font"><a href="{!! action('Admin\DashboardController@index') !!}">Come back</a></p>
    </div>
</div>
</body>
</html>