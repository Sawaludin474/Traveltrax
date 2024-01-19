@extends('backend.master') 
@section('content')

<h2 class="box-title" style="margin-bottom: 50px;">Travel Packages Table</h2>

<div class="card">
    <div class="card-body">

        <form class="row g-3" action="{{ route('travelpackages.update', [$travelPackage->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch') <!-- Use PUT method for updates -->
            <div class="col-md-12 mb-5">
                <label for="inputName5" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="inputName5" value="{{ old('title', $travelPackage->title) }}">
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Location</label>
                <textarea id="textarea" name="location" class="form-control" cols="30" rows="10">{{ old('location', $travelPackage->location) }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">About</label>
                <textarea name="about" id="textarea" class="form-control" cols="30" rows="10">{{ old('about', $travelPackage->about) }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Departure Date</label>
                <input type="date" name="departure_date" class="form-control" id="inputEmail5" value="{{ old('departure_date', $travelPackage->departure_date) }}">
            </div>
            <div class="col-md-6 mt-5">
                <label for="inputPassword5" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" id="inputPassword5" value="{{ old('duration', $travelPackage->duration) }}">
            </div>
            <div class="col-md-6 mt-5">
                <label for="inputPassword5" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="inputPassword5" value="{{ old('type', $travelPackage->type) }}">
            </div>
            <div class="col-md-6 mt-5">
                <label for="inputPassword5" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="inputPassword5" value="{{ old('price', $travelPackage->price) }}">
            </div>
            <div class="col-md-12 mt-5">
                <label for="inputImages" class="form-label">Images</label>
                <input type="file" name="images[]" class="form-control" id="inputImages" multiple>
            </div>
            <div class="text-center container " style="margin-top: 30px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
  </div>

</div>
@endsection