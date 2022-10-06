<?php
    include('./input-config.php');

    session_destroy();

    echo "
        <script>
            alert('logout berhasil dadah sampai ketemu lagi');
            window.location='login.php'
        </script>
    ";
?>