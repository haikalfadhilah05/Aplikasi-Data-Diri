<?php
    $mysqli = new mysqli("localhost","root","","siswa_haikal");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mySQL: " . $mysqli -> connect_error;
        exit();
    }
?>