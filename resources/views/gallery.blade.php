@extends('welcome')
@section('content')


    <section class="section">
        <div class="container ">
            <span class="section__subtitle pt-6" style="text-align: center">Best Choice</span>
            <h2 class="section__title " style="text-align: center">
                Popular Places
            </h2>
            <div class="grid grid-cols-4 gap-4 pb-20">
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="glightbox"> 
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
                <a href="{{ asset('/frontend/./assets/img/palawan.jpg') }}">
                    <img src="{{ asset('/frontend/./assets/img/palawan.jpg') }}" class="w-full h-full object-cover transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 rounded-lg" alt=""/>
                </a>
            </div>
        </div>
    </section>
@endsection
