<?php 
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$cast = $_POST['cast'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$date = $_POST['date'];
$cource = $_POST['cource'];

// database connection

$conn = new mysqli('localhost','root','','admission');
if($conn->connect_error){
    die('Connection_Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into admission(fullname,fathername,gender,cast,mobile,email,date,cource)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssisss",$fullname,$fathername,$gender,$cast,$mobile,$email,$date,$cource);
    $stmt->execute();
    echo "admission successfully..";
    $stmt->close();
    $conn->close();
}

?>