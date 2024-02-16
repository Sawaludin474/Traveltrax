<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('home') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/squadfree/assets/img/logo1.png') }}" width="50" alt="">
                        <h3><b>TravelTrax</b> @admin Admin @endadmin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ route('dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="header nav-small-cap">Admin</li>
            @admin
            <li class="treeview">
                <a href="{{ url('#') }}">
                    <i data-feather="grid"></i>
                    <span>Menu Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('travelpackages.index') }}"><i class="ti-car"> Paket Travel</i></a></li>
                    <li><a href="{{ route('transactions.index') }}"><i class="ti-file"> Transaksi</i></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('#') }}">
                    <i data-feather="grid"></i>
                    <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="ti-car"> Users</i></a></li>
                    {{-- <li><a href="{{ route('reportspackages') }}"><i class="ti-car"> Paket Travel</i></a></li> --}}
                </ul>
            </li>
            @endadmin
        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="{{ url('javascript:void(0)') }}" class="link" data-toggle="tooltip" title=""
            data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="{{ url('mailbox_inbox.html') }}" class="link" data-toggle="tooltip" title=""
            data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <form method="POST" class="link" data-toggle="tooltip" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</aside>
  </aside>