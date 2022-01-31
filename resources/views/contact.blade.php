@extends('layout.contact')
@section('tittle')
    Contact us
@stop
@section('slide')


    <div class="container-fluid container-fluid-max">
        <div class="row">
            <div class="col-md-8 col-lg-12 col-xl-5">

                <h2 class="slide-item__title">
                    Contact Info:
                </h2>
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i> <a href="mailto:letstalk@developforme.co.ke">letstalk@developforme.co.ke</a>
                    </li>
                    <li>
                        <i class="fab fa-linkedin"></i> <a target="_blank" href="https://www.linkedin.com/company/developforme"> DevelopForMe</a>
                                            </li>
                        <li>
                            <i class="fab fa-twitter-square"></i> <a target="_blank" href="https://twitter.com/devfme">Devfme</a>
                        </li>

                    </ul>
                </div>
            </div>



            </div>
        </div>
    </div>

@endsection
@section('form')


        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-center">

                        <form class="contact-panel__form" action="" method="post" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                </div> <!-- /.col-lg-12 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                                               required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-email">Email (required)</label>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                               name="contact-email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-Phone">Inquiry (required)</label>
                                        <select class="form-control">
                                            <option value="Software Development">Software Development</option>
                                            <option value="App Development">App Development</option>
                                            <option value="Website Development">Website Development</option>
                                            <option value="IT Consultancy">IT Consultancy</option>
                                            <option value="Computer Repair">Computer Repair</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                            <option value="Corporate Branding">Corporate Branding</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-Phone">Phone (Optional)</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                               name="contact-phone">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Additional Details (optional)</label>
                                        <textarea class="form-control" placeholder="Describe your inquiry!" id="contact-message"
                                                  name="contact-message"></textarea>
                                    </div>
                                    <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                                        <input type="checkbox" class="custom-control-input" id="terms">
                                        <label class="custom-control-label" for="terms">I accept the privacy and terms.</label>
                                    </div>
                                    <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit Request </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-xl-6 -->



            </div><!-- /.row -->


@endsection
