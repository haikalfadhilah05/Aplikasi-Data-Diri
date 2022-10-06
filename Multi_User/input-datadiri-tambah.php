<h1>Tambah data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir"> Tanggal lahir :</label><br>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="nilai"> Nilai :</label><br>
    <input type="number" name="nilai" placeholder="Ex. 80.56" /><br>
    
    <input type="submit" name="simpan" value="simpan data" /><br>
    <a href="input-datadiri.php">Kembali</a>
</form>

<?php 
    include('./input-config.php');
    if( $_SESSION["login"] != TRUE ) {
        header('location:login.php');
    }

    if( $_SESSION["role"] != "admin" ) {
        echo "
            <script>
                alert('Akses tidak diberikan, kamu bukan Admin');
                window.location='input-datadiri.php';
            </script>
        ";
    }

    if( isset($_POST{"simpan"})) {
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        // CREATE - menambahkan data ke database
        $query = "
            INSERT INTO datadiri VALUES
            ('$nis','$nama','$tanggal_lahir','$nilai');
        ";

        $insert = mysqli_query($mysqli, $query);

        if($insert){
            echo "
                <script>
                    alert('Data Berhasil ditambahkan');
                    window.location='input-datadiri.php';
                </script>
            ";
        }
    }
?>