<form action="input-siswa.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. David Lutfhi" /><br>

    <label for="jk"> Jenis Kelamin :</label>
    <input type="radio" name="jk" value="L" /> laki - laki
    <input type="radio" name="jk" value="P" /> Perempuan <br>

    <label for="kelas"> Kelas :</label>
    <select name="kelas">
        <option>10 RPL 1</option>
        <option>10 RPL 2</option>
        <option>11 RPL 1</option>
        <option>11 RPL 2</option>
        <option>12 RPL 1</option>
        <option>12 RPL 2</option>
    </select><br>

    <label for="tanggal_lahir"> Tanggal lahir :</label>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="alamat"> Alamat :</label>
    <textarea name="alamat" placeholder="Ex. Jl. Arief Rahman"></textarea><br>

    <label for="nilai"> Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56" /><br>

    <input type="submit" name="simpan" value="simpan data" />
    <input type="reset" name="reset" value="reset input" />
</form>

<?php
    if( isset($_POST["simpan"])){
        echo "<hr>";

        // Deklaraasi Variable
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $kelas = $_POST["kelas"];
        $nilai = $_POST["nilai"];

        // Tampil Data Variable
        echo "
            Hasil Inputan Sebagai Berikut: <br>
            Nomor Induk Siswa : $nis <br>
            Nama lengkap : $namalengkap <br>
            Jenis Kelamin : $jeniskelamin <br>
            Kelas : $kelas <br>
            Tanggal_lahir : $tanggal_lahir <br>
            Alamat : $alamat <br>
            Nilai : $nilai <br>
        ";
    }
?>