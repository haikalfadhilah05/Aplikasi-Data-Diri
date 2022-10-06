<form action="post.php" method="post">
    <input type="text" name="namalengkap" placeholder="Ex. indra El"/> <br>
    <input type="text" name="Kelas" placeholder="11 RPL 1"/> <br>
    <input type="number" name="NIS" placeholder="123345"/> <br>
    <input type="submit" name="simpan" value="simpan data">
</form>


<?php
    if(isset($_POST["simpan"])){
        echo "<hr>";
        $namalengkap = $_POST ["namalengkap"];
        $Kelas = $_POST ["Kelas"];
        $Nis = $_POST ["NIS"];
        
        echo "Nama Lengkap = ". $namalengkap . "<br>";
        echo "Kelas = ". $Kelas . "<br>"; 
        echo "Nis = ". $Nis . "<br>"; 
    }
?>