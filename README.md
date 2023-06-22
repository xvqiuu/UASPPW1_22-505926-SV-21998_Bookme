# UASPPW1_22-505926-SV-21998_Bookme
Nama: Lutfi Lisana Shidqi
NIM: 22/505926/SV/21998

Penjelasan Secara Umum:
Bookme merupakan website yang berkaitan mengenai perpustakaan. Di dalam website ini kita bisa melihat buku apa saja yang yang tersedia, user atau pengunjung
perpustakaan, petugas dari perpustakaan atau pustakawan, dan juga transaksi peminjaman. Website ini digunakan untuk petugas dari perpustakaan atau pustakawan.
Selain itu, disini juga dapat melihat beberapa kategori buku yang terdapat dalam website. Website ini memudahkan pustakawan untuk melihat kegiatan atau history 
apa saja yang terjadi dalam website sehingga memudahkan untuk pendataan. Di dalam website, pustakawan bisa menambahkan data buku, data pinjaman, dan lain-lain.

Bagaimana website yang dibuat menjawab 4 requirement dasar (kriteria penilaian). 
1. Desain rapi mengikuti kaidah atau prinsip desain
   Desain ini sudah mengikuti prinsip dasar desain yang telah dipelajari dalam pertemuan kuliah sebelumnya. Penggunaan kombinasi warna antara hijau dan kuning 
   serta tulisan berwarna putih memudahkan pembaca melihat dan memahami isi dari website atau landing page. 
   gambar website
   
2. Website responsive
   Ketika website dibuka dalam device yang berbeda bentuk website atau landing page akan mengikuti ukuran layar atau menyesuaikan bentuk layar. Berikut tampilan 
   salah satu section yang responsive. Disini untuk membuat resposive saya menggunakan bootstrap.
   gambar section 
   
3. Direct feedback ke pengguna website
   Untuk Direct feedback ke pengguna secara langsung, yaitu terdapat dalam section 1 dan section 6. Direct feedback secara langsung yang saya gunakan untuk 
   section 1
   yaitu ketika button "Home" di klik maka akan muncul pesan diatas yang bertuliskan "selamat datang readers..."
   gambar section 1
   <img width="483" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/7e2cd10a-236e-4f61-be19-d5652b058336">

   Sedangkan untuk direct feedback secara langsung ke pengguna website yang saya gunakan dalam section 6 yaitu ketika memasukkan nama, email, dan pesan kemudian
   klik button "send" makan hasil dari masukkan tersebut akan tampil di bagian bawahnya.
   gambar section 6
   <img width="496" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/5228f66d-777e-475d-a2f1-a15831ce335c">

4. Konten dinamis dari database.
   Konten dinamis dari database yaitu untuk memunculkan daftar buku dari perpustakaan, data user atau pengunjung, data petugas perpustakaan, dan data transaksi 
   peminjaman. Untuk bisa menampilkan data-data tersebut perlu dihubungkan dengan menggunakan phpMyAdmin. Berikut sourcecode yang digunakan untuk menghubungkan 
   database tersebut:
   <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "perpustakaan";

    $sambung = mysqli_connect($host, $user, $password, $dbname);
   ?>
   Berikut data-data yang muncul:
   <img width="489" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/b6fc9548-2795-4f0d-a8e7-c9810799ad0f">
   <img width="282" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/0086308c-1a58-45a6-9f37-48ebfa27a162">
   <img width="392" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/acea054a-e19a-4c37-99d5-87335d05df00">
   <img width="395" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/0477df66-a208-4eed-a903-fe798261c507">

   
   
   


