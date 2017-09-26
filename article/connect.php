<?php
    require_once('config.php');

    $link = mysqli_connect(HOSTS, USERNAME, PASSWORD);
    if (!($link)){
    	echo mysql_error();
    }
    
    if (!mysqli_select_db($link, 'info')){
    	echo mysql_error();
    }
    // mysql_query('set names utf8');

    $result = mysqli_query($link, 'set names utf8');
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
?>