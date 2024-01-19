@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-primary-light rounded w-60 h-60">
                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Users</p>
                        <h3 class="text-white mb-0 font-weight-500"></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-warning-light rounded w-60 h-60">
                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Paket Travel</p>
                        <h3 class="text-white mb-0 font-weight-500"> <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-info-light rounded w-60 h-60">
                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
                        <h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i
                                    class="fa fa-caret-down"></i> -0.5%</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-danger-light rounded w-60 h-60">
                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i
                                    class="fa fa-caret-up"></i> -1.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-success-light rounded w-60 h-60">
                        <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +0.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-light rounded w-60 h-60">
                        <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                        <h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="card">
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
    </div> --}}
@endsection
