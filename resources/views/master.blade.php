<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eshopping</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--J-Query-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}

{{-- <link rel="stylesheet" href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbTF0YV9tR3c4SXJmRk9mb2FYdkozdVNQZnJDQXxBQ3Jtc0tsUDZmRU9ZRHJVSjRKbGNud2dGVG4zeEpmMUlLd2NKclR4S0I1bjkwYlBadU12WEIxck15Z0dSM0VaSkVLRnJlejBPWW50aUdzTjkyNk5CWWxzWE10QUZmSGx2enAwNllWc0ZaTmN6Zk5jMTZtUU0xRQ&q=https%3A%2F%2Fstackpath.bootstrapcdn.com%2Ffont-awesome%2F4.7.0%2Fcss%2Ffont-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/> --}}

<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
    {{ View::make('navbar') }}
    <div style="margin-top:60px;">@yield('content')</div>
    {{ view::make('footer') }}

</body>


    <style>
        /* nav {
        bottom: 0 ;
        width: 100%;
        background: rgb(20, 20, 20) !important
        } */

        .incart{

        }

        hr{
            border-top: 1px solid rgb(0, 0, 0);
            }

        .custom-login {
            height: 500px;
            padding-top:100px;
        }
        img.slider-img {
            height:400px !important
        }
        .custom-product{
            height: 600px;
            margin-bottom: 50px;
            margin-top: 50px;
            padding-bottom: 50px;
            margin-left: 70px;
        }
        .carousel-caption{
            padding-top: 5px;
            padding-bottom: 20px;
        }
        .slider-text {
            background-color: rgba(97, 91, 91, 0.637);
        }

        .trending-image {
            height: 100px !important
        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .trendingg{
            margin-left: 130px;
        }
        .detail-img{
            height: 400px;
        }
        .search-box {
            width: 500px !important
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc ;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .slider-img{
            margin: auto;
            windows: 100%;
        }
        .trending-wrapper{
            margin-top: 100px;
            margin-bottom: 50px;
            margin-left: 30px;
        }
        .text{
            text-align: center;
        }

        /* .thumbnail-image{
            width: 350px;
            height: 250px;
            overflow: hidden;

        } */
        .remove{
            margin-top: 25px;
        }

        /* footer */

        @import url('https://fonts.googleapis.com/css?family=Poppins');

        body {
            font-family: 'Poppins', sans-serif;
        }



        .copyright {
            background-color: #222222;
        }

        .copyright p {
            margin: 15px 0px;
        }

        .about{

        }

        footer{
            background-color:#222222;
            padding: 100px 0px 0px 0px;
            margin-top: auto;
        }

        footer .menu li a {
            color:#b1aca1;
            padding:10px;
            text-decoration:none;
        }

        footer .menu li a:hover {
            color:#7dabdb;
        }

        .fa.fa-bell{
            color: #D8D8D8 ;
            font-size: 15px;
            padding: 3px;
            margin-top: 15px;
        }

        .fa.fa-bell:hover{
            color: #ffffff;
        }

        .fa.fa-facebook ,
        .fa.fa-dropbox,
        .fa.fa-flickr ,
        .fa.fa-github ,
        .fa.fa-linkedin ,
        .fa.fa-tumblr ,
        .fa.fa-google-plus,
        .fa.fa-google,
        .fa.fa-youtube,
        .fa.fa-twitter,
        .fa.fa-instagram,
        .fa.fa-tumblr {
            color: #ffffff;
            font-size: 20px;
            padding: 10px;
        }

        .fa.fa-facebook:hover,
        .fa.fa-dropbox:hover,
        .fa.fa-flickr:hover,
        .fa.fa-github:hover,
        .fa.fa-linkedin:hover,
        .fa.fa-tumblr:hover,
        .fa.fa-google-plus:hover,
        .fa.fa-instagram:hover,
        .fa.fa-tumblr:hover {
            color: #6794c2;
        }

        .fa.fa-user{
            color: #D8D8D8 ;
            font-size: 15px;
            padding: 3px;
        }
        .fa.fa-user:hover{
            color: #ffffff;
        }
        .fa.fa-sign-in{
            color: #D8D8D8;
            font-size:15px;
            padding: 3px;
        }
        .fa.fa-sign-in:hover{
            color: #ffffff;
        }

        body {
             background-color: rgb(255, 255, 255);
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: rgb(255, 255, 255);
            border-radius: 0.3em;
        }

        *[role="form"] h2 {
            margin-left: 5em;
            margin-bottom: 1em;
        }

        .thumbnail{
            transition: 0.5s;
            background-color: #FAFAFA ;
        }

        .thumbnail:hover{
            transform: scale(1.15);
            box-shadow: 2px 2px 2px #000;

        }

        /* review */

        .btn-grey{
            background-color:#D8D8D8;
            color:#FFF;
        }
        .rating-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px 15px 20px 15px;
            border-radius:3px;
        }
        .bold{
            font-weight:700;
        }
        .padding-bottom-7{
            padding-bottom:7px;
        }

        .review-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px;
            border-radius:3px;
            margin-bottom:15px;
        }
        .review-block-name{
            font-size:12px;
            margin:10px 0;
        }
        .review-block-date{
            font-size:12px;
        }
        .review-block-rate{
            font-size:13px;
            margin-bottom:15px;
        }
        .review-block-title{
            font-size:15px;
            font-weight:700;
            margin-bottom:10px;
        }
        .review-block-description{
            font-size:13px;
        }

                /* review */

        .jumbotron {
        background: #19191a;
        color: #FFF;
        border-radius: 0px;
        }
        .jumbotron-sm { padding-top: 24px;
        padding-bottom: 24px; }
        .jumbotron small {
        color: #FFF;
        }
        .h1 small {
        font-size: 24px;
        }

                /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar {
        position: fixed;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        }

        /* Style the icon bar links */
        .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
        }

        /* Style the social media icons with color, if you want */
        .icon-bar a:hover {
        background-color: #000;
        }

        .facebook {
        background: #3B5998;
        color: white;
        }

        .twitter {
        background: #55ACEE;
        color: white;
        }

        .google {
        background: #dd4b39;
        color: white;
        }

        .linkedin {
        background: #007bb5;
        color: white;
        }

        .youtube {
        background: #bb0000;
        color: white;
        }

        /* font */


            </style>
        </html>
