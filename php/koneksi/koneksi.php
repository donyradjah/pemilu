<?php
    $user = "root";
    $host = "localhost";
    $db = "pemilu";
    $pass = "1234";
    $conn =mysqli_connect($host,$user,$pass) or die("Gagal Koneksi MySql");
    mysqli_select_db($conn,$db) or die("Gagal Koneksi Database");