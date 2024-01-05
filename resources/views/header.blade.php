<header class="header" id="header">
    <nav class="nav container">
        <a href="{{ route('home') }}" class="nav__logo"><i class='bx bx-paper-plane' ></i>TravelTrax</a>
        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{ route('home') }}" class="nav__link">
                        <i class="bx bx-home-alt"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('detail') }}" class="nav__link">
                        <i class="bx bx-building-house"></i>
                        <span>Package Travel</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ url('blog.html') }}" class="nav__link">
                        <i class="bx bx-award"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ url('blog.html') }}" class="nav__link">
                        <i class="bx bx-award"></i>
                        <span>gallery</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ url('contact.html') }}" class="nav__link">
                        <i class="bx bx-phone"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- theme -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <a href="{{ route('login') }}" class="button nav__button">Log In</a>
    </nav>
</header>