<?php
include 'header.php';
?>

<section class="hero-wrap js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">


        <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Liftly Foundation</h2>
                            <h1 class="mb-3">Inspiring people to lift others' lives</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="volunteer.php"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Become A Volunteer</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(images/bg.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Liftly Foundation</h2>
                            <h1 class="mb-3">Inspiring people to lift others' lives</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="volunteer.php"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Become A Volunteer</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Liftly Foundation</h2>
                            <h1 class="mb-3">Inspiring people to lift others' lives</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="volunteer.php"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Become A Volunteer</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-md-last d-flex align-items-stretch">
                <div class="donation-wrap">
                    <div class="total-donate d-flex align-items-center">
                        <span class="fa flaticon-cleaning"></span>
                        <h4>Donation Campaign <br>are running</h4>
                        <p class="d-flex align-items-center">
                            <span class="number" data-number="244000">0</span>
                            <span>/-</span>
                        </p>
                    </div>
                    <form action="save_payment.php" method="POST" class="appointment">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-user"></span></div>
                                        <input type="text" name="full_name" class="form-control" placeholder=""
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Email Address</label>
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-paper-plane"></span></div>
                                        <input type="email" name="email" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Amount</label>
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-money"></span></div>
                                        <input type="text" class="form-control" name="amount" placeholder="1500/-"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Payment QR</label>

                                </div>
                                <div class="d-lg-flex">
                                    <img src="images/qr.jpg" height="200" width="200"
                                        style="padding-bottom:25px; margin-left:75px">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Transaction ID:</label>
                                    <div class="input-wrap">
                                        <input type="text" class="form-control" name=" transaction_id" placeholder=""
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Donate Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7 wrap-about py-5">
                <div class="heading-section pr-md-5 pt-md-5">
                    <span class="subheading">What is Liftly Foundation ?</span>

                    <p>Liftly Foundation is a National Level Non-Profit OrganizationFounded in 2019 managed by dedicated
                        team of professional Social workers.</p>

                    <p>Liftly Foundation is also Mother Ngo it is a resource center for exclusively for NGOs and Donors
                        engaged in to Social Work in India</p>

                    <p>Liftly Foundation is also serving the socially disadvantaged tribal and rural people living in
                        selected districts of Andrapradesh, Telangana,Tamilnadu, Kerala, Orissa, Gujarat and Punjab. The
                        National office of Xyz Foundation in Hyderabad.</p>
                    <h2 class="mb-4">We are here to help everyone in need</h2>

                </div>
                <div class="row my-md-5">
                    <div class="col-md-6 d-flex counter-wrap">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-volunteer"></span>
                            </div>
                            <div class="desc">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                </div>
                                <div class="text">
                                    <span>Volunteers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex counter-wrap">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-piggy-bank"></span>
                            </div>
                            <div class="desc">
                                <div class="text">
                                    <strong class="number" data-number="24400">0</strong>
                                </div>
                                <div class="text">
                                    <span>Trusted Funds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p><a href="volunteer.php" class="btn btn-secondary btn-outline-secondary">Become A Volunteer</a></p>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-secondary">
                        <h3><b>Become a <br>Volunteer</b></h3>

                    </div>
                    <div class="img border-2" style="background-image: url(images/services-1.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-volunteer"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-tertiary">
                        <h3><b>Quick <br>Fundraising</b></h3>

                    </div>
                    <div class="img border-3" style="background-image: url(images/services-2.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-piggy-bank"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-primary">
                        <h3><b>Start <br>Donating</b></h3>

                    </div>
                    <div class="img border-1" style="background-image: url(images/services-3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-donation"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-quarternary">
                        <h3><b>Get <br>Involved</b></h3>

                    </div>
                    <div class="img border-4" style="background-image: url(images/services-4.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ecological"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Causes</span>
                <h2>Donate to charity causes around the world</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(images/causes1.jpeg);"></a>
                    <div class="text p-3">
                        <h2><a href="#">Cancer Patients</a></h2>
                        <p>Give Hope : Your support saves lives</p>
                        <div class="goal mb-4">
                            <p><span>₹3,800</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:70%; height:20px">70%</div>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(images/causes2.jpg);"></a>
                    <div class="text p-3">
                        <h2><a href="#">Pregnant Women</a></h2>
                        <p>Nurture life : Empower Mothers'</p>
                        <div class="goal mb-4">
                            <p><span>₹3,800</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:82%; height:20px">82%</div>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(images/causes3.cms);"></a>
                    <div class="text p-3">
                        <h2><a href="#">Differently-abled</a></h2>
                        <p>Empower abilities : Break barriers</p>
                        <div class="goal mb-4">
                            <p><span>$3,800</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:95%; height:20px">95%</div>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(images/causes4.jpg);"></a>
                    <div class="text p-3">
                        <h2><a href="#">Children Education</a></h2>
                        <p>Build bright future : Educate a Child</p>
                        <div class="goal mb-4">
                            <p><span>₹3,800</span> to go</p>
                            <div class="progress" style="height:20px">
                                <div class="progress-bar progress-bar-striped" style="width:75%; height:20px">75%</div>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section testimony-section" style="padding-top:10px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimony</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person1.webp)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <p class="name">Mukesh Ambani</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person2.jpeg)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <p class="name">Sonu sood</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person3.webp)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <p class="name">Vijay Thalapathi</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person4.jpeg)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <p class="name">Ratan Tata</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person5.jpg)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                                <p class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <p class="name">Rajinikanth</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Volunteer</span>
                <h2>Our Expert Volunteer</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="volunteer">
                    <div class="img" style="background-image: url(images/team1.jpg);"></div>
                    <div class="text text-1">
                        <h3>Praharsha</h3>
                        <span>Volunteer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="volunteer">
                    <div class="img" style="background-image: url(images/team2.jpg);"></div>
                    <div class="text text-2">
                        <h3>Tejaswi</h3>
                        <span>Volunteer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="volunteer">
                    <div class="img" style="background-image: url(images/team34.png);"></div>
                    <div class="text text-3">
                        <h3>Poonam</h3>
                        <span>Volunteer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="volunteer">
                    <div class="img" style="background-image: url(images/team4.jpg);"></div>
                    <div class="text text-4">
                        <h3>Rajitha</h3>
                        <span>Volunteer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>