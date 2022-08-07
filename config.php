<?php

$db_host = "eu-cdbr-west-03.cleardb.net";
$db_user = "b9418fc146ba80";
$db_pass = "47914818";
$db_name = "heroku_ce4bd867f681e71";

$connect = mysql_connect($db_host, $db_user, $db_pass, $db_name) or die("databse connection error");
