<?php include 'header.php';?>
   
<!--Page Title-->
<section class="page-title" style="background-image: url(images/background/11.jpg);">
   <div class="anim-icons full-width">
       <span class="icon icon-bull-eye"></span>
       <span class="icon icon-dotted-circle"></span>
   </div>
   <div class="auto-container">
       <div class="title-outer">
           <h1>Registration</h1>
           <ul class="page-breadcrumb">
               <li><a href="index.php">Home</a></li>
               <li>Registration</li>
           </ul> 
       </div>
   </div>
</section>
<!--End Page Title-->


   <!--Register Section-->
<section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
            
                <!--Form Column-->
                <div class="form-column column col-lg-12 col-md-12 col-sm-12">
                <h3>Registration<h3>
                    <div class="sec-title">
                        <div class="separate"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-building"></span></span>
                                <input type="password" name="organisation" value="" placeholder="organisation">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-plane"></span></span>
                                <input type="password" name="Designation" value="" placeholder="Designation">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-cutlery"></span></span>
                                <input type="text" name="Dietary restrictions" value="" placeholder="Dietary restrictions">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-file"></span></span>
                                <input type="file" class="form-control" name="myfile" placeholder="Select a file">
                            </div>


                            <div class="clearfix">
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Submit</span></button>
                                </div>
            </div>
        </div>
    </section>
    <!--End Register Section-->

    
<?php include 'footer.php';?>



