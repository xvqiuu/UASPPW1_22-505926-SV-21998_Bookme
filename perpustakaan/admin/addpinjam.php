
<!DOCTYPE html>
<html lang="en">
<body>
<?php
    include "../connection.php";
?>

<form action="admin/pinjam/addpinjam_act.php" method="post">
    <table>
        <tr>
            <td>ID Pinjam</td>
            <td>
                <input type="text" name="id_pinjam" placeholder="Masukan ID Peminjaman">
            </td>
        </tr>

        <tr>
            <td>Petugas</td>
            <td>
                <select name="id_petugas" >
                    <option>Pilih Nama Petugas</option>
                    <?php
                        $petugas_query = mysqli_query($sambung,"select * from tabel_petugas");
                        while($petugas_data = mysqli_fetch_array($petugas_query))
                        {
                    ?>     
                        <option value="<?php echo $petugas_data['id_petugas']?>">
                            <?php echo $petugas_data['nama_petugas']?>
                        </option>    
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>User</td>
            <td>
                <select name="id=_user">
                    <option>Pilih Nama User</option>
                    
                    <?php
                        $user_query = mysqli_query($sambung,"select * from tabel_user");
                        while($user_data = mysqli_fetch_array($user_query))
                        {
                    ?>    
                        <option value="<?php echo $user_data['id_user']?>"><?php echo $user_data['nama_user']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Judul</td>
            <td>
                <select name="id_buku">
                    <option>Pilih Judul Buku</option>
                    <?php
                        $buku_query = mysqli_query($sambung,"select * from tabel_buku");
                        while($buku_data = mysqli_fetch_array($buku_query))
                        {
                    ?>   
                        <option value="<?php echo $buku_data['id_buku']?>"><?php echo $buku_data['judul_buku']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboladd" value="Add"></td>
        </tr>
    </table>
</form>
    
</body>
</html>
