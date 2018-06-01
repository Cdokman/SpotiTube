<?php
/**
 * Created by PhpStorm.
 * User: Cyrano
 * Date: 1-6-2018
 * Time: 09:20
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Cyrano Dokman</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?
        family=quicksand:500" rel="stylesheet">

    <script type="text/javascript">
        $( document ).ready(function() {
            console.log( "ready!" );

            $(window).on('scroll', function () {
                if($(window).scrollTop()) {
                    $('nav').addClass('black');
                }
                else {
                    $('nav').removeClass('black')
                }
            })
        });
    </script>
</head>
<nav>
    <ul>
        <li class="active" ><a  href="#">Home</a></li>
        <li class="active" ><a  href="#">Playlist</a></li>
        <li class="active" ><a  href="#">Blog</a></li>
        <li class="active" ><a  href="#">Contact</a></li>
        <li class="" ><a  id="loginButton" href="form.php">Log In</a></li>
    </ul>
</nav>
