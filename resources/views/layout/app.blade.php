<!DOCTYPE html>
<html lang="">
<head>
<title>SMAS AL - ULUM TERPADU | Welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> --}}
<link rel="shortcut icon" href="{{ asset('logoBingai.jpeg') }}" type="image/x-icon">
<link href="{{ asset('css/layout.css') }}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('gedung.jpg') }}');background-size: cover;">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <ul class="nospace">
            <li><i class="fas fa-phone rgtspace-5"></i>082582758257</li>
            <li><i class="far fa-envelope rgtspace-5"></i>Sma@gmail.com</li>
        </ul>
      </div>
      <div class="fl_right">
        {{-- <ul class="nospace">
          <li><a href="index.html"><i class="fas fa-home"></i></a></li>
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
        <a href=""><img src="{{ asset('img/logo2.png') }}" alt="GAMBAR" style="width: 300; height: 50px; "></a>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">

            <li style="font-size: 20px;">
                <a href="{{ url('/admin') }}" class="button-hover">
                    <i class="fas fa-sign-in-alt" style="margin-right: 5px;"></i>LOGIN
                </a>
            </li>


        </ul>
      </nav>
    </header>
  </div>


  @yield('content')

  @include('partials.footer')
