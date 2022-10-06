<h1>Tambah data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kode_barang"> Kode Barang :</label><br>
    <input type="number" name="kode_barang" placeholder="Ex. 0122" /><br>

    <label for="tanggal"> Tanggal :</label><br>
    <input type="date" name="tanggal" placeholder="Ex. 22-09-2022" /><br>

    <label for="pembeli"> Pembeli :</label><br>
    <input type="text" name="pembeli" placeholder="Ex. Udin"/><br>

    <label for="nama_barang"> Nama Barang :</label><br>
    <input type="text" name="nama_barang" placeholder="Ex. Sosis Kanzler" /><br>

    <label for="qty"> qty :</label><br>
    <input type="number" name="qty" placeholder="Ex. 10" /><br>

    <label for="harga_beli"> Harga Beli :</label><br>
    <input type="number" name="harga_beli" placeholder="Ex. Rp20.000" /><br>

    <label for="harga_jual"> Harga Jual :</label><br>
    <input type="number" name="harga_jual" placeholder="Ex. Rp30.000" /><br>
    
    <input type="submit" name="simpan" value="simpan data" /><br>
    <a href="kwu.php">Kembali</a>
</form>

<?php 
    if( isset($_POST{"simpan"})) {
        $kode_barang = $_POST["kode_barang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $nama_barang = $_POST["nama_barang"];
        $qty = $_POST["qty"];
        $harga_beli = $_POST["harga_beli"];
        $harga_jual = $_POST["harga_jual"];

        // CREATE - menambahkan data ke database
        $query = "
            INSERT INTO transaksi VALUES
            ('$kode_barang','$tanggal','$pembeli','$nama_barang','$qty','$harga_beli','$harga_jual');
        ";

        include ('./kwu-config.php');
        $insert = mysqli_query($mysqli, $query);

        if($insert){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location='kwu.php';
                </script>
            ";
        }
    }
?>