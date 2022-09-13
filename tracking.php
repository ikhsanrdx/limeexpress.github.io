<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&family=Quicksand&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <title>Lime Express ID</title>
  </head>
  <style>
    .slides {
            width: 100%;
            position: relative;
        }
        .slides .slide {
            display: none;
        }
        .slides .slide img {
            width: 100%;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        .slides .navigation {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .slides .navigation .prev,.slides .navigation .next {
            cursor: pointer;
            padding: 16px;
            font-weight: bold;
            font-size: 20px;
            color: white;
            background: rgba(0,0,0,0.2);
            user-select: none;
            transition: 0.6s ease;
        }
        .slides .navigation .prev:hover,.slides .navigation .next:hover{
            background: rgba(0,0,0,1);
        }

        @keyframes fade {
            from{opacity: 0.3}
            to{opacity: 1}
        }
    </style>
  <body>
    <!--Awal nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow">
        <div class="container">
            <a class="navbar-brand navbar" href="#"><img src="logo.png" class="w-50 mb-2" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="#profile">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="#ourservice">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
      <!--Akhir Navbar-->
      <!--Awal Form Tracking-->
      <div class="container mb-5 mt-5 shadow pb-3">
          <form action="tracking.php" method="post" style="margin-top : 10px">
            Lacak kiriman </br><input type="text" name="resi" id="" plasholder="Nomor resi Pengiriman">
            <input type="submit" value="Lacak" class="btn-secondary">
            </form>
          </form>
      </div>
      <!--Akhir Form Tracking-->
      <?php
      class Paket {
        // Properties
        public $resi;
        public $nama;
        public $a_penerima;
        public $tglk;
        public $lokasi;
        public $sampai;
        public $diterima;
      
        // Methods
        function set_name($resi, $nama, $a_penerima, $tglk, $lokasi, $sampai, $diterima) {
          $this->resi = $resi;
          $this->nama = $nama;
          $this->a_penerima = $a_penerima;
          $this->tglk = $tglk;
          $this->lokasi = $lokasi;
          $this->sampai = $sampai;
          $this->diterima = $diterima;
        }
        function get_resi() {
          return $this->resi;
        }
        function get_nama() {
          return $this->nama;
        }
        function get_a_penerima() {
          return $this->a_penerima;
        }
        function get_tglk() {
          return $this->tglk;
        }
        function get_lokasi() {
          return $this->lokasi;
        }
        function get_sampai() {
            return $this->sampai;
          }
        function get_diterima() {
          return $this->diterima;
        }

        

      }
      
      $paket1 = new Paket();
      $paket2 = new Paket();
      $paket3 = new Paket();
      $paket4 = new Paket();


      ## Strucktur --> resi - penerima - alamat penerima - tanggal kirim- tiba di- perkiraan sampai - penerima
      $paket1->set_name('19211302','Ikhsan purnomo','Jl.Panjang No.12 Kebon jeruk Jakarta Barat','13 Juni 2022','Kantor DC Jaktim','15 Juni 2022','');
      $paket2->set_name('19211158','Lifia novianti','Jl. Pondok Kopi II, Pd. Kopi, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13460','11 Mei 2022','Sampai tujuan','14 juni 2022','Paket telah diterima | Scurity => Adit');
      $paket3->set_name('19210947','Monika Aristia Salma',' Wisma AKR Lt 1, Jl. Panjang No. 5, RT.11/RW.10, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530','15 Juni 2022','Lime Citra 6','20 Juni 2022','');
      $paket4->set_name('19210857','Fadlur Rahman Al Aziz Esa','JL.Puri Indah Raya Blok A No.17 Kembangan Komp. Puri Indah,South Kembangan, Kembangan, West Jakarta City, Jakarta 11610','15 Juni 2022','lime kosambi','21 Juni 2022','');
      

      ?>

      <?php
      if ($_POST["resi"] == 19211302) {
        $resi = $paket1->get_resi();
        $nama = $paket1->get_nama();
        $a_penerima = $paket1->get_a_penerima();
        $tglk = $paket1->get_tglk();
        $lokasi = $paket1->get_lokasi();
        $sampai = $paket1->get_sampai();
        $diterima = $paket1->get_diterima();

      }elseif ($_POST["resi"] == 19211158) {
        $resi = $paket2->get_resi();
        $nama = $paket2->get_nama();
        $a_penerima = $paket2->get_a_penerima();
        $tglk = $paket2->get_tglk();
        $lokasi = $paket2->get_lokasi();
        $sampai = $paket2->get_sampai();
        $diterima = $paket2->get_diterima();

      }elseif ($_POST["resi"] == 19210947) {
        $resi = $paket3->get_resi();
        $nama = $paket3->get_nama();
        $a_penerima = $paket3->get_a_penerima();
        $tglk = $paket3->get_tglk();
        $lokasi = $paket3->get_lokasi();
        $sampai = $paket3->get_sampai();
        $diterima = $paket3->get_diterima();
        
      }elseif ($_POST["resi"] == 19210857) {
        $resi = $paket4->get_resi();
        $nama = $paket4->get_nama();
        $a_penerima = $paket4->get_a_penerima();
        $tglk = $paket4->get_tglk();
        $lokasi = $paket4->get_lokasi();
        $sampai = $paket4->get_sampai();
        $diterima = $paket4->get_diterima();

      }
      else {
        echo '<script>window.location="worng.php"</script>';
      }
  

      ?>

     <!-- Awal Tabel -->
     <div class="container mt-5 mb-5">
     <table class="table table-bordered table-hover">
       <thead>
         <tr>
           <th>No. RESI</th>
           <th><?php echo"$resi"?></th>				
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>Penerima</td>
           <td><?php echo"$nama"?></td>
         </tr>
         <tr>
           <td>Alamat</td>
           <td><?php echo"$a_penerima"?></td>
         </tr>
         <tr>
           <td>Tangal kirim</td>
           <td><?php echo"$tglk"?></td>
         </tr>
         <tr>
           <td>Lokasi saat ini</td>
           <td><?php echo"$lokasi"?></td>
         </tr>
         <tr>
           <td>Perkiraan Sampai</td>
           <td><?php echo"$sampai"?></td>
         </tr>
         <tr>
           <td><?php echo"$diterima"?></td>
         </tr>
       </tbody>
     </table>
     </div>
     <!-- Akhir Tabel -->

      <!--Awal Profile-->
      <section class="p-5" id="profile">
        <div class="=container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-secondary">
                        <div class="card-body">
                            <h3>PT.LIME INDONESIA JAYA</h3>
                            <p>
                                Kami adalah perusahaan yang bergerak dalam bidang jasa cargo pengiriman barang dan ekspedisi seluruh Indonesia.<br>Layanan pengiriman barang via udara, laut dan darat untuk membantu klien-klien kami dalam menangani proses pengiriman barang seluruh Indonesia.<br>Berkantor pusat di lokasi yang strategis, kami memberikan layanan terbaik dan menyeluruh serta flexible disesuaikan dengan kebutuhan klien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
      <section class="p-5" id="profile">
        <div class="=container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-secondary">
                        <div class="card-body">
                            <h3>VISI</h3>
                            <p>
                                “CERIA” Cepat, Efisien, Religius, Inovatif, Akuntabel
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-secondary">
                        <div class="card-body">
                            <h3>MISI</h3>
                            <p>
                            <div class="text-start">
                                <ul>
                                    1.	Mengupayakan Pengiriman Cepat
                                </ul>
                                <ul>
                                    2.	Mengupayakan Efisiensi dalam pengiriman
                                </ul>
                                <ul>
                                    3.	Mengutamakan sikap Religius 
                                </ul>
                                <ul>
                                    4.	Mengembangkan sistem pengiriman dengan mengikuti perkembangan 
                                </ul>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!--Awal our service-->
      <section id="ourservice">
      <div class="slides">
        <div class="slide">
            <img src="service/1.png" alt="">
        </div>
        <div class="slide">
            <img src="service/2.png" alt="">
        </div>
        <div class="slide">
            <img src="service/3.png" alt="">
        </div>
        <div class="slide">
            <img src="service/4.png" alt="">
        </div>
        <div class="navigation">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(-1)">&#10095;</a>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
     </script>
    </section>
      <!--Akhir our service-->
     <!-- Awal Kontak -->
  <section id="contact" class="p-5">
         <div class="container">
           <div class="row ">
             <div class="col-md text-center">
               <img src="limelogo.png" width="300px " ></br> </br>
               <h2 class="text-center mb-4">Informasi Kontak</h2>
               <ul class="list-group list-group-flush lead">
                 <li class="list-group">
                   <span class="fw-bold">Alamat</span><sm> Jln. Kamal raya No.18 Cengkareng timur kecamatan Cengkareng, Jakarta Barat (11730)</sm>
                 </li>
                 <li class="list-group">
                   <span class="fw-bold">Telp</span> <a href="https://wa.me/089525591412"> 089525591412</a>
                 </li>
                 <li class="list-group">
                   <span class="fw-bold">Email</span> limeexpress@gmail.com
                 </li>
               </ul>
             </div>
           </div>
         </div>
  </section>
         <!-- Akhir Kontak -->
 
         <!-- Awal Footer-->
         <footer class="p-1 bg-dark text-white text-center position-relative ">
            <small>
                <p>
                    copyright &copy; 2022 Lime Express
                </p>
            </small>
         </footer>
         <!-- Akhir Footer-->
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="js/mi"></script>
  </body>
</html>