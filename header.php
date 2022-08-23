<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="static/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">

      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="style.css">
    
      <title>Ankit Mishra </title>
  
  </head>

  <body class="bg-nav">
    <nav class="navbar">
        <a href=""class="navbar-brand text-light" >Ankit Mishra</a>
    </nav>


    <div class="col-md-4   mx-auto mt-5 ">

<div class="card">
  <div class="card-body">
    <form class="form" method="post" action="#" >
    

    <!-- <form class="form" method="post" action="#"> -->

      <label> User ID</label>
      <br>
      <input type="text" name="userid" placeholder="enter your user id"  class="form-control" name="email" required 
      <?php
    
    if(isset($_SESSION['alreadyexist']))
{
    // echo 'readonly="readonly"';
    echo 'disabled="true"';
    unset($_SESSION['added']);
}
else{
  echo '';
}
;
?>
      
      ><br>
      <label>Password</label>
      <input type="password" name="password"  placeholder="enter your password"  class="form-control"  name="password" required 
      <?php
    
    if(isset($_SESSION['alreadyexist']))
{
    // echo 'readonly="readonly"';
    echo 'disabled="true"';
    unset($_SESSION['added']);
}
else{
  echo '';
}
;
?>
      
      >
      <br>
      <br>
      <input type="submit" name="login_btn"  class="btn btn-secondary btn-block btn-lg" value="Add" 
      
      <?php 
      if(isset($_SESSION['alreadyexist']))
{
    // echo 'readonly="readonly"';
    echo 'disabled="true"';
    unset($_SESSION['added']);
}
else{
  echo '';
}
  ?>    
      
      >
   <br>


   <?php

if(isset($_SESSION['added']))
{
    $added =  $_SESSION['added'];
    echo  "<p class='bg-success p-2 text-white '>".$added."</p>";
    unset($_SESSION['added']);

}
else if(isset($_SESSION['alreadyexist'])){
 $alreadyexist = $_SESSION['alreadyexist'];
 echo  "<p class='bg-danger p-2 text-white '>".$alreadyexist."</p>";
 unset($_SESSION['alreadyexist']);

}

?>

</form>
<br>
<p class:"mt-2">Not a member? <a href="#">Create Account </a> </p>

</div>

</div>








</div>

<br> <br>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>
</body>
</html>