<?php
include 'header.php';
?>

<section class="hero-wrap hero-wrap-2"
    style="background-image: url('images/bg_2.jpg'); background-size: cover; background-position: center;"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html" style="color: black;">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span style="color: black;">Donate <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread" style="color: white;">Donation Form</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row">

                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4" style="color: black;">Donate Now</h3>
                                <form method="POST" id="donationForm" name="donationForm" class="donationForm">
                                    <h5 style="color: black;">Select Your Citizenship</h5>
                                    <div class="form-group">
                                        <label style="color: black;">
                                            <input type="radio" name="citizenship" value="Indian Citizen" checked>
                                            Indian Citizen
                                        </label>
                                        <label style="color: black;">
                                            <input type="radio" name="citizenship" value="Foreign National"> Foreign
                                            National
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title" style="color: black;">Title</label>
                                                <select name="title" class="form-control">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Mrs">Mrs</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fullName" style="color: black;">Full Name*</label>
                                                <input type="text" class="form-control" name="fullName" id="fullName"
                                                    placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birthdate" style="color: black;">Birthdate</label>
                                                <input type="date" class="form-control" name="birthdate" id="birthdate">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" style="color: black;">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="whatsapp" style="color: black;">WhatsApp Number</label>
                                                <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                                    placeholder="WhatsApp Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="alternateMobile" style="color: black;">Alternate Mobile
                                                    Number</label>
                                                <input type="text" class="form-control" name="alternateMobile"
                                                    id="alternateMobile">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pan" style="color: black;">PAN Card No.*</label>
                                                <input type="text" class="form-control" name="pan" id="pan"
                                                    placeholder="Enter PAN Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pincode" style="color: black;">Pin Code</label>
                                                <input type="text" class="form-control" name="pincode" id="pincode"
                                                    placeholder="Pin Code">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address" style="color: black;">Address</label>
                                                <textarea name="address" class="form-control" id="address" rows="3"
                                                    placeholder="Enter your address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color: black;">Solve Captcha: 2 + 6 = </label>
                                                <input type="number" id="captchaAnswer" class="form-control"
                                                    placeholder="Answer" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: black;">
                                                    <input type="checkbox" name="agree" required>
                                                    I have read through the website's <a href="#">Privacy Policy</a> &
                                                    <a href="#">Terms and Conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Donate" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    document.getElementById('donationForm').addEventListener('submit', function (event) {
                                        event.preventDefault();
                                        const captchaAnswer = document.getElementById('captchaAnswer').value;
                                        if (parseInt(captchaAnswer) !== 8) {
                                            alert('Incorrect Captcha. Please try again.');
                                            return;
                                        }
                                        alert('Thank you for your donation!');
                                    });
                                </script>
                            </div>
                        </div>


                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img"
                                style="background-image: url('images/about-3.jpg'); background-size: cover; background-position: center;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>