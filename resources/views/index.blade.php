@extends('layout.layout')
@section('tittle')
    Developforme
@stop
@section('slide')


        <div class="container-fluid container-fluid-max">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                    <h2 class="slide-item__title">Why <br> DevelopForMe?</h2>
                    <p class="slide-item__desc">We are experienced professionals who understand that IT services is
                        changing, and are true partners who care about your success. Our team provides a consultative approach on
                        emerging technology.</p>


                    <div class="dropdown">
                        <button class="btn btn__primary btn__primary-style2 btn__hi mr-30 dropdown-toggle" tabindex="0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Find your solution
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="web-development">Web Development</a>
                            <a class="dropdown-item" href="mobile-app-development">Mobile App Development</a>
                            <a class="dropdown-item" href="design">Design</a>
                            <a class="dropdown-item" href="outsource">Outsourcing</a>
                        </div>
                    </div>



                </div>
            </div>
        </div>

@endsection

@section('about')
    <div class="container">
        <div class="row heading-layout2">
            <div class="col-12">
                <h2 class="heading__subtitle color-body">About us</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <h4 class="heading__title mb-30">As a tech company, we continue to strive for new, simpler ways to help companies, Startups grow.
                                  </h4>
            </div><!-- /.col-xl-5 -->
            <div id="abt" class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
                <div class="about__Text">
                    <p>As a tech company, we continue to strive for new, simpler ways to help companies grow. Today, we spare no effort to extend our knowledge-base and improve the level of expertise we provide to our clients.</p>
                </div>
                <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40 mb-30">
                    <li>Improve Digital Presence</li>
                    <li>Simplify Communication</li>
                    <li>Drive Business Process</li>
                    <li>Speed Up Transactions</li>
                    <li>Structure Data & Doc</li>
                    <li>Automate Workflows</li>
                </ul>
            </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection

@section('service')
    <div class="container">
        <h1 class="work-title text-center">Our services</h1>
        <div class="row" >
            <!-- service item #1 -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="service-item">
                    <div class="service-item__content">
                        <div class="service-item__icon">
                            <i class="icon-programming"></i>
                        </div><!-- /.service-item__icon -->
                        <h4 class="service-item__title">Web Design <br>&<br>  Development</h4>
                        <p class="service-item__desc">We specialize in creating high-end, aesthetically functional web solutions, focussed on diverse client requirements, for robust user experience.</p>

                    </div><!-- /.service-content -->

                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-item__content">
                        <div class="service-item__icon">
                            <i class="icon-technician"></i>
                        </div><!-- /.service-item__icon -->
                        <h4 class="service-item__title">IT Consulting <br> Services</h4>
                        <p class="service-item__desc">Trying to solve all your IT challenges internally can become costly and a
                            major distraction, Leveraging knowledgeable IT consulting firms like us helps your business remain
                            secure.</p>

                    </div><!-- /.service-content -->

                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-item__content">
                        <div class="service-item__icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div><!-- /.service-item__icon -->
                        <h4 class="service-item__title">Mobile App<br> Development</h4>
                        <p class="service-item__desc">Mobile app development services cover end-to-end development of mobile apps, from business analysis and UI/UX design to mobile application testing and deployment or online market publication.</p>

                    </div><!-- /.service-content -->

                </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
        </div>
        <div class="text-center">
            <div class="dropdown">
                <button class="btn btn-info btn__hi mr-30 dropdown-toggle" tabindex="0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All services
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="web-development">Web Development</a>
                    <a class="dropdown-item" href="mobile-app-development">Mobile App Development</a>
                    <a class="dropdown-item" href="design">Design</a>
                    <a class="dropdown-item" href="outsource">Outsourcing</a>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
