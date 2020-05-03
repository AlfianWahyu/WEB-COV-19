<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>Covid-19</title>
</head>
<body id="page-top">
<?php session_start(); ?>
<nav>
<div class="bg-light fixed-top">
<div class="container">
  <div class="nav nav-tabs nav-light" id="nav-tab" role="tablist">
  <a class="navbar-brand font-weight-bold" href="home.php">#PeduliBumi</a>
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile User</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">About Me</a>
    <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Admin</a>
    <li style="margin-left:25vw;">
        <a class="btn btn-secondary" href="Login.php" role="button">Login</a>
        <a class="btn btn-secondary" href="Register.php" role="button">Register</a>
        </li>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:500px;">
    <div class="carousel-item active">
      <img src="a.jpeg" class="d-block w-100" alt="..." style="margin-top:-10px;">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4 font-weight-bold"style="color:Gold; margin-top:-560px;">Lets Keep Earth Save!</h1>
      <hr class="my-4" style="border-color:Gold; width:10vw; border-width:3px;" >
    <p class="lead font-weight-bold" style="color:Brown;">Jauhi Kontak Langsung Dengan Masyarakat Untuk Menghindari Covid-19.</p>
    </div>
    </div>
    <div class="carousel-item" style="height:500px;">
      <img src="b.jpeg" class="d-block w-100" alt="..." style="margin-top:-10px;">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4 font-weight-bold"style="color:Gold; margin-top:2vw;">Lets Keep Your Healthy</h1>
      <hr class="my-4" style="border-color:Gold; width:10vw; border-width:3px;" >
    <p class="lead font-weight-bold" style="color:Brown;">Gunakan Masker Untuk Mencegah Terjadinya Penularan Covid-19.</p>
      </div>
    </div>
    <div class="carousel-item" style="height:500px;">
      <img src="c.jpeg" class="d-block w-100" alt="..." style="margin-top:-10px;">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4 font-weight-bold"style="color:Gold; margin-top:2vw;">#PeduliBumi</h1>
      <hr class="my-4" style="border-color:Gold; width:10vw; border-width:3px;" >
    <p class="lead font-weight-bold" style="color:Brown;">Bantu Secara Bersamaan Supaya Bumi Kembali Sehat.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ISI-1 -->
<div class="tab-content bg-light" id="nav-tabContent">
  <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="container">
  <center><h1><span class="badge badge-secondary text-center">Artikel Covid-19</span></h1></center>
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pengertian Corona Virus
        </button>
      </h2>
    </div>  
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      merupakan keluarga besar virus yang menyebabkan infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang terinfeksi virus ini, setidaknya satu kali dalam hidupnya.Siapa pun dapat terinfeksi virus corona. Akan tetapi, bayi dan anak kecil, serta orang dengan kekebalan tubuh yang lemah lebih rentan terhadap serangan virus ini. Selain itu, kondisi musim juga mungkin berpengaruh. Contohnya, di Amerika Serikat, infeksi virus corona lebih umum terjadi pada musim gugur dan musim dingin. 
Di samping itu, seseorang yang tinggal atau berkunjung ke daerah atau negara yang rawan virus corona, juga berisiko terserang penyakit ini. Misalnya, berkunjung ke Tiongkok, khususnya kota Wuhan, yang pernah menjadi wabah COVID-19 yang bermulai pada Desember 2019
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tanda dan Gejala Seseorang Terkena Virus
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Orang-orang yang terinfeksi mungkin memiliki gejala ringan, seperti demam, batuk, dan kesulitan bernapas.Pada beberapa kejadian juga ditemukan penderita Covid-19 bersifat asimtomatik. Gejala diare atau infeksi saluran napas atas (misalnya bersin, pilek, dan sakit tenggorokan) lebih jarang ditemukan.Kasus dapat berkembang menjadi pneumonia berat, kegagalan multiorgan, dan kematian.Masa inkubasi diperkirakan antara 1–14 hari oleh Organisasi Kesehatan Dunia (WHO) dan 2–14 hari oleh Pusat Pengendalian dan Pencegahan Penyakit Amerika Serikat (CDC).Tinjauan WHO terhadap 55.924 kasus terkonfirmasi di Tiongkok mengindikasikan tanda dan gejala klinis.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Penyebab Covid-19
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Penyakit ini disebabkan oleh koronavirus sindrom pernapasan akut berat 2 (SARS-CoV-2 atau severe acute respiratory syndrome coronavirus 2). Virus ini menyebar melalui percikan (droplets) dari saluran pernapasan yang dikeluarkan saat sedang batuk atau bersin.Sebuah penelitian di jepang sedang mempelajari kemungkinan penularan dapat terjadi melalui microdroplets yang melayang-layang di udara.<br/><br/>Paru-paru adalah organ yang paling terpengaruh oleh penyakit ini karena virus memasuki sel inangnya lewat enzim pengubah angiotensin 2 (angiotensin converting enzyme 2 atau ACE2), yang paling banyak ditemukan di dalam sel alveolar tipe II paru. SARS-CoV-2 menggunakan permukaan permukaan sel khususnya yang mengandung glikoprotein yang disebut "spike" untuk berhubungan dengan ACE2 dan memasuki sel inang.Berat jenis ACE2 pada setiap jaringan berhubungan dengan tingkat keparahan penyakit. Diduga, bahwa penurunan aktivitas ACE2 memberikan perlindungan terhadap sel inang karena ekspresi ACE2 yang berlebihan akan menyebabkan infeksi dan replikasi SARS-CoV-2.Beberapa penelitian, melalui sudut pandang yang berbeda juga menunjukkan bahwa peningkatan ekspresi ACE2 oleh golongan obat penghambat reseptor angiotensin II akan melindungi sel inang. Dibutuhkan penelitian lebih lanjut tentang hal ini.ACE2 juga merupakan jalur bagi virus SARS-CoV-2 untuk menyebabkan kerusakan jantung, karenanya penderita dengan riwayat penyakit jantung memiliki prognosis yang paling jelek.
      </div>
    </div>
  </div>
  <center><h1><span class="badge badge-secondary text-center">Cara Cuci Tangan</span></h1></center>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="g.jpeg" class="d-block w-100" alt="...">
    </div>
    </div>
    </div>
    <br/>
    <div class="card">
  <div class="card-header">
    @Copyright2020
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Stay Safe, AL :)</p>
      <footer class="blockquote-footer">#PeduliBumi<cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
