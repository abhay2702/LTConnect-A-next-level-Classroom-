<?php 
session_start();
?>
<?php
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$msg = isset($_POST['msg'])? $_POST['msg']:'';
$x = $_SESSION['username'];
date_default_timezone_set("Asia/Kolkata");
$time = date('Y-m-d H:i:sa');
// Putting the message in the table 
    if($msg != ""){
        $sql = "INSERT INTO  chat (username, msg, time) VALUES ('$x', '$msg','$time')" ;
        $res = $conn->query($sql);
    }

// Getting back the username and message from the chat table
$get = "Select username, msg, time from chat order by Id Asc";
$res2 = $conn->query($get);
while($row = $res2->fetch_assoc()){
    if($row['username'] == $_SESSION['username'])
        echo "<div class = 'row'>
                <div class = 'col-sm-2 col-lg-2 col-md-2'>
                  <img src = '../../assets/images/avatar.png' class = 'user_img'><br>
                  <span>" . $row['username'] . "</span>
                </div>
                <div class='col-sm-8 col-lg-8 col-md-8 w3-panel w3-card-4 chat_box'>
                  <p>" . $row['msg'] . "<br>
                  <div class = 'time_set'>" . $row['time'] . "</div>
                  </p>
                </div>
              </div>";  
    else
        echo "<div class = 'row'>
                 <div class='col-sm-6 col-lg-6 col-md-6 w3-panel w3-card-4 w3-teal chat_box2'>
                  <p>" . $row['msg'] . "<br><div class = 'time2'>" . $row['time'] . "</div>
				  </p>
                </div>
                <div class = 'col-sm-1 col-lg-1 col-md-1'>
                  <img src = '../../assets/images/users.png' class = 'user_img'><br>
                  <span>" . $row['username'] . "</span>
                </div>
              </div>";
}
$conn->close();   
?>