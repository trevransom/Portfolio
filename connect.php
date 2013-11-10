<?php

    // enable sessions
    session_start();

    // connect to database
    if (($connection = mysql_connect("localhost", "root", "muser")) === false)
        die("Could not connect to database");

    // select database
    if (mysql_select_db("Portfolio", $connection) === false)
        die("Could not select database");

?>