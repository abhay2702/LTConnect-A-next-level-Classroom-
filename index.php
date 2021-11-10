<?php

require_once('login/configsign.php');
include 'login/config.php';
session_start();

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

    <title>LTConnect</title>
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
                            <li ><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#features">About</a></li>
                            <li><a href="#work-process">Team</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                            <li><a href="login/index.php"><strong>Login</strong></a></li>
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

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Classroom the <strong>world</strong> needs to<br>
                            connect youth with <strong>education</strong></h1>
                        <p style="font-size: 125%;">Online Classroom ain't boring now!!!!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Messaging</h5>
                                <p>The whole classroom is connected to each other via group chat feature</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Lectures</h5>
                                <p>Teachers can conduct smooth teaching via live lecture feature</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Assessment</h5>
                                <p>Fair conduction of test can be achieved via assessment feature </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s discuss about LTConnect</h2>
                    </div>
                    <div class="left-text">
                        <p>LTConnect brings all classroom activities on a single platform with security options which
                            will reduce the wrong doings of students during online evaluation and will help reduce the
                            stress of teachers and lecturers conducting online classes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Passing the knowledge and ensuring growth</h2>
                    </div>
                    <div class="left-text">
                        <p>Education has changed a lot in recent times. It’s more interactive now with the intrusion of digital media. The new-age technology like artificial intelligence, augmented reality are opening a new dimension in education. There is a gap between the information and knowledge, real education.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row" style="margin-top: -5%;">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Know the team</h1>
                            <p>Get to know the minds who made this project possible</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <p>I worked on the frontend and backend part of the project</p>
                                <div class="user-image">
                                    <img src="http://placehold.it/60x60" alt="">
                                </div>
                                <div class="team-info">
                                    <h3 class="user-name">Abhay Upadhyaya</h3>
                                    <span>TEB 248</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->
                    
                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <p>I worked on the Live lectures feature of the website.</p>
                                <div class="user-image">
                                    <img src="http://placehold.it/60x60" alt="">
                                </div>
                                <div class="team-info">
                                    <h3 class="user-name">Aashish Verma</h3>
                                    <span>TEB 249</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->

                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <p>I worked on the group messaging feature of the website</p>
                                <div class="user-image">
                                    <img src="http://placehold.it/60x60" alt="">
                                </div>
                                <div class="team-info">
                                    <h3 class="user-name">Amit Singh</h3>
                                    <span>TEB 239</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->
                    
                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <p>I worked on the online assessment feature of the website.</p>
                                <div class="user-image">
                                    <img src="http://placehold.it/60x60" alt="">
                                </div>
                                <div class="team-info">
                                    <h3 class="user-name">Deepak Yadav</h3>
                                    <span>TEB 252</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

   

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