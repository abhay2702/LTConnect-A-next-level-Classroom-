<?php
require_once('configsign.php');
?>

<?php
if(isset($_POST)){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $batch = $_POST['batch'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (fullname, email, user, batch, phone, password ) VALUES(?,?,?,?,?,?) ";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$fullname, $email, $user, $batch, $phone, $password]);
    if($result){
        echo 'Successfully saved';
        
    }else{
        echo 'There were errors while saving the data';
    }
}else{
    echo 'No data';   
}