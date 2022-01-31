@extends('layout.worklayout')
@section('tittle')
    Our works
@stop
@section('slide')
    <div class="container-fluid container-fluid-max">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                <h2 class="slide-item__title">Our works</h2>
                <p class="slide-item__desc">This is DevelopForMe's design and web development portfolio. We provide the expertise needed to launch, grow, and transform businesses of all shapes and sizes. Our solutions will help start-ups grow into medium-sized businesses, and medium-sized businesses - to become international.</p>
                <a href="contact-us" class="btn btn__primary btn__primary-style2 btn__hi mr-30" tabindex="0">
                    Hire us</a>



            </div>
        </div>
    </div>
@endsection
@section('work')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="{{asset("assets/images/kyr.png")}}" alt="">
                    <a href="https://kyrafrica.com" class="box-content">
                        <h4 class="title">Kyrafrica.com</h4>
                        <div class="description text-center"><button class="btn-sm btn__primary">view website</button></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="{{asset("assets/images/blend.png")}}" alt="">
                    <a href="https://blend.co.ke/" class="box-content">
                        <h4 class="title">blend.co.ke</h4>
                        <div class="description text-center"><button class="btn-sm btn__primary">view website</button></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="{{asset("assets/images/herman.png")}}" alt="">
                    <a href="https://hermann.co.ke/" class="box-content">
                        <h4 class="title">hermann.co.ke</h4>
                        <div class="description text-center"><button class="btn-sm btn__primary">view website</button></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="box">
                    <img src="{{asset("assets/images/soko.png")}}" alt="">
                    <a href="https://thesokostore.com/" class="box-content">
                        <h4 class="title">thesokostore.com/</h4>
                        <div class="description text-center"><button class="btn-sm btn__primary">view website</button></div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box">
                    <img src="{{asset("assets/images/tb.png")}}" alt="">
                    <a href="https://topbetips.co.ke/" class="box-content">
                        <h4 class="title">topbetips</h4>
                        <div class="description text-center"><button class="btn-sm btn__primary">view website</button></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
