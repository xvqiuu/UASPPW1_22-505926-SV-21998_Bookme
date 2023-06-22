<?php
    include ".../connection.php";

    if(isset($_POST['tomboladd'])){
        $idbuku     = $_POST['id_buku'];
        $judul      = $_POST['judul_buku'];
        $pengarang  = $_POST['pengarang_buku'];
        $penerbit   = $_POST['penerbit_buku'];

        mysqli_query($sambung,"insert into tabel_buku (id_buku,judul_buku,pengarang_buku,penerbit_buku) 
        values ('$id_buku','$judul_buku','$pengarang_buku','$penerbit_buku')");
    }

    header("location:../../index.php?buku");
?>