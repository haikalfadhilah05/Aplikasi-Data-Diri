<?php
    include('./input-config.php');
    if($_SESSION["login"] != TRUE) {
        header('location:login.php');
    }
    echo "Selamat Datang. " . $_SESSION["username"] . "<br>"; 
    echo "Anda Sebagai: " . $_SESSION["role"] . "<br>";

    echo "<a href='logout.php'>Logout</a>";
    echo "<hr>";

    echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, " SELECT * FROM datadiri ");
    while($row = mysqli_fetch_array($data)) {
        $tabledata .= "
            <tr>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
                <td>
                    <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='input-datadiri-hapus.php?nis=".$row["nis"]."'
                    oneclick='return confirm(\"yakin mo hapus dek ?\")'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>NIS</th>
                <th>Nama lengkap</th>
                <th>Tanggal</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>