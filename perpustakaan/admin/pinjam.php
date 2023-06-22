<h3>
    <center>Daftar Peminjaman Buku</center>
</h3>

<a href="index.php?admin=addpinjam">Add Peminjaman Buku</a>

<!--awal table-->
<table align="center" border="2">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Pinjam</td>
        <td width="30%" align="center">Petugas</td>
        <td width="10%" align="center">User</td>
        <td width="25%" align="center">Judul Buku</td>
        <td width="20%" align="center">Keterangan</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../connection.php";

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
        
        //ambil data dari tabel tabel_pinjam
        $ambildata1 = mysqli_query($sambung,"SELECT * FROM tabel_pinjam INNER JOIN tabel_petugas 
            ON tabel_petugas.id_petugas=tabel_pinjam.id_petugas INNER JOIN tabel_user 
            ON tabel_user.id_user=tabel_pinjam.id_user INNER JOIN tabel_buku ON tabel_buku.id_buku=tabel_pinjam.id_buku
        LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM tabel_pinjam INNER JOIN tabel_petugas 
            ON tabel_petugas.id_petugas=tabel_pinjam.id_petugas INNER JOIN tabel_user 
            ON tabel_user.id_user=tabel_pinjam.id_user INNER JOIN tabel_buku ON tabel_buku.id_buku=tabel_pinjam.id_buku");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel peminjaman ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['id_pinjam'] ?></td>
            <td> <?php echo $tampildata['nama_petugas'] ?></td>
            <td> <?php echo $tampildata['nama_user']?></td>
            <td> <?php echo $tampildata['judul_buku']?></td>
            <td align="center">
                <a href="../admin/index.php?page=pinjamubah&id_pinjam=<?php echo $tampildata['id_pinjam'];?>">
                    Edit
                </a>
                |
                <a href="halaman/pinjam/pinjamhapus.php?id_pinjam=<?php echo $tampildata['id_pinjam'];?>" 
                    onclick="return confirm('Apa Anda yakin akan menghapus Data Peminjaman?')">
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

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tabel_buku");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<div align="center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
    ?>
        <a href="../admin/index.php?page=pinjam&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php 
        } 
    ?>
</div>
<!--akhir navigasi pagination-->