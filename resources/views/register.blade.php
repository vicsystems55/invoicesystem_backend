@extends('layouts.app')
@section('content')
<!-- Contact Banner Section -->
<section class="contact-banner-section bg-dark">
    <div class="big-letter text-white">Get Started</div>

</section>
<!-- End Page Title / Style Three -->

<!-- Map Section -->

<!-- End Map Section -->

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">

            <h2><span>Get Started</span> <br></h2>
        </div>

        <div class="inner-container">

            <!-- Contact Form -->
            <div class="contact-form">

                <!-- Contact Form -->
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Store Name" class="shadow" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="file" name="email" placeholder="Store Logo" required>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Store Description" class="shadow" required>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Store Address" class="shadow" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Contact Phone Number" class="shadow" required>
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <button class="theme-btn btn-style-two"><span class="txt">Submit <i class="fa fa-angle-right"></i></span></button>
                        </div>

                    </div>
                </form>

            </div>
            <!--End Comment Form -->

        </div>
    </div>
</section>
<!-- End Contact Form Section -->

@endsection
