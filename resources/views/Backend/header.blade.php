  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
        <!-- Sidebar toggle button-->
        <div>
            <ul class="nav">
                <li class="btn-group nav-item">
                    <a href="{{ url('#') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon"
                        data-toggle="push-menu" role="button">
                        <i class="nav-link-icon mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="{{ url('#') }}" data-provide="fullscreen"
                        class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
                        <i class="nav-link-icon mdi mdi-crop-free"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- full Screen -->
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="{{ url('#') }}" class="waves-effect waves-light rounded dropdown-toggle p-0"
                        data-toggle="dropdown" title="User">
                        @if (Auth::guard('web')->check())
                        <img src="{{ asset('/backend/images/avatar/avatar-15.png') }}" alt="">
                        @elseif (Auth::guard('admin')->check())
                        <img src="{{ asset('/backend/images/avatar/avatar-13.png') }}" alt="">
                        @endif
                    </a>
                    
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                          @if (Auth::guard('web')->check())
                            <a class="dropdown-item" href="{{ url('#') }}"><i
                                    class="ti-user text-muted mr-2"></i>{{ auth()->user()->name}}</a>
                            <a class="dropdown-item" href="{{ url('#') }}"><i
                                    class="ti-email text-muted mr-2"></i> {{ auth()->user()->email}}</a>
                            @elseif (Auth::guard('admin')->check())
                            <a class="dropdown-item" href="{{ url('#') }}"><i
                              class="ti-user text-muted mr-2"></i>{{ auth()->guard('admin')->user()->name}}</a>
                              <a class="dropdown-item" href="{{ url('#') }}"><i
                              class="ti-email text-muted mr-2"></i> {{ auth()->guard('admin')->user()->email}}</a>
                            @endif
                            <div class="dropdown-divider">
                            </div>

                            <form action="{{ Auth::guard('admin')->check() ? route('admin.logout') : route('logout') }}" method="post">
                              @csrf
                              <button class="dropdown-item" type="submit">
                                  <i class="ti-shift-left text-muted mr-2"></i>
                                  <span>Sign Out</span>
                              </button>
                          </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>