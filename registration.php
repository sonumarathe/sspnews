<?php
session_start();
header("location:login.html");
$con = mysqli_connect("localhost","root");
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, "ssplogin");
$name=$_POST["name"];
$pass=$_POST["password"];

$q = "select * from userinfo where name='$name',password='$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if ($num ==1)
{
    echo"dublicate data";
}
else {
    $qy = "insert into userinfo (name,password) values ('$name','$pass')";
    mysqli_query($con, $qy);
}

?>
