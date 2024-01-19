<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/backend/images/favicon.ico') }}">

    <title>TravelTrax - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('/backend/main-dark/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('/backend/main-dark/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/backend/main-dark/css/skin_color.css') }}">
    
<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.11.5/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/sl-1.3.3/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.11.5/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/sl-1.3.3/datatables.min.js"></script>
<!-- DataTables Buttons CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.print.min.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        @include('backend.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('backend.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <section class="content">

                    @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-ban"></i> Alert!</h4>
						<strong>{{ session::get('error')}}</strong>
					  </div>
                    @endif

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
                </section>
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('backend.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                        class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="{{ url('#control-sidebar-home-tab') }}" data-toggle="tab"
                        class="active">Chat</a></li>
                <li class="nav-item"><a href="{{ url('#control-sidebar-settings-tab') }}"
                        data-toggle="tab">Todo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="{{ url('javascript:void(0)') }}" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Users</p>
                        <a href="{{ url('javascript:void(0)') }}" class="text-right text-grey"><i
                                class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/1.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/2.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/3.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/4.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/1.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/2.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/3.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="{{ url('#') }}">
                                <img src="{{ asset('/backend/images/avatar/4.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="{{ url('#') }}"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <div class="flexbox">
                        <a href="{{ url('javascript:void(0)') }}" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Todo List</p>
                        <a href="{{ url('javascript:void(0)') }}" class="text-right text-grey"><i
                                class="ti-plus"></i></a>
                    </div>
                    <ul class="todo-list mt-20">
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                            <span class="text-line">Maecenas scelerisque</span>
                            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                            <span class="text-line">Vivamus nec orci</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('/backend/main-dark/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('/backend/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('/backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

    <!-- Sunny Admin App -->
    <script src="{{ asset('/backend/main-dark/js/template.js') }}"></script>
    <script src="{{ asset('/backend/main-dark/js/pages/dashboard.js') }}"></script>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    
    
    
@stack('scripts')
</body>

</html>
