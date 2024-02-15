@extends('welcome')
@section('content')
    <!--==================== HOME ====================-->
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <!--========== ISLANDS 1 ==========-->
                <section class="islands swiper-slide">
                    @if ($travelPackage->gallery->isNotEmpty())
                        <img src="{{ asset('storage/' . $travelPackage->gallery->first()->image) }}" alt=""
                            class="islands__bg" />
                    @endif

                    <div class="islands__container container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle">Explore</h2>
                            <h1 class="islands__title">{{ $travelPackage->title }}</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="bg-white py-24 px-4 md:px-12 lg:px-24 xl:px-40 2xl:px-64">
        <div class="max-w-6xl mx-auto flex flex-wrap justify-between items-center">
            <div class="flex-1 w-full md:w-2/3 text-start">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">About The place</h1>
                <p class="mt-4 text-gray-600 text-base md:text-lg">{{ $travelPackage->about }}</p>
            </div>
        </div>
        <div class="max-w-6xl mx-auto py-8">
          <div class="w-full md:w-2/3">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">Travel Information</h1>
            <ul class="list-disc mt-4 ml-5 text-gray-600 text-base md:text-lg">
              <li>Destination: {{ $travelPackage->title }}</li>
              <li>Location: {{ $travelPackage->location }}</li>
              <li>Type Trip:{{ $travelPackage->type }}</li>
              <li>Duration: {{ $travelPackage->duration }}</li>
              <li>Price: {{ number_format($travelPackage->price, 0, ',', '.') }},00</li>
            </ul>
          </div>
          <div class="max-w-6xl mx-auto py-10 flex flex-wrap justify-between items-center">
              <div class="flex-1 w-full md:w-2/3 text-start">
                  <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">Booking Now</h1>
                  <form action="">
                    
                  </form>
              </div>
          </div>
        </div>
    </section>
@endsection
