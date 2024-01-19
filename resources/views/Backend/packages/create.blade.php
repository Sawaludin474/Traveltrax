@extends('backend.master') 
@section('content')

<h2 class="box-title" style="margin-bottom: 50px;">Travel Packages Table</h2>

<div class="card">
    <div class="card-body">
      
      <!-- Multi Columns Form -->
      <form class="row g-3" action="{{ route('travelpackages.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 mb-5">
            <label for="inputName5" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputName5">
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Location</label>
            <textarea id="textarea" name="location" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">About</label>
            <textarea name="about" id="textarea" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Departure Date</label>
            <input type="date" name="departure_date" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6 mt-5">
            <label for="inputPassword5" class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" id="inputPassword5">
          </div>
          <div class="col-md-6 mt-5">
            <label for="inputPassword5" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="inputPassword5">
          </div>
          <div class="col-md-6 mt-5">
            <label for="inputPassword5" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="inputPassword5">
          </div>
          <div class="mb-3 col-md-12">
            <label for="images" class="form-label">Images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
        </div>
        <div class="text-center container " style="margin-top: 30px">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>

</div>
@endsection