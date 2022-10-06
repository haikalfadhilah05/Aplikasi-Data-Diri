<?php
    include('./kwu-config.php');
    echo "<a href='kwu-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, " SELECT * FROM transaksi ");
    while($row = mysqli_fetch_array($data)) {
        $total_harga_beli=($row["qty"]*$row["harga_beli"]);
        $total_harga_jual=($row["qty"]*$row["harga_jual"]);
        $laba=($total_harga_jual-$total_harga_beli);
        $tabledata .= "
            <tr>
                <td>".$row["kode_barang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["nama_barang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["harga_beli"]."</td>
                <td>".$row["harga_jual"]."</td>
                <td>".$total_harga_beli."</td>
                <td>".$total_harga_jual."</td>
                <td>".$laba."</td>
                <td>
                    <a href='kwu-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='kwu-hapus.php?kode_barang=".$row["kode_barang"]."' 
                    onclick='return confirm(\"Yakin Mau Dihapus Dek ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>kode_barang</th>
                <th>tanggal</th>
                <th>pembeli</th>
                <th>nama_barang</th>
                <th>qty</th>
                <th>harga_beli</th>
                <th>harga_jual</th>
                <th>total harga beli</th>
                <th>total harga jual</th>
                <th>laba</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>