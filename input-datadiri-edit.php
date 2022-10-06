<?php 
    if( isset($_GET["nis"])){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
        include('./input-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>

<div class="container">
<h1>Edit data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label><br>
    <input class="form-control" value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label><br>
    <input class="form-control" value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir"> Tanggal lahir :</label><br>
    <input class="form-control" value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /><br>

    <label for="nilai"> Nilai :</label><br>
    <input class="form-control" value="<?php echo $row["nilai"]; ?>" type="number" name="nilai" placeholder="Ex. 80.56" /><br>
    
    <input class='btn btn-sm btn-success' type="submit" name="simpan" value="simpan data" />
    <a class='btn btn-sm btn-primary' href="input-datadiri.php">Kembali</a>
</form>
</div>

<?php 
    include ('./input-config.php');
    if ($_SESSION["role"] !="admin"){
        echo"
            <script>
                alert('Akses tidak diberikan, Kamu bukan admin');
                window.location='input-datadiri.php';
            </script>
        ";
    }

    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        // EDIT - Memperbarui Data
        $query = "
            UPDATE datadiri SET namalengkap = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            nilai = '$nilai'
            WHERE nis = '$nis';
        ";

        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if( $_SESSION["role"] != "admin"){
            echo"
                <script>
                    alert('Akses tidak diberikan, Kamu bukan admin');
                    window.location='input-datadiri.php';
                </script>
            ";
        }

        if($update){
            echo "
                <script>
                alert('Data berhasil diperbaharui');
                window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='input-datadiri-edit.php?nis=$nis';
                </script>
            ";
        }
    }
?>