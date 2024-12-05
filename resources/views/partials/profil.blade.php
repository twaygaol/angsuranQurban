<div class="bgded overlay" style="background-image:url('{{ asset('images/background.jpg') }}');background-size: cover;">
    <section id="splitfifty" class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs">Pemerintah Kelurahan Bingai</p>
        <p class="heading underline font-x2">Profile Kelurahan</p>
      </div>
      <div class="bgded clear" style="background-image:url('{{ asset('images/masjid.jpg') }}');background-size: cover;">
        @foreach ($profil as $item )
        <article>
          <h6 class="heading font-x2">Kelurahan Bingai</h6>
          <p>{{ $item->description }}</p>
          <footer><a class="btn" href="#">Fermentum felis</a></footer>
        </article>
        @endforeach
      </div>
    </section>
  </div>
