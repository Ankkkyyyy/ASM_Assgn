
<?php 
ob_start();
include "config.php";
session_start();
?>

<?php
 include "header.php"
?>
   
<?php 

if(isset($_POST["login_btn"]))
{
  // $email = $_POST["email"];
  $userid = mysqli_real_escape_string($config,$_POST["userid"]); // this function is good for  security purpose to prevent it from hacking.
  // $password = $_POST["password"];
  // sha1 is for decrypting encrypting purpose !
  $password = mysqli_real_escape_string($config,sha1($_POST["password"]));



  // $sql = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
  // $sql = "SELECT * FROM data WHERE userid = '{$userid}' AND password = '{$password}'";
  $sql = "SELECT * FROM data WHERE userid = '{$userid}' ";
  $query = mysqli_query($config,$sql);
  $data = mysqli_num_rows($query);
  if($data)
  {
   
    $_SESSION['alreadyexist'] = "you have entered the Data that already exist " ;
    header("location:index.php");

 
  }
  else{

    $userid = mysqli_real_escape_string($config,$_POST["userid"]); // this function is good for  security purpose to prevent it from hacking.
    // $password = $_POST["password"];
    // sha1 is for decrypting encrypting purpose !
    $password = mysqli_real_escape_string($config,sha1($_POST["password"]));

    // $sql = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";
    // $sql = "INSERT INTO data (userid,password) VALUES ({$email},{$password})";
    $sql = "INSERT INTO data (srno, userid, password) VALUES ('NA','$userid','$password')";
    $query = mysqli_query($config,$sql);

   
    $_SESSION['added'] = "Added new Data....";
    header("location:index.php");
  }



  
  

}
