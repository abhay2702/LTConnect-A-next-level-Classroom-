<?php

require_once('login/configsign.php');
include 'login/config.php';
session_start();

if(!isset($_SESSION['fullname'])){
    echo "You are logged out";
    header("location:login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Home</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="assets/images/logo3.png" alt="Softy Pinko" style="width: 125%;"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li ><a href="#pricing-plans" class="active">Home</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                            <li><a href="members/Chat_files/Group_chat/groupchat.php">Members</a></li>
                            <li class="propClone" onclick="myFunction()"><a href="logout.php"><strong>Logout</strong></a></li>
				<script>
function myFunction() {
  alert("Logged out Successfully");
  location.replace("logout.php")
}
</script>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

     <!-- ***** Pricing Plans Start ***** -->
     <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Hello <?php echo $_SESSION['fullname'];?> </h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>In our CLASSROOM we don't do easy, we make easy happen through hard work and learning.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">

                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="price">Messaging</span>
                            </div>
                            <ul class="list">
                                <li class="active">Ask Doubts</li>
                                <li class="active">Group Discussions</li>
                                <li class="active">Connect to Teachers</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="chat/chat/index.php" class="main-button">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item ">

                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="price">Lectures</span>
                            </div>
                            <ul class="list">
                                <li class="active">Attend Lectures</li>
                                <li class="active">Give Presentations</li>
                                <li class="active">Conduct meetings</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="lectures/lectures.php" class="main-button">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">

                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="price">Assessment</span>

                            </div>
                            <ul class="list">
                                <li class="active">Appear Tests</li>
                                <li class="active">Submit Assignments</li>
                                <li class="active">Evaluate Growth</li>

                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="exam/account.php" class="main-button">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->
   

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>We value your feedback and always ready to solve your concern.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>ADDRESS: LTCoE Sector 4, Vikas Nagar
                        <br>Kopar Khairane, Navi Mumbai, Maharashtra
                        <br>INDIA, 400709</p>
                        <p>EMAIL: principal.ltce@gmail.com.</p>
                        <p>PHONE: 022 2754 1005</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" id="name"type="text" class="form-control" placeholder="Full Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" id="email" type="email" class="form-control"  placeholder="E-Mail Address" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" id="message"rows="6" class="form-control"  placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="button" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script type="text/javascript">
		    $(function(){
				$('#button').click(function(e){

                      var valid = this.form.checkValidity();

					  
					  if(valid){

						var name = $('#name').val();
					  var email = $('#email').val();
					  var message = $('#message').val();
					  
						  e.preventDefault();

						  $.ajax({
							  type: 'POST',
							  url: 'process.php',
							  data: {name: name,email: email,message: message},
							  success: function(data){
								Swal.fire({
                      'title' : "Successful",
					             'text'  : data,
					             'type' : 'success'
				               })
							  },
							  error: function(data){
								Swal.fire({
                                'title' : "Errors",
					            'text'  : "There were errors while saving the data",
					            'type' : 'error'
				                 })
							  }
						  });
						  
					  }else{
						  
					  } 

					 


				
					});
				
			});
		</script>
    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2021 TEB Group no. 33</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>