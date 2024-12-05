<style>
.jumlahlaporan {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
</style>

<div class="wrapper row3">
    <section class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs">Pemerintah Kelurahan Bingai</p>
        <p class="heading underline font-x2">Kependudukan Kelurahan Bingai</p>
      </div>
      <ul id="stats" class="nospace group jumlahlaporan">
        <li>
            <i class="fab fa-pied-piper-alt"></i>
            <p><a href="#">{{ $jumlahKependudukan }}</a></p>
            <p>Data Terdaftar</p>
        </li>
    </ul>
    </section>
  </div>
  <div class="wrapper bgded" style="background-image:url('{{ asset('images/jalan.jpg') }}');background-size: cover;">
    <section id="testimonials" class="hoc clear">
      <div class="one_half overlay">
        <ul class="nospace">
          <li>
            <blockquote>Sebagai Lurah, saya ingin menyampaikan rasa terima kasih yang sebesar-besarnya kepada seluruh masyarakat atas kepercayaan dan kerja sama yang terus terjalin. Kita semua memiliki peran penting dalam mewujudkan [Nama Kelurahan] sebagai lingkungan yang aman, nyaman, dan sejahtera. <br>

                Melalui momen ini, saya mengajak seluruh masyarakat untuk bersama-sama berpartisipasi aktif dalam setiap program pembangunan yang telah direncanakan. Dengan gotong-royong dan semangat kebersamaan, saya yakin kita mampu menghadapi berbagai tantangan dan menciptakan masa depan yang lebih baik untuk kelurahan kita tercinta.</blockquote>
            <figure class="clear"><img class="circle" src="{{ asset('images/iconbingai.jpeg') }}" width="10px" height="10px" alt="" style="width:50px;height:50px">
              <figcaption>
                <h6 class="heading">Fahri Aditia Efendi Sembiring, SE</h6>
                <em>LURAH / Kelurahan Bingai</em></figcaption>
            </figure>
          </li>
          {{-- <li>
            <footer><a class="btn inverse" href="#">View More</a></footer>
          </li> --}}
        </ul>
      </div>
    </section>
  </div>
