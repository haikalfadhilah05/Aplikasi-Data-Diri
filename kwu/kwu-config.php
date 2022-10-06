<?php
    $mysqli = new mysqli("localhost","root","","kwu_haikal");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mySQL: " . $mysqli -> connect_error;
        exit();
    }
?>