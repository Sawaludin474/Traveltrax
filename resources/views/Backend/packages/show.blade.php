@extends('backend.master')
@section('content')
<h1 class="box-title" style="margin-bottom: 50px;">Travel Packages Table</h1>

<div class="card">
    <div class="card-body">
        <a href="{{ route('travelpackages.index') }}" class="btn btn-primary" style="margin-bottom: 30px"><i class="fa fa-arrow-left"> Back</i></a>
        <!-- Default Table -->
        <table class="table">
            <tbody>
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td>{{ $travelPackages->title }}</td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>:</td>
                    <td>{{ $travelPackages->about }}</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>:</td>
                    <td>{{ $travelPackages->location }}</td>
                </tr>
                <tr>
                    <td>Departure Date</td>
                    <td>:</td>
                    <td>{{ $travelPackages->departure_date }}</td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td>:</td>
                    <td>{{ $travelPackages->duration }}</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>:</td>
                    <td>Rp. {{ $travelPackages->price }}</td>
                </tr>

                <tr>
                    <td>Created_at</td>
                    <td>:</td>
                    <td>{{ $travelPackages->created_at }}</td>
                </tr>
                <tr>
                    <td>Updated At</td>
                    <td>:</td>
                    <td>{{ $travelPackages->updated_at }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            
            <div class="box-body container">
                <h3>Images</h3>
                <div id="gallery-content">
                        @foreach ($travelPackages->gallery as $item)
                            <img src="{{ asset('storage/' . $item->image) }}" width="150" alt="image">
                        @endforeach
                </div>
            </div>
        <!-- End Default Table Example -->
    </div>
</div>
@endsection