<?php

    $host="localhost";
    $user="id7098467_admin";
    $pass="admin";
    $db_name="id7098467_bookstore";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);
    $site="http//localhost/denwer/";

    /*if($link)
    {
        echo "<p>Database status: DB Connected!</p>";
    }else
    {
        die("Connection lost!");
    }*/
?>