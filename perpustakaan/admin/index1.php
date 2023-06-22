<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
            crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>

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

        <!-- section 2 -->
        <section class="d-flex h-100">
            <div class="container d-flex w-100 h-100 p-4 mx-auto flex-column">
                <div class="first">
                    <img src="../gambar/1.jpg" height= "100%" width= "100%">
                </div>
            </div>
        </section>

        <!-- section 3 -->
        <section class="d-flex h-100">
            <div class="container d-flex w-100 h-100 p-4 mx-auto">
                <div class="container" style="margin-bottom: -60px; margin-top: -35px;">
                    <div class="row" style="background-color: #E09132;
                        color: white; background-size: 100%;"> 
                        <div class="col">
                            <h1 style="text-decoration:underline;">Visi</h1>
                            <h5>
                                "Menjadi pusat pengetahuan, pembelajaran, dan kebudayaan yang 
                                menyediakan akses luas terhadap informasi dan sumber daya."
                            </h5>
                        </div>
                        <div class="col">
                            <h1 style="text-decoration:underline;">Misi</h1>
                            <h5>
                            <ol>
                                <li>Mendorong minat membaca dan literasi di kalangan masyarakat.</li>
                                <li>Melestarikan warisan budaya dan sejarah melalui pengarsipan dan dokumentasi.</li>
                                <li>Mengembangkan layanan inovatif dan teknologi informasi.</li>
                            </ol>  

                            </h5>                             
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section 4 -->
        <section>
            <div class="container px-4 py-5 mx-auto">
                <h3 class="pb-2 border-bottom" style="color: white;">Books Categories</h3>
                
                <div class="row py-4">
                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/script.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Text-Book</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                    <img src="../gambar/science.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Science</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/history.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            History</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/adventure.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Adventure</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/biography.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Biography</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/comic.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Comic</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/dictionary.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Dictionary</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/magazine.png" width="150" height="160">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            Magazine</h5>
                    </div>
                </div>
                <h1 class="pb-2 border-bottom"> </h1>
            </div>
        </section>
        
        <!-- section 5 -->
        <section>
            <div class="container px-4 py-5 mx-auto" id="top-books">
                <h3 class="pb-2 border-bottom" style="color: white; margin-top:-50px;">Top Books</h3>
                
                <div class="row py-4">
                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/book1.jpg" width="160" height="200">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            NEGERI<br>5 MENARA</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/book2.jpg" width="160" height="200">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            PERAHU<br> KERTAS</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/book3.jpg" width="160" height="200">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            DILAN: DIA ADALAH <br> DILANKU TAHUN 1990</h5>
                    </div>

                    <div class="col-lg-3 col-sm-12 text-center p-5">
                        <img src="../gambar/book4.jpg" width="160" height="200">
                        <rect width="100%" height="100%" fill="#777" />

                        <br><br>
                        <h5
                            style="color: white; font-size: large;">
                            DILAN: DIA ADALAH <br> DILANKU TAHUN 1990</h5>
                    </div>
                </div>
                <h1 class="pb-2 border-bottom"> </h1>
            </div>
        </section>

        <!-- section 6 -->
        <section>
            <div class="container" id="daftarBuku">
                <div class="first" style="background-color: #E09132; margin-bottom: 20px;
                weight: auto; height: 800px;">
                 <h3 class="pb-2" style="color: white; text-align: center;"> Daftar Buku Bookme</h3>

                <div class="container" id="tableDaftar">
                    <h5><a href="addbuku.php" style="color:#424530;float:left;">Add Buku</a></h5>
                <br>
                <br>
                <!--awal table-->
                <table align="center" class="table border"  style="color:#424530;">
                    <!--awal header table-->
                    <tr>
                        <th width="5%" align="center">No</th>
                        <th width="10%" align="center">ID Buku</th>
                        <th width="30%" align="center">Judul</th>
                        <th width="10%" align="center">Pengarang</th>
                        <th width="25%" align="center">Penerbit</th>
                        <th width="20%" align="center">Keterangan</th>
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
                    <tr style="color:white;">
                        <td style="color:#424530;"> <?php echo $nomor++?></td>
                        <td> <?php echo isset($tampildata['id_buku']) ? $tampildata['id_buku'] : ''; ?></td>
                        <td> <?php echo isset($tampildata['judul_buku']) ? $tampildata['judul_buku'] : ''; ?></td>
                        <td> <?php echo isset($tampildata['pengarang_buku']) ? $tampildata['pengarang_buku'] : ''; ?></td>
                        <td> <?php echo isset($tampildata['penerbit_buku']) ? $tampildata['penerbit_buku'] : ''; ?></td>

                        <td align="center">
                            <a href="halaman/buku/bukuhapus.php?id_buku=<?php echo $tampildata['id_buku'];?>" 
                                onclick="return confirm('Apa Anda yakin akan menghapus Data Buku?')" style="color: white;">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <!--akhir menampilkan data dari tabel buku ke halaman web-->
                    <?php
                    }
                    ?>

                </table>
        </section>

        <!-- section 7 -->
        <section>
            <div class="container px-4 py-5 mx-auto border top">
                <h1 align="center" style="color: white; margin-top: -50px; margin-bottom: -30px;">
                    MEMORIES
                </h1>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="container px-4 py-5 mx-auto">
                            <img src="../gambar/m1.jpg"
                                width="600px" height="400px" style="border:1;">
                            <br>
                        </div>
                    </div>                 
                    <div class="col">
                        <div class="container px-4 py-5 mx-auto">
                            <div class="kritik">
                                <div class="form-container">
                                    <h3>Message</h3>
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
        </section>

        <!-- section 6 -->
        <section>
            <div class="container px-4 py-5 mx-auto" style="margin-top: -60px;">
                <div class="container">
                    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                        <div class="col mb-3">
                            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                                <img src="../gambar/logo.png" width="50px" height="50px"> 
                            </a>
                            <p style="font-weight: bold;color: white;">&copy; 2023</p>
                        </div>
        
                        <div class="col mb-3">
        
                        </div>
        
                        <div class="col mb-3"   style="color: white;">
                            <h5 style="font-weight: bold;">Section</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About Us</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Book List</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                            </ul>
                        </div>
        
                        <div class="col mb-3" style="color: white;">
                            <h5 style="font-weight: bold;">Section</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About Us</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Book List</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                            </ul>
                        </div>
        
                        <div class="col mb-3" >
                            <h5 style="font-weight: bold; color: white;">Section</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About Us</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Book List</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </div>
        </section>
    </body>
</html>