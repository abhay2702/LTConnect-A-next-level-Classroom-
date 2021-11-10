<?php

require_once('configsign.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

  <?php
include 'config.php';
 
if(isset($_POST['submit'])){
    $role =$_POST['role'];
    $email = $_POST['emailid'];
    $password = $_POST['passwrd'];
    
    

    $email_search = "select * from users where email='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $db_role = $email_pass['user'];
        $_SESSION['fullname'] = $email_pass['fullname'];
        $_SESSION['email'] = $email_pass['email'];
        $_SESSION['role'] = $email_pass['user'];

        // $pass_decode = password_verify($password, $db_pass);

        if($db_pass == $password && $db_role == $role){    
          if( $db_role == "Teacher"){
        ?>
        <script>
        alert("Login Successfully");
        </script>
           <script> 
            location.replace("../teacher.php");
            </script>
            <?php
            }else{
              ?>
        <script>
        alert("Login Successfully");
        </script>
           <script> 
            location.replace("../student.php");
            </script>
            <?php
            }
        }else if( $db_pass == $password && $db_role != $role){
          ?>
          <script>
          alert("Invalid Role");
          </script>
          <?php
        }else{
            ?>
            <script>
        alert("Invalid password");
        </script>
        <?php
        }
    }else{
        ?>
       <script>
        alert("Invalid email");
        </script>
        <?php
    }
}


 
?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="sign-in-form">
            <h2 class="title" ><img src="img/logo.png" style="width:50%; margin-left:24%;"></h2>
           
            <div class="input-field">
              <i class="fa fa-mortar-board"></i>
              <select id="role" name="role">
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
              </select>
              <!-- <input type="submit" placeholder="Role" /> -->
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="emailid" id="emailid" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passwrd" id="passwrd" />
            </div>
            <input type="submit" name="submit" id="submit" class="btn solid" value="Login"/>
            <!-- <button class="submit" type="submit" name="submit" id="submit" >Login</button> -->
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="fullname" id="fullname" placeholder="Full Name" 
              pattern="[A-Z a-z]{7,}" title="Please enter your name and surname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email ID" 
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Invalid email" required/>
            </div>
            <div class="input-field">
              <i class="fa fa-mortar-board"></i>
              <select id="user" name="user" required>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
              </select>
            </div>
            <div class="input-field">
              <i class="fa fa-institution"></i>
              <select id="batch" name="batch" required>
                <option value="FE">First year</option>
                <option value="SE">Second year</option>
                <option value="TE">Third year</option>
                <option value="BE">Final year</option>
              </select>
            </div>
            <div class="input-field">
              <i class="fa fa-volume-control-phone"></i>
              <input type="text" name="phone" id="phone" placeholder="Phone number"
              pattern="[0-9].{9}"
             title="Invalid Phone number" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="password" id="password" placeholder="Password" 
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one  number and one uppercase and lowercase letter, 
             and at least 8 or more characters" required/>
            </div>
            <input type="submit" class="btn"  name="create" id="button" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel " style="align-items: center;">
          <div class="content" >
            <h3>New to LTConnect ?</h3>
            <p>
              Register yourself and enter the classroom,<br>
              Get started TODAY!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel" style="align-items: center;">
          <div class="content">
            <h3>Registered ?</h3>
            <p>
              Sign in with the credentials you just signed up...
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register2.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script type="text/javascript">
		    $(function(){
				$('#button').click(function(e){

                      var valid = this.form.checkValidity();

					  
					  if(valid){

						var fullname = $('#fullname').val();
					  var email = $('#email').val();
            var user = $('#user').val();
            var batch = $('#batch').val();
					  var phone = $('#phone').val();
					  var password = $('#password').val();
					  
						  e.preventDefault();

						  $.ajax({
							  type: 'POST',
							  url: 'processsign.php',
							  data: {fullname: fullname,email: email,user: user,batch: batch,phone: phone,password: password},
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

  </body>
</html>
