<?php

require_once('../login/configsign.php');
include '../login/config.php';
session_start();

if(!isset($_SESSION['fullname'])){
    echo "You are logged out";
    header("location:../login/index.php");
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

    <title>Home</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-softy-pinko.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <script src='https://meet.jit.si/external_api.js' async></script>
        <style>html, body, #jaas-container { height: 100%; }</style>
        <script type="text/javascript">
          window.onload = () => {
            const api = new JitsiMeetExternalAPI("8x8.vc", {
              roomName: "vpaas-magic-cookie-a314da0b95d54d0cb82db72c4da889ed/ShineLocallyMeeting",
              parentNode: document.querySelector('#jaas-container'),
              jwt: "eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtYTMxNGRhMGI5NWQ1NGQwY2I4MmRiNzJjNGRhODg5ZWQvM2NkNDhiLVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImV4cCI6MTYxOTc3MjIzMywibmJmIjoxNjE5NzY1MDI4LCJpc3MiOiJjaGF0Iiwicm9vbSI6IioiLCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtYTMxNGRhMGI5NWQ1NGQwY2I4MmRiNzJjNGRhODg5ZWQiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOmZhbHNlLCJvdXRib3VuZC1jYWxsIjpmYWxzZSwidHJhbnNjcmlwdGlvbiI6ZmFsc2UsInJlY29yZGluZyI6ZmFsc2V9LCJ1c2VyIjp7Im1vZGVyYXRvciI6dHJ1ZSwibmFtZSI6IlRlc3QgVXNlciIsImlkIjoiZ29vZ2xlLW9hdXRoMnwxMDM0Mjk0ODYzMTc2MjY1NDI2ODYiLCJhdmF0YXIiOiIiLCJlbWFpbCI6InRlc3QudXNlckBjb21wYW55LmNvbSJ9fX0.O_Va9TqKva8dU3h8hP4YTWKox6coxZdpJwx9Ltr07wmECMr7igY7WVMdn5OCVA0--gpyA0IlGVan4YGPvCjTupePCNh1AIN9PxC2LmtqQupXaHRl98buyYiO30UDc8EK-pnieUQeBveY5iF1nIt6DCNMVVRbfaefk830elaB3XRD9x4JniHJlYxZcZxbW1dk9Y6f7UjT2p1Uz3SEYL2pR86ZYOTR_XEWBPzBU9BW-A3s-u4m1xUF2gc8LOhstt38hLJT0hfiw47y_KI3-u3_2JT_vh1NkMlXseNK7StUigMr_4BcO8-hOdG_zDvHIs0MAV1huEoBO9jYrA0vHo1E1Q"
            });
          }
        </script>
</head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo" >
                            <img src="../assets/images/logo3.png" alt="Softy Pinko" style="width: 125%;"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li style="font-weight:1000;"><a href="#pricing-plans" class="active">Home</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                            <li><a href="../members/Chat_files/Group_chat/groupchat.php">Members</a></li>
                            <li class="propClone" onclick="myFunction()"><a href="../logout.php"><strong>Logout</strong></a></li>
				<script>
function myFunction() {
  alert("Logged out Successfully");
  location.replace("../logout.php")
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
    <section class="section colored" id="pricing-plans" style="padding-top:80px;">
    <div class="container" style="margin-left: 70px;">
    <div class="page-wrapper">
            <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view chat-view">
                        <div class="chat-window">
                            
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <iframe src="https://meet.jit.si/ShineLocallyMeeting" allow="camera;microphone" width=100% height=100%></iframe>
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
    </div>
    </div>
    </section>
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
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
    <script>var video = document.querySelector("#videoElement2");

        if (navigator.mediaDevices.getUserMedia) {
          navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
              video.srcObject = stream;
            })
            .catch(function (err0r) {
              console.log("Something went wrong!");
            });
        }
        </script>
    
    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

  </body>
</html>