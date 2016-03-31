<?php
    $user = "root";
    $host = "localhost";
    $db = "pemilu";
    $pass = "1234";
    mysql_connect($host,$user,$pass) or die("Gagal Koneksi MySql");
    mysql_select_db($db) or die("Gagal Koneksi Database");