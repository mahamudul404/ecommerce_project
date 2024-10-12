<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
            <span>
                Giftos
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                {{-- if admin is login then show dashboard link  --}}
                @if (Auth::check() && Auth::user()->usertype == 'admin')
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard <span
                                class="sr-only">(current)</span></a>
                    </li>
                @endif
                {{-- control active navbar link --}}

                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is ('shop') ? 'active' : ''}}">
                    <a class="nav-link" href=" {{ url('shop') }} ">
                        Shop
                    </a>
                </li>
                <li class="nav-item {{ Request::is ('why') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('why') }}">
                        Why Us
                    </a>
                </li>
                <li class="nav-item {{ Request::is ('testimonial') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('testimonial') }}">
                        Testimonial
                    </a>
                </li>
                <li class="nav-item {{ Request::is ('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                </li>
            </ul>
            <div class="user_option">

                @if (Route::has('login'))
                    @auth

                        <a href=" {{ url('my_order') }} ">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            My Order
                        </a>

                        <a href=" {{ url('my_cart') }} ">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            [{{ $count }}]

                        </a>


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input class="btn btn-sm" type="submit" value="Logout">
                        </form>
                    @else
                        <a href=" {{ url('/login') }} ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>

                        <a href=" {{ url('/register') }} ">
                            <i class="fa fa-vcard" aria-hidden="true"></i>
                            <span>
                                Register
                            </span>
                        </a>


                    @endauth
                @endif




            </div>
        </div>
    </nav>
</header>
