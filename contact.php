<?php
$yourname=$_POST['yourname'];
$email=$_POST['email'];
$subj=$_POST['subject'];

//Db Connection

$conn=new mysqli('localhost','root','','try');
if($conn->connect_error){
    die('Connecxtion Failed'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into regestration(name,email,subject)
    values(?,?,?)");

    $stmt->bind_param("sss",$name,$email,$subject);
    $stmt->execute();
    echo "regestration successful";
    $stmt->close();
    $conn->close();

}

?>