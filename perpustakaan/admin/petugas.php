<h3>
    <center>Daftar Petugas</center>
</h3>

<!--awal table-->
<table align="center" border="2">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Pinjam</td>
        <td width="30%" align="center">Nama Petugas</td>
        <td width="25%" align="center">No Telepon</td>
        <td width="20%" align="center">Username Petugas</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../connection.php";
        
        //ambil data dari tabel tabel_pinjam
        $ambildata  = mysqli_query($sambung,"SELECT * FROM tabel_petugas");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata))
        {
        ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo isset($tampildata['id_petugas']) ? $tampildata['id_petugas'] : ''; ?></td>
            <td> <?php echo isset($tampildata['nama_petugas']) ? $tampildata['nama_petugas'] : ''; ?></td>
            <td> <?php echo isset($tampildata['no_telp']) ? $tampildata['no_telp'] : ''; ?></td>
            <td> <?php echo isset($tampildata['username_petugas']) ? $tampildata['username_petugas'] : ''; ?></td>
        </tr>
        <?php
        }
        ?>

</table>
<!--akhir table-->
</div>
<!--akhir navigasi pagination-->