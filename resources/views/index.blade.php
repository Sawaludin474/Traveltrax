@extends('welcome')
@section('content')
    <!--==================== HOME ====================-->
    <section>
        <div class="swiper-container">
            <div>
                <!--========== ISLANDS 1 ==========-->
                <section class="islands">
                    <img src="{{ asset('/frontend/./assets/img/hero.jpg') }}" alt="" class="islands__bg" />
                    <div class="bg__overlay">
                        <div class="islands__container container">
                            <div class="islands__data" style="z-index: 99; position: relative">
                                <h2 class="islands__subtitle">
                                    Explore
                                </h2>
                                <h1 class="islands__title">
                                    Wonderfull World
                                </h1>
                                <p class="islands__description">
                                    It's the perfect time travel and
                                    enjoy the <br />
                                    beauty of the world.
                                </p>
                                <br>
                                <a href="{{ url('#button') }}" class=" button nav__button transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    
    <!--==================== LOGOS ====================-->
    <section class="logos" style="margin-top: 9rem; padding-bottom: 3rem">
        <div class="logos__container container grid">
            <div class="logos__img">
                <img src="{{ asset('/frontend/./assets/img/tripadvisor.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('/frontend/./assets/img/airbnb.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('/frontend/./assets/img/booking.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('/frontend/./assets/img/airasia.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!--==================== POPULAR ====================-->
    <section class="section" id="popular">
        <div class="container">
            <span class="section__subtitle" style="text-align: center">Best Choice</span>
            <h2 class="section__title" style="text-align: center">
                Popular Places
            </h2>

            <div class="popular__container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <a href="{{ url('') }}">
                            <img src="{{ asset('/frontend/./assets/img/travel-1.jpg') }}" alt=""
                                class="popular__img" />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>500,00
                                </h2>
                                <h3 class="popular__title">
                                    Bali, Indonesia
                                </h3>
                                <p class="popular__description">3D4N</p>
                            </div>
                        </a>
                    </article>
                    <article class="popular__card swiper-slide">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('/frontend/./assets/img/travel-2.jpg') }}" alt=""
                                class="popular__img" />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>35,159
                                </h2>
                                <h3 class="popular__title">
                                    Dubai, Uni Emirat Arab
                                </h3>
                                <p class="popular__description">4D5N</p>
                            </div>
                        </a>
                    </article>
                    <article class="popular__card swiper-slide">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('/frontend/./assets/img/travel-3.jpg') }}" alt=""
                                class="popular__img" />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>75,043
                                </h2>
                                <h3 class="popular__title">
                                    Rome, Italia
                                </h3>
                                <p class="popular__description">5D6N</p>
                            </div>
                        </a>
                    </article>
                    <article class="popular__card swiper-slide">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('/frontend/./assets/img/travel-4.jpg') }}" alt=""
                                class="popular__img" />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>62,024
                                </h2>
                                <h3 class="popular__title">
                                    Lombok, Indonesia
                                </h3>
                                <p class="popular__description">2D3N</p>
                            </div>
                        </a>
                    </article>
                </div>

                <div class="swiper-button-next">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bx bx-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!--==================== VALUE ====================-->
    <section class="value section" id="value">
        <div class="value__container container grid">
            <div class="value__images">
                <div class="value__orbe"></div>

                <div class="value__img">
                    <img src="{{ asset('/frontend/./assets/img/team.jpg') }}" alt="" />
                </div>
            </div>

            <div class="value__content">
                <div class="value__data">
                    <span class="section__subtitle">Why Choose Us</span>
                    <h2 class="section__title">
                        Experience That We Promise To You
                    </h2>
                    <p class="value__description">
                        We always ready to serve by providing the best
                        service for you. We make a good choices to
                        travel around the world.
                    </p>
                </div>

                <div class="value__accordion">
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-shield-x value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Best places in the world
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                We provides the best places around the
                                world and have a good quality of
                                service.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-x-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Affordable price for you
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                We try to make your budget fit with the
                                destination that you want to go.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-bar-chart-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Best plan for your time
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Provides you with time properly.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Security guarantee
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                We make sure that our services have a
                                good of security
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="blog section" id="blog">
        <div class="blog__container container">
            <span class="section__subtitle" style="text-align: center">Our Blog</span>
            <h2 class="section__title" style="text-align: center">
                The Best Trip For You
            </h2>

            <div class="blog__content grid">
                <article class="blog__card">
                    <div class="blog__image">
                        <img src="{{ asset('/frontend/./assets/img/blog-2.jpg') }}" alt=""
                            class="blog__img" />
                        <a href="{{ url('#') }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            10 Place Recommendations
                        </h2>
                        <p class="blog__description">
                            The blogs about travel will help you a lot
                            about how it is prepared, its waiting time,
                            for a good quality travel.
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                2 Juli 2029
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>76,5k</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="blog__card">
                    <div class="blog__image">
                        <img src="{{ asset('/frontend/./assets/img/blog-1.jpg') }}" alt=""
                            class="blog__img" />
                        <a href="{{ url('#') }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            12 Benefits Of Traveling
                        </h2>
                        <p class="blog__description">
                            The blogs about travel will help you a lot
                            about how it is prepared, its waiting time,
                            for a good quality of traveling.
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                12 Juni 2023
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>356,7</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="blog__card">
                    <div class="blog__image">
                        <img src="{{ asset('/frontend/./assets/img/blog-3.jpg') }}" alt=""
                            class="blog__img" />
                        <a href="{{ url('#') }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            5 things to do before traveling
                        </h2>
                        <p class="blog__description">
                            The blogs about traveling will help you a
                            lot about how it is prepared, its waiting
                            time, for a good quality.
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                20 Juli 2024
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>356,7</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection