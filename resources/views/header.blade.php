<header class="header" id="header">
        <nav class="bg-slate-500 p-4">
            <div class="container mx-auto flex items-center justify-between">
              <!-- Brand/Logo -->
              <a href="#" class="text-white text-lg font-semibold"><img src="{{asset('/squadfree/assets/img/logo.png')}}" width="150" alt=""></a>
              <!-- Navigation Links -->
              <div class="space-x-4">
                <a href="{{ route('home')}}" class="text-white hover:text-gray-300 nav-link" id="home">Home</a>
                <a href="{{ route('package')}}" class="text-white hover:text-gray-300" id="popular">Paket Travel</a>
                <a href="{{ route('gallery')}}" class="text-white hover:text-gray-300" id="gallery">Gallery</a>
        
                <!-- Dropdown Menu -->
                <div class="group relative inline-block text-white">
                    
                    @if (Auth::guard('web')->check())
                    <!-- Jika sudah login, tampilkan nama pengguna -->
                        <a href="{{ route('dashboard')}}" class="text-white focus:outline-none">{{ Auth::user()->username }}</a>
                        @elseif (Auth::guard('admin')->check())
                        <a href="{{ route('admin.dashboard')}}" class="text-white focus:outline-none">{{ Auth::guard('admin')->user()->name }}</a>
                    @else
                    <!-- Jika belum login, tampilkan button login -->
                        <button class="hover:text-gray-300 focus:outline-none" id="loginButton">Login</button>
                        <ul class="absolute hidden bg-slate-200 text-gray-700 pt-2 group-hover:block rounded-md" id="loginDropdown">
                            <li><a href="{{ route('login')}}" class="block px-4 py-2 hover:bg-gray-300" id="login">Login</a></li>
                            <li><a href="{{ route('register')}}" class="block px-4 py-2 hover:bg-gray-300" id="register">Register</a></li>
                        </ul>
                    @endif
                </div>
              </div>
            </div>
          </nav>
</header>