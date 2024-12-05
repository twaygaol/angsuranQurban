
<style>
 #latest {
  display: flex;
  flex-wrap: wrap;
  gap: 20px; /* Jarak antar elemen */
}

#latest .one_third {
  flex: 0 0 calc(33.333% - 20px); /* 3 kolom dengan jarak */
  box-sizing: border-box;
}

</style>
<div class="wrapper row3">
    <section class="hoc container clear">
        <div class="sectiontitle">
          <p class="nospace font-xs">Seputar Kegiatan Kelurahan Bingai</p>
          <p class="heading underline font-x2">Artikel & Blog</p>
        </div>
        <ul id="latest" class="nospace group"> <!-- Hanya satu <ul> -->
          @foreach ($artikel as $item)
            <li class="one_third"> <!-- Pastikan semua artikel berada dalam satu <ul> -->
              <article>
                <a class="imgover" href="{{ route('artikel.show', $item->slug) }}">
                  <img src="{{ asset('storage/' . $item->media) }}" alt="{{ $item->title }}">
                </a>
                <ul class="nospace meta group">
                  <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                  <li><i class="far fa-clock"></i>
                    <time datetime="{{ $item->published_at }}">{{ $item->published_at->format('d M Y') }}</time>
                  </li>
                </ul>
                <div class="excerpt">
                  <h6 class="heading">{{ $item->title }}</h6>
                  <p>{{ Str::limit($item->content, 150, '...') }}</p>
                  <footer>
                    <a class="btn" href="{{ route('artikel.show', $item->slug) }}">Read More</a>
                  </footer>
                </div>
              </article>
            </li>
          @endforeach
        </ul>
        <footer class="center" style="margin-top:20px;">
          <a class="btn" href="{{ route('artikel') }}">Selengkapnya</a>
        </footer>
      </section>
  </div>
