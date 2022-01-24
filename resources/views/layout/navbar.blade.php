<header class="header header-transparent">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
            <button type="button" class="action__btn action__btn-burgerMenu mr-30 d-none d-lg-block">
                <i class="icon-nav"></i>
            </button>
            <a class="navbar-brand" href="">
                <img src="{{asset('assets/images/logo/logo-light.png')}}" class="logo-light" alt="logo" height="35px">
                <img src="{{asset('assets/images/logo/logo-dark.png')}}" class="logo-dark" alt="logo" height="35px">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav__item">
                        <a href="/" data-toggle="" class="nav__item-link {{ request()->is('/') ? 'active' : ''}}">Home</a>
                    </li><!-- /.nav-item -->

                                     <li class="nav__item  has-dropdown">
                        <a   class="nav__item-link {{ request()->is('services') ? 'active' : ''}}">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="web-development">Web Development</a>
                            <a class="dropdown-item" href="mobile-app-development">Mobile App Development</a>
                            <a class="dropdown-item" href="design">Design</a>
                            <a class="dropdown-item" href="outsource">Outsourcing</a>
                        </div>
                    </li><!-- /.nav-item -->
                <!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="" class="nav__item-link {{ request()->is('ourworks') ? 'active' : ''}}">Our works</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                    <a href="" class="nav__item-link {{ request()->is('contact-us') ? 'active' : ''}}">Contact us</a>
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
                <li class="d-none d-xl-block">
                    <a href="" class="btn btn__primary btn__primary-style2 btn_ action__btn-contact">Lets talk</a>
                </li>
            </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
