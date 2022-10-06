<?php
    include('./input-config.php');
    if($_SESSION["login"] != TRUE) {
        header('location:login.php');
    }
    echo "<div class='container'>";
    echo "Selamat Datang. " . $_SESSION["username"] . "<br>"; 
    echo "Anda Sebagai: " . $_SESSION["role"] . "<hr>";
    echo "<a class='btn btn-sm btn-Secondary' href='logout.php'>Logout</a>";
    echo "<hr>";
    echo "<a class='btn btn-sm btn-primary' href='input-datadiri-tambah.php'>Tambah Data</a>";
    echo "-<a class='btn btn-sm btn-warning' href='input-datadiri-pdf.php'>Cetak PDF</a>";
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
                    <a class='btn btn-sm btn-success' href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a class='btn btn-sm btn-danger' href='input-datadiri-hapus.php?nis=".$row["nis"]."'
                    onclick='return confirm(\"yakin hapus dek ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table class='table table-dark table-bordered table-striped'>
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
    echo "</div>";
?>