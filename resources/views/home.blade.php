@extends('layout.app')

@section('title', 'Home - SMAS AL - ULUM')

@section('content')
  <div id="pageintro" class="hoc clear">
    <article>
      <h3 class="heading" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Website Konseling <span style="color:orange;font-weight:bold;"> SMAS AL - ULUM</span></h3>
      <p>Percepatan Informasi dan untuk menangani siswa yang perlu di bimbing</p>
      {{-- <footer>
        <ul class="inline nospace pushright">
          <li><a class="btn" href="#">Pharetra etiam</a></li>
          <li><a class="btn inverse" href="#">Sagittis massa</a></li>
        </ul>
      </footer> --}}
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="container hoc clear">
    <!-- main body -->

    <hr class="btmspace-80">
    <section id="overview">
      <div class="sectiontitle">
        <p class="nospace font-xs">SMAS AL - ULUM TERPADU</p>
        <p class="underline heading font-x2">Pelayanan Koseling</p>
      </div>
      <ul class="nospace group btmspace-80">
        <li class="one_third">
        <article>
            <article>
                <div class="clear" style="display: flex; align-items: center;">
                  <a href="#"><img src="{{ asset('images/publik.png') }}" alt="Pelayanan Publik" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                  <h6 class="heading">Konseling Pelanggaran</h6>
                </div>
                <p>Patung ini berdampingan dengan Kuil Shri Raja Rajeshwari Amman Kovil. Pembuatannya langsung ditangani oleh pemahat dari India.</p>
              </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear" style="display: flex; align-items: center;">
                <a href="#"><img src="{{ asset('images/lapor.png') }}" alt="Pelayanan Publik" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                <h6 class="heading">Konseling Prestasi</h6>
            </div>
            <p>Sagittis arcu a magna eget cursus lacus consectetur proin imperdiet bibendum elit id molestie ipsum ut tellus.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear" style="display: flex; align-items: center;">
                <a href="#"><img src="{{ asset('images/aplikasi.png') }}" alt="Pelayanan Publik" style="width: 30px; height: 30px; margin-right: 10px;"></a>
                <h6 class="heading">Layanan Lainnya</h6>
            </div>
            <p>Orci blandit ac mauris ac gravida maximus nulla curabitur convallis massa sed urna placerat sed tempor velit.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">Terima Kasih</a></footer>
    </section>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

{{-- @include('partials.profil')
@include('partials.struktur')
@include('partials.profillurah')
@include('components.artikel') --}}

@endsection
