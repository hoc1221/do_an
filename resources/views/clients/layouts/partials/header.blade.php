    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <p>Phone: +01 256 25 235</p>
                            <p>email: info@eiser.com</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="float-right">
                            <ul class="right_side">
                                <li>
                                    <a href="cart.html">
                                        gift card
                                    </a>
                                </li>
                                <li>
                                    <a href="tracking.html">
                                        track order
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="{{ asset('client/assets/img/logo.png') }}" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('client.home') }}">Trang chủ</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="{{ route('client.products') }}" class="nav-link">Nước hoa</a>
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            @foreach ($categories as $category_parent)
                                                @if (is_null($category_parent->parent_category_id))
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('client.products', ['category' => $category_parent->id]) }}">
                                                            {{ $category_parent->category_name }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="nav-item submenu dropdown">
                                        <a href="{{ route('client.brands')}}" class="nav-link">Thương hiệu</a>
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            @foreach ($brands as $brand)
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('client.products', ['brand' => $brand->id]) }}">
                                                        {{ $brand->name }}
                                                    </a>

                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Kiến thức</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="tracking.html">Tracking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-5 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">

                                    <li class="nav-item">
                                        <a href="{{ route('client.carts')}}" class="icons">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle icons" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-user" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('client.profiles')}}">Profile</a>
                                            <a class="dropdown-item" href="{{ route('password.change')}}">Password Change</a>
                                            <a class="dropdown-item text-danger"
                                                href="{{ route('logout') }}">Logout</a>
                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a href="#" class="icons">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
