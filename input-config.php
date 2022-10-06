<?php
date_default_timezone_set('Asia/Jakarta');
if(!isset($_SESSION))
    {
        include('./header.php');
        session_start();
    }
    $mysqli = new mysqli("localhost","root","","siswa_rpl");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mySQL: " . $mysqli -> connect_error;
        exit();
    }
?>