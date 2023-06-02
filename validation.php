 <?php 
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo"Connection Successfully";
}
else{
    echo"no connection";
}
mysqli_select_db($con, "ssplogin");
$name=$_POST["name"];
$pass=$_POST["password"];

$q=" select * from userinfo where name='$name' && password='$pass'";
$result= mysqli_query($con, $q);
// row=mysqli_query($con,SELECT * FROM userinfo where )
$num = mysqli_fetch_array($result);

if ( is_array($num)){
   $_SESSION['username']= $num['name'];
   $_SESSION['password']=$num['password'];
   header('location:news.html');
} else
{
    header('location:news.html');
}
?> 