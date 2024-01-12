@extends('welcome')
@section('content')


<section class="section" id="popular">
  <div class="container">
    <span class="section__subtitle" style="text-align: center"
      >Related Package Travel</span
    >
    <h2 class="section__title" style="text-align: center">
      The Best Tour
    </h2>

    <div class="popular__all">
      <article class="popular__card">
        <a href="{{ route("detail") }}">
          <img
            src="{{ asset("/frontend/./assets/img/travel-1.jpg") }}"
            alt=""
            class="popular__img"
          />
          <div class="popular__data">
            <h2 class="popular__price"><span>$</span>500,00</h2>
            <h3 class="popular__title">Bali, Indonesia</h3>
            <p class="popular__description">3D4N</p>
          </div>
        </a>
      </article>
      <article class="popular__card">
        <a href="{{ url("#") }}">
          <img
            src="{{ asset("/frontend/./assets/img/travel-2.jpg") }}"
            alt=""
            class="popular__img"
          />
          <div class="popular__data">
            <h2 class="popular__price"><span>$</span>35,159</h2>
            <h3 class="popular__title">Dubai, Uni Emirat Arab</h3>
            <p class="popular__description">4D5N</p>
          </div>
        </a>
      </article>
      <article class="popular__card">
        <a href="{{ url("#") }}">
          <img
            src="{{ asset("/frontend/./assets/img/travel-3.jpg") }}"
            alt=""
            class="popular__img"
          />
          <div class="popular__data">
            <h2 class="popular__price"><span>$</span>75,043</h2>
            <h3 class="popular__title">Rome, Italia</h3>
            <p class="popular__description">5D6N</p>
          </div>
        </a>
      </article>
      <article class="popular__card">
        <a href="{{ url("#") }}">
          <img
            src="{{ asset("/frontend/./assets/img/travel-4.jpg") }}"
            alt=""
            class="popular__img"
          />
          <div class="popular__data">
            <h2 class="popular__price"><span>$</span>62,024</h2>
            <h3 class="popular__title">Lombok, Indonesia</h3>
            <p class="popular__description">2D3N</p>
          </div>
        </a>
      </article>
      <article class="popular__card">
        <a href="{{ url("#") }}">
          <img
            src="{{ asset("/frontend/./assets/img/travel-3.jpg") }}"
            alt=""
            class="popular__img"
          />
          <div class="popular__data">
            <h2 class="popular__price"><span>$</span>75,043</h2>
            <h3 class="popular__title">Bankok, Thailand</h3>
            <p class="popular__description">5D6N</p>
          </div>
        </a>
      </article>
    </div>
  </div>
</section>
@endsection