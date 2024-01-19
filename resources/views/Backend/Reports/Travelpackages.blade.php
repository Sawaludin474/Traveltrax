{{-- @extends('backend.master')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Hover Export Data Table</h3>
            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Duration</th>
                            <th scope="col">type</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travelPackages as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->location }}</td>
                                <td>{{ $row->departure_date }}</td>
                                <td>{{ $row->duration }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->price }}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@push('scripts')
<script>
        $(document).ready(function () {
        var table = $('#datatable').DataTable({
            dom: 'Bfltp',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endpush --}}
