<?php 
    if( isset($_GET["kode_barang"])){
        $kode_barang = $_GET["kode_barang"];
        $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang'; ";
        include('./kwu-config.php');
        $query = mysqli_query($mysqli, $check_kode_barang);
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit data</h1>
<form action="kwu-edit.php" method="POST">
    <label for="kode_barang"> Kode Barang :</label><br>
    <input value="<?php echo $row["kode_barang"]; ?>" readonly type="number" name="kode_barang" placeholder="Ex. 0122" /><br>

    <label for="tanggal"> Tanggal :</label><br>
    <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" placeholder="Ex. 22-09-2022" /><br>

    <label for="pembeli"> Nama Pembeli :</label><br>
    <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" placeholder="Ex. Udin" /><br>

    <label for="nama_barang"> Nama Barang :</label><br>
    <input value="<?php echo $row["nama_barang"]; ?>" type="text" name="nama_barang" placeholder="Ex. Sosis Kanzler" /><br>

    <label for="qty"> qty :</label><br>
    <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 10" /><br>

    <label for="harga_beli"> Harga Beli :</label><br>
    <input value="<?php echo $row["harga_beli"]; ?>" type="number" name="harga_beli" placeholder="Ex. Rp20.000" /><br>

    <label for="UAS"> Harga Jual :</label><br>
    <input value="<?php echo $row["harga_jual"]; ?>" type="number" name="harga_jual" placeholder="Ex. Rp30.000" /><br>
    
    <input type="submit" name="simpan" value="simpan data" /><br>
    <a href="kwu.php">Kembali</a>
</form>

<?php 
    if( isset($_POST["simpan"])){
        $kode_barang = $_POST["kode_barang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $nama_barang = $_POST["nama_barang"];
        $qty = $_POST["qty"];
        $harga_beli = $_POST["harga_beli"];
        $harga_jual = $_POST["harga_jual"];

        // EDIT - Memperbarui Data
        $query = "
            UPDATE transaksi SET tanggal  = '$tanggal',
            pembeli = '$pembeli',
            nama_barang = '$nama_barang',
            qty = '$qty',
            harga_beli = '$harga_beli',
            harga_jual = '$harga_jual'
            WHERE kode_barang = '$kode_barang';
        ";

        include ('./kwu-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                alert('Data berhasil Diperbaharui');
                window.location='kwu.php';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='kwu-edit.php?kode_barang=$kode_barang';
                </script>
            ";
        }
    }
?>