</div>
</div>
  </div>
  <!-- ISI-1 --> 
  <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
  <form>
  <div class="form-group">
  <center><h1><span class="badge badge-secondary text-center">Data User</span></h1></center>
  <label for="exampleInputEmail1">Username</label>
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="
    <?php 
    if (!isset($_SESSION['username']))
    echo "Silahkan Login";
    else
    echo $_SESSION['username'];?>">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php 
    if (!isset($_SESSION['password']))
    echo "";
    else
    echo $_SESSION['password'];?>">
  </div>
  </div>
  <button type="submit" class="btn btn-secondary">EDIT PROFILE</button>
  <?php
   session_destroy();
?>
<a href="home.php"><button type="button" class="btn btn-secondary">Logout</button></a>
</div>
</form>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <center><h1><span class="badge badge-secondary text-center">Profil Admin</span></h1></center>
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Data Diri
        </button>
      </h2>
    </div>  
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
     Nama : Alfian Wahyu Juhar Putra <br/> TTL : Malang, 12 Juni 2004 <br/> Studi : SMK Telkom Malang
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Sosial Media
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
     IG : @_nduuttt <br/> E-mail : alfian_wahyu_28rpl@student.smktelkom-mlg.sch.id
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Pesan Admin
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Jagalah kebersihan anda baik itu kebersihan lingkungan, makanan, dan juga kebersihan diri anda <br/> Sayangi diri anda dan keluarga anda, jangan berpergian keluar rumah jika tidak terlalu pentin #StayAtHome
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
  <div class="container">
  <center><h1><span class="badge badge-secondary text-center">Login Admin</span></h1></center>
<form method="post" class="container" style="margin-top:5%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
<h4 class="text-center" >Login Admin</h4>
<hr>
<div class="form-grup">
<label>Username</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-user"></i></div>
</div>
<input type="text" class="form-control" name="Username"/>
</div>
</div>
<div class="form-grup">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-unlock-alt"></i>
</div>
<input type="password" name="Password" class="form-control" >
</div>
</div>
<br/>
<td><input type="submit" name="login" value="Login" class="btn btn-primary" style="width:30%;" /></td></td>
</form>
</div>
<?php
$_SESSION["Username"]="admin";
$_SESSION["Password"]="admin";
if (isset($_POST["login"])){
    if ($_POST["Username"]=="admin" && $_POST["Password"]=="admin"){
        header ("crud.php");
    }else{
        echo"Maaf Username Atau Password Salah !";
    }
}
?>
  </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

