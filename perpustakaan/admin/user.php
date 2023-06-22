<div>
<h3>
    <center>Daftar User</center>
</h3>

<!--awal table-->
<table align="center" border="2">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID User</td>
        <td width="30%" align="center">Nama User</td>
        <td width="10%" align="center">No Telepon</td>
        <td width="25%" align="center">Alamat</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database
        include "../connection.php";
        
        //ambil data dari tabel_buku
        $ambildata  = mysqli_query($sambung,"SELECT * FROM tabel_user");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)){
        ?>

        <!--awal menampilkan data dari tabel user ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo isset($tampildata['id_user']) ? $tampildata['id_user'] : ''; ?></td>
            <td> <?php echo isset($tampildata['nama_user']) ? $tampildata['nama_user'] : ''; ?></td>
            <td> <?php echo isset($tampildata['no_telp_user']) ? $tampildata['no_telp_user'] : ''; ?></td>
            <td> <?php echo isset($tampildata['alamat_user']) ? $tampildata['alamat_user'] : ''; ?></td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->
        <?php
        }
        ?>

</table>
<!--akhir table-->
</div>
<!--akhir navigasi pagination-->