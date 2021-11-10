<?php
require_once('login/configsign.php');
?>

<?php
if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactus (name, email, message ) VALUES(?,?,?) ";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $email, $message]);
    if($result){
        echo 'We will revert you asap!!!';
    }else{
        echo 'There were errors while saving the data';
    }
}else{
    echo 'No data';
    
}