@extends('backend.master')
@section('title')
    Users
@endsection

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
                            <th scope="col">Action</th>
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
                                <td>
                                    <form action="{{ route('travelpackages.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('apakah anda yakin ingin menghapus,{{ $row->name }}?..')"
                                        method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-info" href="{{ route('travelpackages.edit', [$row->id]) }}"><i
                                                class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <a class="btn btn-warning" href="{{ route('travelpackages.show', [$row->id]) }}"><i
                                                class="fa fa-eye"></i></a>
                                    </form>
                                </td>
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
@endpush
