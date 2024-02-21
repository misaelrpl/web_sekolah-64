 <!-- Header Menu Atas -->
 <div class="wrapper row0">
    <div id="topbar" class="clear">
      <nav>
        <ul>
          <li><a href="../test1/index.php">Beranda</a></li>
          <li><a href="../test1/hubungi-kami.php">Kontak Kami</a></li>
          <li><a href="../test1/pendaftaran-alumni.php">Pendaftaran Alumni</a></li>
          <li><a href="../test1/Sekolah_Login/index.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </div>

    <!-- ## -->
      <?php 
        //Koneksi ke database, pastikan $conn sudah diinisialisasi sebelumnya
        $conn = mysqli_connect("localhost", "root", "", "db-smk64");

        if(!$conn) {
          die("Koneksi database gagal:" . mysqli_connect_error());
        }
      ?>
        
    <!-- Header logo & slogan -->
    <div class="wrapper row1">
      <header id="header" class="clear">     
        <div id="logo" class="fl_left">
          <img src="../test1/images/demo/logo.png" style="display: flex; height: 100px; width: 110px; margin-top: 10;">
        <?php
        //Sintaks untuk manggil judul nama smk
        $queryjudul = "SELECT * FROM tb_namasmk";
        $resultjudul = mysqli_query($conn, $queryjudul);

        
        // Loop untuk menampilkan nama SMK
        while ($rowjudul = mysqli_fetch_assoc($resultjudul)) {
          echo "
          <h1><a href ='" . $rowjudul['url'] . "'>" . $rowjudul['namasmk'] ."</a></h1>";
        }
        ?>
        
        <?php
          //Sintaks untuk manggil visi smk
        $queryvisi = "SELECT * FROM tb_visismk";
        $resultvisi = mysqli_query($conn, $queryvisi);

        
        // Loop untuk menampilkan visi SMK
        while ($rowvisi = mysqli_fetch_assoc($resultvisi)) {
          echo "
          <p><a href ='" . $rowvisi['url'] . "'>" . $rowvisi['visismk'] ."</a></p>";
        }
        ?>

        </div>
        <div class="fl_right">
          <form class="clear" method="post" action="#">
            <fieldset>
              <legend>Pencarian:</legend>
              <input type="text" value="" placeholder="Pencarian" />
              <button class="fa fa-search" type="submit" title="Search">
                <em>Pencarian</em>
              </button>
            </fieldset>
          </form>
        </div>
      </header>
    </div>
 <!--##-->

 <!--Menu Utama -->
    <div class="wrapper row2">
      <div class="rounded">
        <nav id="mainav" class="clear">
          <ul class="clear">
            <li></li>
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="../test1/profil.php">Profil</a></li>
            <li><a href="../test1/visidanmisi.php">VISI DAN MISI</a></li>
            <li><a href="../test1/informasi-sekolah.php">INFORMASI SEKOLAH</a></li>
            <li><a href="../test1/guru-dan-tu.php">GURU DAN TU</a></li>
            <li>
              <a class="drop" href="#">E-PERPUSTAKAAN</a>
              <ul>
                <li><a href="../test1/buku-pelajaran.php">BUKU PELAJARAN</a></li>
                <li><a href="../test1/buku-fiksi.php">BUKU FIKSI</a></li>
                <li><a href="../test1/cerpen.php">CERPEN</a></li>
                <li><a href="../test1/cerita-rakyat.php">CERITA RAKYAT</a></li>
                <li><a href="../test1/pojok-kisah.php">POJOK KISAH</a></li>
                <li><a href="../test1/tapian-sajak.php">TEPIAN SAJAK</a></li>
              </ul>
            </li>
            <li>
              <a class="drop" href="#">KATEGORI</a>
              <ul>
                <li><a href="../test1/pkl.php">PKL</a></li>
                <li><a href="../test1/kopi-64.php">KOPI 64</a></li>
              </ul>
            </li>
            <li>
              <a class="drop" href="#">DIREKTORI</a>
              <ul>
                <li><a href="../test1/direktori-alumni.php">DIREKTORI ALUMNI</a></li>
                <li><a href="../test1/pendaftaran-alumni.php">PENDAFTARAN ALUMNI</a></li>
                <li><a href="../test1/direktori-pesertadidik.php">DIREKTORI PESERTA DIDIK</a></li>
              </ul>
            </li>
            <li>
              <a class="drop" href="#">GALERI</a>
              <ul>
                <li><a href="../test1/gallery.php">GALERI FOTO</a></li>
                <li><a href="../test1/galeri-video.php">GALERI VIDEO</a></li>
                <li><a href="../test1/artikel.php">ARTIKEL</a></li>
              </ul>
            </li>
            <li><a href="../test1/hubungi-kami.php">HUBUNGI KAMI</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <!-- ## -->