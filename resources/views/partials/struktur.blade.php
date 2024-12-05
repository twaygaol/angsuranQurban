<div class="wrapper row2">
    <div class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs">Pemerintah Kalurahan Bingai</p>
        <p class="heading underline font-x2">Struktur Organisasi</p>
      </div>
      @foreach ($struktur as $item )
      <ul class="nospace group team">
        <li class="one_quarter first">
          <figure><a class="imgover" href="#"><img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" alt=""></a>
            <figcaption><strong>{{ $item->name }}</strong> <em>{{ $item->position }}</em></figcaption>
          </figure>
        </li>
        {{-- <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption><strong>B. Doe</strong> <em>Job Title Here</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption><strong>C. Doe</strong> <em>Job Title Here</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption><strong>D. Doe</strong> <em>Job Title Here</em></figcaption>
          </figure>
        </li> --}}
      </ul>
      @endforeach
    </div>
  </div>
