<!DOCTYPE html>
<html lang="">
<head>
<title>Sosial dan kesehatan | Web Kelurahan Bingai</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> --}}
<link rel="shortcut icon" href="{{ asset('logoBingai.jpeg') }}" type="image/x-icon">
<link href="{{ asset('css/layout.css') }}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('images/background.jpg') }}');background-size: cover;">
    <div class="wrapper row0">
      <div id="topbar" class="hoc clear">
        <div class="fl_left">
          @foreach ($kontak as $item)
          <ul class="nospace">
              <li><i class="fas fa-phone rgtspace-5"></i>{{ $item->phone}}</li>
              <li><i class="far fa-envelope rgtspace-5"></i>{{ $item->email }}</li>
          </ul>
          @endforeach
        </div>
      <div class="fl_right">
        {{-- <ul class="nospace">
          <li><a href="../index.html"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul> --}}
      </div>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left" style="margin-bottom: 25px;inline-size: 20%;">
          <a href=""><img src="{{ asset('images/bingailogo.png') }}" alt="Pelayanan Publik" style="width: 250%; height: 50px; "></a>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class=""><a href="{{ route('home')}}">Home</a></li>
            <li class="active"><a class="drop" href="#">Pelayanan</a>
              <ul>
                <li><a href="{{ route('pengaduan') }}">Aspirasi & Pengaduan</a></li>
                <li><a href="{{ route('Administrasi') }}">Administrasi Kependudukan</a></li>
                <li><a href="{{ route('sosial') }}">Kesehatan & Sosial</a></li>
                {{-- <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                <li><a href="pages/font-icons.html">Font Icons</a></li> --}}
              </ul>
            </li>
            {{-- <li><a class="drop" href="#">Dropdown</a>
              <ul>
                <li><a href="#">Level 2</a></li>
                <li><a class="drop" href="#">Level 2 + Drop</a>
                  <ul>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                  </ul>
                </li>
                <li><a href="#">Level 2</a></li>
              </ul>
            </li> --}}
            {{-- <li><a href="#">Kontak</a></li> --}}
            <li class=""><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
            <li><a href="{{ route('galeri') }}">Galeri</a></li>
            {{-- <li><a href="#">Link Text</a></li> --}}
          </ul>
        </nav>
      </header>
  </div>
  <div id="breadcrumb" class="hoc clear">
    <h6 class="heading">Laman Kesehatan dan Sosial</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Kesehatan dan Sosial</a></li>
      {{-- <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li> --}}
    </ul>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <section class="info-section">
        <div class="hoc container clear">
          <div class="sectiontitle">
            <p class="nospace font-xs">Pelayanan Kelurahan Bingai</p>
            <p class="heading underline font-x2">Kesehatan & Sosial</p>
          </div>
          <div class="info-card">
            <div class="info-item">
              <img src="{{ asset('images/kesehatanfree.jpeg') }}" alt="Kesehatan Umum">
              <h4>Pemeriksaan Kesehatan Gratis</h4>
              <p>Setiap minggu, Kelurahan Bingai menyediakan layanan pemeriksaan kesehatan gratis untuk warga.</p>
            </div>
            <div class="info-item">
              <img src="{{ asset('images/sosial1.jpeg') }}" alt="Bantuan Sosial">
              <h4>Distribusi Bantuan Sosial</h4>
              <p>Program bantuan sembako bagi keluarga kurang mampu diadakan setiap bulan.</p>
            </div>
            <div class="info-item">
              <img src="{{ asset('images/penyuluhan.jpeg') }}" alt="Penyuluhan Kesehatan">
              <h4>Penyuluhan Kesehatan Masyarakat</h4>
              <p>Seminar dan pelatihan kesehatan untuk meningkatkan kesadaran akan pola hidup sehat.</p>
            </div>
          </div>
        </div>
      </section>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@include('partials.footer')
{{-- <div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html> --}}