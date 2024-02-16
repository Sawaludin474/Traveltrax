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
        <div class="max-w-6xl mx-auto py-8 grid grid-cols-2 gap">
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
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                            Booking now
                        </h2>
                        <form method="POST" action="#" id="bookingForm">
                            @csrf

                            {{-- Assuming transaction_id is passed as a hidden field or part of the session --}}
                            {{-- <input type="hidden" name="transaction_id" value="{{ $transactionId }}"> --}}

                            <div class="mb-4">
                                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                                <input type="text" name="username" id="username" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>

                            <div class="mb-4">
                                <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone
                                    Number</label>
                                <input type="number" name="phone_number" id="phone_number" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>

                            <div class="mb-4">
                                <label for="nationally"
                                    class="block text-gray-700 text-sm font-bold mb-2">Nationality</label>
                                <input type="text" name="nationally" id="nationally" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>

                            <div class="mb-4">
                                <label for="visa" class="block text-gray-700 text-sm font-bold mb-2">Visa Status (0 =
                                    No, 1 = Yes)</label>
                                <select name="visa" id="visa" required
                                    class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="doe_passport" class="block text-gray-700 text-sm font-bold mb-2">Passport Expiry
                                    Date</label>
                                <input type="date" name="doe_passport" id="doe_passport" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
