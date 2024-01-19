@extends('backend.master')
@section('title')
    Users
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="box-header">
                <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </div>
            </div>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration + $users->perpage() * ($users->currentpage() - 1) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('users.destroy', [$user->id]) }}"
                                    onsubmit="return confirm('apakah anda yakin ingin menghapus,{{ $user->name }}?..')"
                                    method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-info" href="{{ route('users.edit', [$user->id]) }}"><i
                                            class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    <a class="btn btn-warning" href="{{ route('users.show', [$user->id]) }}"><i
                                            class="fa fa-eye"></i></a>
                                </form>
                            </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
