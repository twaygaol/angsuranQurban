<!DOCTYPE html>
<html lang="">
<head>
<title> {{ $artikel->title }} | Web Kelurahan Bingai</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> --}}
<link rel="shortcut icon" href="{{ asset('logoBingai.jpeg')  }}" type="image/x-icon">
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


.article-header {
      text-align: center;
      padding: 2rem 0;
      background-color: #f8f9fa;
      border-bottom: 1px solid #ddd;
    }

    .article-header h1 {
      font-size: 2.5rem;
      margin: 0.5rem 0;
    }

    .article-header p {
      font-size: 1rem;
      color: #666;
    }

    .article-content {
      max-width: 800px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .article-content img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 1.5rem;
    }

    .article-content p {
      line-height: 1.8;
      margin: 1rem 0;
    }

    .back-button {
      display: block;
      text-align: center;
      margin: 2rem 0;
    }

    .back-button a {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    .back-button a:hover {
      text-decoration: underline;
    }
</style>
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('storage/' . $artikel->media) }}');background-size: cover;">
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
            <li><a class="drop" href="#">Pelayanan</a>
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
            <li class="active"><a href="{{ route('artikel') }}">Artikel & Blog</a></li>
            <li><a href="{{ route('galeri') }}">Galeri</a></li>
            {{-- <li><a href="#">Link Text</a></li> --}}
          </ul>
        </nav>
      </header>
  </div>
  <div id="breadcrumb" class="hoc clear">
    <h6 class="heading">Laman Artikel & Blog</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Artikel & Blog</a></li>
      <li><a href="#">{{ $artikel->title }}</a></li>
    </ul>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <header class="article-header">
        <h1>{{ $artikel->title }}</h1>
        <p>Dipublikasikan pada: {{ $artikel->published_at->format('d M Y') }}</p>
      </header>

      <main class="article-content">
        @if ($artikel->media)
          <img src="{{ asset('storage/' . $artikel->media) }}" alt="{{ $item->title }}"</a>
        @endif
        <p>{!! nl2br(e($artikel->content)) !!}</p>
      </main>

      <div class="back-button">
        <a href="{{ route('artikel') }}"><i class="fas fa-arrow-left"></i> Kembali ke daftar artikel</a>
      </div>
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
