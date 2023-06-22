# UASPPW1_22-505926-SV-21998_Bookme
Nama: Lutfi Lisana Shidqi
NIM: 22/505926/SV/21998

Penjelasan Secara Umum:
<br>
Bookme merupakan website yang berkaitan mengenai perpustakaan. Di dalam website ini kita bisa melihat buku apa saja yang yang tersedia, user atau pengunjung
perpustakaan, petugas dari perpustakaan atau pustakawan, dan juga transaksi peminjaman. Website ini digunakan untuk petugas dari perpustakaan atau pustakawan.
Selain itu, disini juga dapat melihat beberapa kategori buku yang terdapat dalam website. Website ini memudahkan pustakawan untuk melihat kegiatan atau history 
apa saja yang terjadi dalam website sehingga memudahkan untuk pendataan. Di dalam website, pustakawan bisa menambahkan data buku, data pinjaman, dan lain-lain.

Bagaimana website yang dibuat menjawab 4 requirement dasar (kriteria penilaian).
   <br>
1. Desain rapi mengikuti kaidah atau prinsip desain
   <br>
   Desain ini sudah mengikuti prinsip dasar desain yang telah dipelajari dalam pertemuan kuliah sebelumnya. Penggunaan kombinasi warna antara hijau dan kuning 
   serta tulisan berwarna putih memudahkan pembaca melihat dan memahami isi dari website atau landing page. 
   Gambar website :
   <br>
   <img width="479" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/ac8ff85d-82a8-4441-b3c5-78396c5af85f">
   <br>
   <img width="481" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/c716af45-076e-426e-9c21-d3ea20203b22">
   <br>
   <img width="486" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/e741d927-5759-4ad4-805c-3cca901a0e28">
   <br>
   <img width="496" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/d55d6f85-5a43-4c18-b362-0be6fba0e8d0">

   
   <br>
2. Website responsive
   <br>
   Ketika website dibuka dalam device yang berbeda bentuk website atau landing page akan mengikuti ukuran layar atau menyesuaikan bentuk layar. Berikut tampilan 
   salah satu section yang responsive. Disini untuk membuat resposive saya menggunakan bootstrap.
   <br>
   Gambar section :
   <br>
   <img width="406" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/6a05a82d-b921-4937-b125-c8e712830901">
   <br>
   
3. Direct feedback ke pengguna website
   <br>
   Untuk Direct feedback ke pengguna secara langsung, yaitu terdapat dalam section 1 dan section 6. Direct feedback secara langsung yang saya gunakan untuk section 1
   yaitu ketika button "Home" di klik maka akan muncul pesan diatas yang bertuliskan "selamat datang readers..."
   Tampilan section 1:

   <img width="481" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/b3057a24-9a7d-4d1c-b177-3f2e30ad7eb6">

   <br>
   Sedangkan untuk direct feedback secara langsung ke pengguna website yang saya gunakan dalam section 6 yaitu ketika memasukkan nama, email, dan pesan kemudian
   klik button "send" makan hasil dari masukkan tersebut akan tampil di bagian bawahnya.
   <br>
   Tampilan section 6:
   <br>
   <img width="496" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/44c7cf66-025a-4920-878f-009b42e87dfd">

   <br>
4. Konten dinamis dari database
   <br>
   Konten dinamis dari database yaitu untuk memunculkan daftar buku dari perpustakaan, data user atau pengunjung, data petugas perpustakaan, dan data transaksi 
   peminjaman. Untuk bisa menampilkan data-data tersebut perlu dihubungkan dengan menggunakan phpMyAdmin. Berikut sourcecode yang digunakan untuk menghubungkan 
   database tersebut:
   <br>
   <?php
       $host = "localhost";
       $user = "root";
       $password = "";
       $dbname = "perpustakaan";
      
       $sambung = mysqli_connect($host, $user, $password, $dbname);
   ?>
   <br>
   Penjelasan:
   <br>
   Dengan sourcecode diatas dapat melakukan operasi database seperti melakukan query, mengambil data, menambahkan data, dan lainnya dengan menggunakan objek
   koneksi $sambung. Pastikan juga bahwa informasi koneksi seperti host, username, password, dan nama database telah sesuai dengan konfigurasi pada server MySQL.
   <br>
   Berikut data-data yang muncul:
   <br>
   <img width="489" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/c9f5515d-ff1e-4efe-96ec-b8902af2f989">
   <br>
   <img width="387" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/ee5310d3-125b-45e5-8c94-43b95cc54e9a">
   <br>
   <img width="281" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/cdeca1c6-12a4-4fc3-83e7-be2983b583ae">
   <br>
   <img width="397" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/8fef694c-9109-4e4f-bc75-d0a701390291">




   


