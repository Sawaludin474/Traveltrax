<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route("home") }}" class="logo d-flex align-items-center">
        <img src="{{ asset("/squadfree/assets/img/logo1.png") }}" alt="">
        <span class="d-none d-lg-block">TravelTrax</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="{{ url("#") }}">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ url("#") }}" data-bs-toggle="dropdown">
            <img src="{{ asset("/backend/assets/img/profile-img.jpg") }}" class="rounded-circle">
            @if (Auth::guard('web')->check())
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->username }}</span>
            @elseif (Auth::guard('admin')->check())
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::guard('admin')->user()->name }}</span>
           @endif
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                @if (Auth::guard('web')->check())
                <h6>{{ Auth::user()->name }}</h6>
                @elseif (Auth::guard('admin')->check())
                <h6>{{ Auth::guard('admin')->user()->name }}</h6>
                @endif
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url("users-profile.html") }}">
                <i class="bi bi-gear"></i>@if (Auth::guard('web')->check())
                <span>{{ Auth::user()->email }}</span>
                @elseif (Auth::guard('admin')->check())
                <span>{{ Auth::guard('admin')->user()->email }}</span>
                @endif
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <form action="{{ Auth::guard('admin')->check() ? route('admin.logout') : route('logout') }}" method="post">
                @csrf
                <button class="dropdown-item d-flex align-items-center" type="submit">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </button>
            </form>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>