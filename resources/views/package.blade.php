@extends('welcome')
@section('content')


<section class="section" id="popular">
  <div class="container ">
    <span class="section__subtitle" style="text-align: center"
      >Related Package Travel</span
    >
    <h2 class="section__title" style="text-align: center">
      The Best Tour
    </h2>

    <div class="popular__all">
      @foreach ($travelPackages as $item)
      <article class="popular__card" onclick="selectPackage('{{ $item->id }}')">
        <a href="{{ route('detail', $item->id)}}">
          @if($item->gallery->isNotEmpty()) 
            <img
            src="{{ asset('storage/' . $item->gallery->first()->image) }}"
            alt=""
            class="popular__img"
            />
      @endif
          <div class="popular__data">
            <h2 class="popular__price"><span>Rp. {{ number_format($item->price, 0, ',', '.') }},00</span></h2>
            <h3 class="popular__title">{{$item->location}}</h3>
            <p class="popular__description"></p>
          </div>
        </a>
      </article>
      @endforeach
    </div>
  </div>
</section>
@endsection

@push('script')
<script>
  function selectPackage(packageId) {
      document.getElementById('travel_package_id').value = packageId;
      // Optional: Scroll to the form or highlight it
      document.getElementById('bookingForm').scrollIntoView();
  }
  </script>
  
@endpush