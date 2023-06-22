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
   <img width="323" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/5ee7f507-bcea-44a6-8138-05bfc908cfac">
   <br>
   <img width="324" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/13f7207e-d8b0-411d-99fa-95c3290722b7">
   <br>
   <img width="322" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/062d672e-0b5f-4c18-a660-f3b27e07cd42">
   
   <br>
2. Website responsive
   <br>
   Ketika website dibuka dalam device yang berbeda bentuk website atau landing page akan mengikuti ukuran layar atau menyesuaikan bentuk layar. Berikut tampilan 
   salah satu section yang responsive. Disini untuk membuat resposive saya menggunakan bootstrap.
   <br>
   Berikut sourcecode yang digunakan:
   <br>
   <!-- section 1 -->
        <section class="d-flex h-100">
            <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <header class="mb-auto">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container" style="margin-bottom: -40px;">
                            <img src="../gambar/logo.png" width="50px" height="50px"> 
                            <p style="font-weight: bold; color: white; margin: 5px;">LIBRARY</p>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        onclick="alert('selamat datang readers...')">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#daftarBuku">Daftar Buku</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="user.php">User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="petugas.php">Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pinjam.php">Peminjaman</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </section>
   <br>
   Gambar section :
   <br>
   <img width="406" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/6a05a82d-b921-4937-b125-c8e712830901">
   <br>
   
3. Direct feedback ke pengguna website
   <br>
   Untuk Direct feedback ke pengguna secara langsung, yaitu terdapat dalam section 1 dan section 6. Direct feedback secara langsung yang saya gunakan untuk
   section 1 yaitu ketika button "Home" di klik maka akan muncul pesan diatas yang bertuliskan "selamat datang readers...".
   <br>
   Berikut sourcecode yang digunakan:
   <br>
   <img width="385" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/96add66a-67be-4959-b4d4-ce5d92cfab94">

   <br>
   Tampilan section 1:
   <br>
   <img width="481" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/b3057a24-9a7d-4d1c-b177-3f2e30ad7eb6">

   <br>
   Sedangkan untuk direct feedback secara langsung ke pengguna website yang saya gunakan dalam section 6 yaitu ketika memasukkan nama, email, dan pesan kemudian
   klik button "send" makan hasil dari masukkan tersebut akan tampil di bagian bawahnya.
   <br>
   Berikut sourcecode yang digunakan:
   <br>
                                   <form>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">
                
                                            </label>
                                            <input id="nama" type="text" class="form-control" aria-label="default input example"
                                                placeholder="Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">
                
                                            </label>
                                            <input id="email" type="text" class="form-control" aria-label="default input example"
                                                placeholder="Email">
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="message" class="form-label">
                
                                            </label>
                                            <input id="message" type="text" class="form-control" aria-label="default input example" 
                                                placeholder="Write your message here..." style="height: 150px;">
                                        </div>
                
                                        <!-- button send pada bootstrap -->
                                        <div class="d-flex align-items-end mb-3">
                                            <button class="btn btn-light" type="button" onclick=send() 
                                            style="background-color: #E09132;color: white;">Send</button>
                                        </div>
                                    </form>
                                    <br>
                                    <h4 id="thanks" style="color:white"></h4>
                                    <p id="nama_tampil"></p>
                                    <p id="email_tampil"></p>
                                    <p id="message_tampil"></p>                            
                                </div>
                            </div>                            

                        </div>
                                
        
                        </div>
                    </div>

                </div>
                
                    
            </div>

            <script>
                function send(){
                    document.getElementById("thanks").innerHTML="<b>Thank for your response. Your data recorded as :</b>"

                    var a = document.getElementById("nama").value
                    document.getElementById("nama_tampil").innerHTML = "Hello, my name is " + "<b>" + a + "</b>"

                    var b = document.getElementById("email").value
                    document.getElementById("email_tampil").innerHTML = "Please contact me through : " + "<b>" + b + "</b>"

                    var c = document.getElementById("message").value
                    document.getElementById("message_tampil").innerHTML = "I want to say about : " + "<br>" + "<b>" + c + "</b>"

                }
                
            </script>
   <br>
   Tampilan section 6:
   <br>
   <img width="496" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/44c7cf66-025a-4920-878f-009b42e87dfd">

   <br>
5. Konten dinamis dari database
   <br>
   Konten dinamis dari database yaitu untuk memunculkan daftar buku dari perpustakaan, data user atau pengunjung, data petugas perpustakaan, dan data transaksi 
   peminjaman. Untuk bisa menampilkan data-data tersebut perlu dihubungkan dengan menggunakan phpMyAdmin. Berikut sourcecode yang digunakan untuk menghubungkan 
   database tersebut:
   <br>
   <img width="361" alt="image" src="https://github.com/xvqiuu/UASPPW1_22-505926-SV-21998_Bookme/assets/132545168/22956474-e2e3-4d3f-9954-44b9dd93b095">

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




   


