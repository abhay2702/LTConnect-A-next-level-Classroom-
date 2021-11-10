<?php 
session_start();
$_SESSION["name"] = 'localhost';
$_SESSION["user"] = 'root';
$_SESSION["pas"]  = '';
$_SESSION["db"]   = 'ltconnect';
// Establishing connection
$conn = new mysqli( $_SESSION["name"],$_SESSION["user"],$_SESSION["pas"],$_SESSION["db"] );
?>

 <?php 
$conn = new mysqli($_SESSION['name'], $_SESSION['user'], $_SESSION['pas'], $_SESSION['db']);
$get = "Select fullname from users";
$result = $conn->query($get);
while($row = $result->fetch_assoc()){
    if($_SESSION['fullname'] == $row['fullname']){
       echo "<div class = 'current_user'>
            
             <span style = 'margin-left:10px' class = 'col-lg-6 col-md-7 col-sm-9 col-xs-6'>". $row['fullname'] .
           "</span>
            </div><br>";
    }
    else
    echo "
          <span style = 'margin-left:10px' class = 'col-lg-6 col-md-7 col-sm-9 col-xs-6'>". $row['fullname'] .
        "</span>
        <br><br>";    
}
?>   
