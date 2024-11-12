<?php include 'header.php';?>



    <!-- Hidden bar back drop -->

    <div class="form-back-drop"></div>

 <!--Page Title-->
 <section class="page-title" style="background-image: url(images/background/11.jpg);">
    <div class="anim-icons full-width">
        <span class="icon icon-bull-eye"></span>
        <span class="icon icon-dotted-circle"></span>
    </div>
    <div class="auto-container">
        <div class="title-outer">
            <h1>Contact us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Contact us</li>
            </ul> 
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="contact-section">
    <div class="auto-container boxd">
        <div class="sec-title text-center">
            <span class="sub-title">GET IN TOUCH</span>
            <h2>If Contact With Us Send Detail</h2>
            <span class="divider"></span>
        </div>

        <div class="contact-form">
            <form method="post" action="sendemail.php" id="contact-form">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <div class="input-outer">
                            <input type="text" name="username" placeholder="Name" required="">
                            <span class="icon fa fa-user"></span>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <div class="input-outer">
                            <input type="email" name="email" placeholder="Email" required="">
                            <span class="icon fa fa-envelope"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <div class="input-outer">
                            <input type="text" name="phone" placeholder="Phone" required="">
                            <span class="icon fa fa-phone"></span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <div class="input-outer">
                            <input type="text" name="subject" placeholder="Subject" required="">
                            <span class="icon fa fa-pencil-alt"></span>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--End Contact Page Section -->

 <!-- Map Section -->
<section class="map-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="contact-column col-lg-5 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">QUICK CONTACT</span>
                        <h2>Need Help? Contact Us</h2>
                        <span class="divider"></span>
                        <div class="text">Available to our business customers 24 hours a day.</div>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-map-marker-alt"></span> 
                            <h4>Our Location:</h4>
                            <p>146, Dr Radha Krishnan Salai, Mylapore, Chennai, Tamil Nadu 600004</p>
                        </li>

                        <li>
                            <span class="icon fa fa-phone-volume"></span> 
                            <h4>Mobile Number:</h4>
                            <p>+91 97907 88848</p>
                        </li>

                        <li>
                            <span class="icon fa fa-envelope"></span> 
                            <h4>Email:</h4>
                            <p><a href="mailto:newyork@example.com">vallamai@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="map-column col-lg-7 col-md-12 col-sm-12">
                 <!--Map Outer-->
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.84361634525!2d80.2585536750777!3d13.045624387276568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526630c0f2612f%3A0x8f8e62ccd75f4f83!2sSavera%20Hotel!5e0!3m2!1sen!2sin!4v1699077870582!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Map Section -->





<?php include 'footer.php';?>