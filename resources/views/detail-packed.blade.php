@extends('welcome')
@section('content')
    

      <!--==================== HOME ====================-->
      <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset("/frontend/./assets/img/borabora.jpg") }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Bora Bora</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset("/frontend/./assets/img/bali.jpg") }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Islands</h2>
                  <h1 class="islands__title">Bali</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset("/frontend/assets/img/palawan.jpg") }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Islands</h2>
                  <h1 class="islands__title">Palawan</h1>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
            <img
              src="{{ asset("/frontend/./assets/img/borabora.jpg") }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset("/frontend/./assets/img/bali.jpg") }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset("/frontend/./assets/img/palawan.jpg") }}"
              alt=""
              class="controls__img swiper-slide"
            />
          </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                quasi corrupti suscipit fugiat voluptatem numquam, tempore
                ducimus quisquam culpa nulla dignissimos officiis dolorem
                adipisci sit, minus vitae, unde voluptatum expedita similique
                quidem facere velit. Officiis qui, quasi ea eaque illo ullam
                labore perspiciatis corrupti beatae est explicabo, architecto
                facere facilis rerum repudiandae sit dolorum quibusdam
                laboriosam error corporis magni. Dolor, sapiente. Perspiciatis,
                facilis accusamus fuga suscipit fugit laboriosam expedita
                voluptate nulla modi nam recusandae porro repudiandae sint, illo
                doloribus labore autem. Culpa nemo similique minus magni ab
                reiciendis neque molestiae voluptatum! Quibusdam nesciunt sit
                eum maiores unde error beatae facere!
              </p>
            </div>
            <div class="package-travel">
              <h3>Booking Now</h3>
              <div class="card">
                <form action="">
                  <input type="text" placeholder="Your Name" />
                  <input type="email" placeholder="Your Email" />
                  <input type="number" placeholder="Your Number" />
                  <input
                    placeholder="Pick Your Date"
                    class="textbox-n"
                    type="text"
                    onfocus="(this.type='date')"
                    id="date"
                  />
                  <button class="button button-booking">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

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
              <a href="{{ url("") }}">
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