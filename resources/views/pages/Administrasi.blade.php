<!DOCTYPE html>
<html lang="">
<head>
<title>Kependuduakan |  Kelurahan Bingai</title>
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


/* CSS LAPOR */
  .form-lapor, .steps, .stats {
    margin: 20px 0;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    font-weight: bold;
  }
  .form-group textarea, .form-group select, .form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .btn-lapor {
    background-color: #d22b2b;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .steps .step, .stats .stat {
    display: inline-block;
    width: 23%;
    text-align: center;
    margin: 1%;
  }
  .steps .step i, .stats .stat h3 {
    font-size: 2em;
    color: #d22b2b;
  }

  .form-kependudukan {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.06);
    }

    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
    }
    .form-group input, .form-group select, .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .btn-lapor {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-lapor:hover {
        background-color: #a81a1a;
    }
    /* Responsive styling for mobile */
    @media screen and (max-width: 768px) {
        .form-lapor {
            width: 100%;
            padding: 10px;
        }
    }
    #petunjuk-lapor {
    text-align: center;
    padding: 50px 0;
}

.steps {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.step {
    margin: 0 20px;
    position: relative;
    border: 2px solid white;
    border-radius: 100%;
    padding: 25px;
    box-shadow: 0 10px 10px rgba(236, 192, 17, 0.1), 0 1px 3px rgba(206, 181, 18, 0.06);
}

.step i {
    font-size: 40px;
    color: #333;
}

.step h3 {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
}

.step p {
    margin-top: 5px;
    font-size: 14px;
}

.steps::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #333;
    z-index: -1;
}

.step:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 50%;
    right: -20px;
    width: 30px;
    height: 2px;
    background-color: #333;
    z-index: -1;
}

.jumlahlaporan {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.petunjuk {

}


</style>
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('images/bgPengaduan.jpg') }}');background-size: cover;">
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
    <h6 class="heading">Laman Administrasi Kependudukan</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Administrasi Kependudukan</a></li>
      {{-- <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li> --}}
    </ul>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <div class="sectiontitle">
        <p class="nospace font-xs">Pemerintah Kelurahan Bingai</p>
        <p class="heading underline font-x2">Formulir Pendataan Kependudukan</p>
    </div>

      <section id="kependudukan">
        <form action="{{ route('administrasi.store') }}" method="POST" class="form-kependudukan">
            @csrf
            <!-- Nama -->
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <!-- NIK -->
            <div class="form-group">
                <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                <input type="text" id="nik" name="nik" required maxlength="16">
            </div>
            <!-- Alamat -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <!-- Tempat Lahir -->
            <div class="form-group">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" id="tempat-lahir" name="tempat-lahir" required>
            </div>
            <!-- Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal-lahir" name="tanggal-lahir" required>
            </div>
            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin</label>
                <select id="jenis-kelamin" name="jenis-kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <!-- Status Pernikahan -->
            <div class="form-group">
                <label for="status-pernikahan">Status Pernikahan</label>
                <select id="status-pernikahan" name="status-pernikahan" required>
                    <option value="">Pilih Status</option>
                    <option value="belum menikah">Belum Menikah</option>
                    <option value="menikah">Menikah</option>
                    <option value="cerai hidup">Cerai Hidup</option>
                    <option value="cerai mati">Cerai Mati</option>
                </select>
            </div>
            <!-- Nomor HP -->
            <div class="form-group">
                <label for="nomor-hp">Nomor HP</label>
                <input type="text" id="nomor-hp" name="nomor-hp" required>
            </div>
            <!-- Tombol Submit -->
            <div class="form-group">
                <button type="submit" class="btn-lapor">Kirim Data</button>
            </div>
        </form>
        @if(session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif

    </section>

    <!-- Reporting Instructions -->
    <section id="petunjuk-lapor" class="hoc container clear petunjuk">
        <h2 class="heading">Petunjuk Laporan</h2>
        <div class="steps">
            <div class="step">
                <i class="fas fa-pencil-alt"></i>
                <h3>Lengkapi data diri</h3>
                <p>Isi laporan Anda dengan jelas dan lengkap.</p>
            </div>
            <div class="step">
                <i class="fas fa-check-circle"></i>
                <h3>Proses Verifikasi</h3>
                <p>Laporan Anda akan diverifikasi oleh tim kami.</p>
            </div>
            <div class="step">
                <i class="fas fa-tasks"></i>
                <h3>Data Terdaftar</h3>
                <p>Laporan Anda akan ditindaklanjuti oleh pihak berwenang.</p>
            </div>
            <div class="step">
                <i class="fas fa-flag-checkered"></i>
                <h3>Selesai</h3>
                <p>Anda akan mendapatkan tanggapan akhir.</p>
            </div>
        </div>
    </section>

    <!-- Report Statistics -->
    <section class="hoc container clear">
        <div class="sectiontitle">
            <p class="nospace font-xs">Pemerintah Kelurahan Bingai</p>
            <p class="heading underline font-x2">Jumlah Pendataan Yang Masuk</p>
        </div>
        <ul id="stats" class="nospace group jumlahlaporan">
            <li>
                <i class="fab fa-pied-piper-alt"></i>
                <p><a href="#">{{ $jumlahKependudukan }}</a></p>
                <p>Data Terdaftar</p>
            </li>
        </ul>
    </section>

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