@endsection
@section('testimonials')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                <div class="about__img">
                    <img src="https://images.pexels.com/photos/1569076/pexels-photo-1569076.jpeg?cs=srgb&dl=pexels-mentatdgt-1569076.jpg&fm=jpg" alt="about">
                    <div class="cta-banner">
                        <h4 class="cta-banner__title mb-30">Thinking insights, verified driven research, and metrics data help
                            you make the right decisions!
                        </h4>
                        <a href="" class="btn btn__primary btn__link">
                            <span>Read Case Studies</span><i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.cta-banner -->
                </div><!-- /.about-img -->
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="heading-layout2 mb-30">
                    <h2 class="heading__subtitle">True tech partners who care about your future business success</h2>
                    <h3 class="heading__title mb-30">Help Your Company <span class="underlined-text">Win!!</span>
                    </h3>
                </div><!-- /heading -->
                <div class="about__Text">
                    <p>As a value driven organization, we carry a purpose to empower businesses through process improvement and simplification by implementation of technology. </p>
                    <p>We provide a one-stop Information Technology Infrastructure Management Solution.</p>
                    <ul class="list-items list-unstyled mb-0">
                        <li>Delivered in more than 100 client’s interactions </li>
                        <li>Provided by experts to help challenge critical activities</li>
                        <li>Complemented with peer perspectives and advice</li>
                    </ul>
                </div>
            </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection
@section('portofolio')
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="work-title">Our Works</h1>


                <div class="text-center">
                    <button class="btn btn-default filter-button active" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="webapp">Website/Web Apps</button>
                    <button class="btn btn-default filter-button" data-filter="app">Mobile Apps</button>
                    <button class="btn btn-default filter-button" data-filter="logo">Brand Logo & Designs</button>

                </div>
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webapp">
                    <img src="{{asset('assets/images/kyr.png')}}" class="img-responsive">
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webapp">
                    <img src="{{asset('assets/images/blend.png')}}" class="img-responsive">
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webapp">
                    <img src="{{asset('assets/images/tb.png')}}" class="img-responsive">
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter app">
                    <img src="{{asset('assets/images/rb.png')}}" class="img-responsive">
                </div>

                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webapp">
                    <img src="{{asset('assets/images/soko.png')}}" class="img-responsive">
                </div>



                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo">
                    <img src="{{asset('assets/images/menu1.jpg')}}" width="370px" height="209" class="img-responsive">
                </div>

                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo">
                    <img src="{{asset('assets/images/balle2.jpg')}}" width="370px" height="209" class="img-responsive">
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webapp">
                    <img src="{{asset('assets/images/herman.png')}}" class="img-responsive">
                </div>

                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo">
                    <img src="{{asset('assets/images/balle1.jpg')}}" width="370px" height="209"  class="img-responsive">
                </div>
                <div class="work_project col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo">
                    <img src="{{asset('assets/images/balle3.jpg')}}" width="370px" height="209" class="img-responsive">
                </div>

            </div>
        </div>
        <div class="text-center">
        <a href="" class="btn btn__primary btn__link">
            <span>View All Projects</span><i class="icon-arrow-right icon-outlined"></i>
        </a>
        </div>
    </div>
@endsection

@section('clients')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slick-carousel"
                     data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                   <div class="client">
                      <img src="https://thesokostore.com/wp-content/uploads/2021/08/ooiiAsset-4-1.png" alt="client">
                    <img src="https://thesokostore.com/wp-content/uploads/2021/08/ooiiAsset-4-1.png" alt="client">
                    </div>
                    <!-- /.client -->
                    <div class="client">
                        <img src="assets/images/logo/blend.png" alt="client">
                        <img src="assets/images/logo/blend.png" alt="client">
                    </div><!-- /.client -->
                    <div class="client">
                        <img src="assets/images/logo/hermann.png" alt="client">
                        <img src="assets/images/logo/hermann.png" alt="client">
                    </div><!-- /.client -->

                    <div class="client">
                        <img src="https://kyrafrica.com/images/logo.png" style="background-color:#0b0b0b" alt="client">
                        <img src="https://kyrafrica.com/images/logo.png" style="background-color:#0b0b0b" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection


