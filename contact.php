<?php

include_once('header.php');

?>

<main>
    <!--page-title-area start-->
    <section class="page-title-area d-flex align-items-end">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="page-title-wrapper mb-50">
                        <h1 class="page-title mb-25">Contact Us</h1>
                        <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home -</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--contact-us-area start-->
    <section class="contact-us-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-img mb-30">
                        <img class="img-fluid" src="assets/img/contact/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-wrapper pl-75 mb-30">
                        <div class="section-title mb-30">
                            <h2>Get In Touch With Us</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                        </div>
                        <div class="single-contact-box mb-30">
                            <div class="contact__iocn">
                                <img src="assets/img/icon/material-location-on.svg" alt="">
                            </div>
                            <div class="contact__text">
                                <h5>27/2b , street road -04 ,New York , USA</h5>
                            </div>
                        </div>
                        <div class="single-contact-box cb-2 mb-30">
                            <div class="contact__iocn">
                                <img src="assets/img/icon/phone-alt.svg" alt="">
                            </div>
                            <div class="contact__text">
                                <h5>+000 (125) 3654 34</h5>
                                <h5>+000 (125) 3654 34</h5>
                            </div>
                        </div>
                        <div class="single-contact-box cb-3 mb-30">
                            <div class="contact__iocn">
                                <img src="assets/img/icon/feather-mail.svg" alt="">
                            </div>
                            <div class="contact__text">
                                <h5>info@example.com</h5>
                                <h5>info2@example.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-us-area end-->
    <!--contact-map-area start-->
    <section class="contact-map-area">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-lg-12">
                    <div class="conatct-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10019.512355675912!2d90.3779420697561!3d23.95217349394493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1625130888507!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-map-area end-->
    <!--contact-form-area start-->
    <section class="contact-form-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form-wrapper mb-30">
                        <h2 class="mb-45">Contact Us</h2>
                        <form action="php-mailer.php" class="row gx-3 comments-form contact-form">
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Full Name" name="name">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Last Name" name="email">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Phone Number" name="text">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Address">
                            </div>
                            <div class="col-lg-12 mb-30">
                                <input type="text" placeholder="Email Name">
                            </div>
                            <div class="col-lg-12 mb-30">
                                <textarea name="commnent" id="commnent" cols="30" rows="10" placeholder="Write a Message"></textarea>
                            </div>
                        </form>
                        <button class="theme_btn message_btn mt-20">Send Message</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-img contact-img-02 mb-30">
                        <img class="img-fluid" src="assets/img/contact/02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-form-area end-->
    <!-- subscribe-area start -->
    <section class="subscribe-area footer-bg border-bot pt-145 pb-50 pt-md-90 pt-xs-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="subscribe-wrapper text-center mb-30">
                        <h2>Subscribe our Newsletter & Get every updates.</h2>
                        <div class="subscribe-form-box pos-rel">
                            <form class="subscribe-form">
                                <input type="text" placeholder="Write Your E-mail">
                            </form>
                            <button class="sub_btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-area end -->
</main>

<?php

include_once('footer.php');

?>