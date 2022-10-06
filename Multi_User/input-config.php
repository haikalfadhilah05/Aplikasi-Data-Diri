<?php
    session_start();
    
    $mysqli = new mysqli("localhost","root","","siswa_rpl");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mySQL: " . $mysqli -> connect_error;
        exit();
    }
?>