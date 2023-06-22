<!DOCTYPE html>
<body>
    <h3>
        <center>Daftar Buku Perpustakaan</center>
    </h3>
    <a href="index.php?admin=addbuku">Add Buku</a>
    <br>

    <br>
    <!--awal table-->
    <table align="center" border="2">
        <!--awal header table-->
        <tr>
            <td width="5%" align="center">No</td>
            <td width="10%" align="center">ID Buku</td>
            <td width="30%" align="center">Judul</td>
            <td width="10%" align="center">Pengarang</td>
            <td width="25%" align="center">Penerbit</td>
            <td width="20%" align="center">Keterangan</td>
        </tr>
        <!--akhir header table-->

        <?php
        //koneksi ke database
        include "../connection.php";
        
        //ambil data dari tabel_buku
        $ambildata  = mysqli_query($sambung,"SELECT * FROM tabel_buku");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)){
        ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo isset($tampildata['id_buku']) ? $tampildata['id_buku'] : ''; ?></td>
            <td> <?php echo isset($tampildata['judul_buku']) ? $tampildata['judul_buku'] : ''; ?></td>
            <td> <?php echo isset($tampildata['pengarang_buku']) ? $tampildata['pengarang_buku'] : ''; ?></td>
            <td> <?php echo isset($tampildata['penerbit_buku']) ? $tampildata['penerbit_buku'] : ''; ?></td>

            <td align="center">
                <a href="../admin/index.php?buku=id_buku=<?php echo $tampildata['id_buku'];?>">
                    Edit
                </a>
                |
                <a href="halaman/buku/bukuhapus.php?id_buku=<?php echo $tampildata['id_buku'];?>" 
                    onclick="return confirm('Apa Anda yakin akan menghapus Data Buku?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->
        <?php
        }
        ?>

    </table>
    <!--akhir table-->
    
</body>
</html>