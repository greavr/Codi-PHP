<?php
    // Connection's Parameters
    $db_host="173.201.88.132";
    $db_name="mycodi";
    $username="mycodi";
    $password="myCpassw0rd";
    $db_con=mysql_connect($db_host,$username,$password);
    $connection_string=mysql_select_db($db_name);
    // Connection
    $db_handle = mysql_connect($db_host,$username,$password);
    $db_found = mysql_select_db($db_name,$db_handle);
    
    //Attachment Options
    $filepath= "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]). "/files/";
?>