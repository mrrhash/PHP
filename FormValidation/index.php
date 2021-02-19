<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormValidtion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style> 
    .error span{
      display:none;
    }
      </style>
</head>
<body class="bg-dark" style="font-family:'Times New Roman', Times, serif;">

<?php

$fname = $lname = $email = $gender = $pass = $repass = $error = "";
$fnameerror = $lnameerror = $emailerror = $passerror = $repasserror = "";




if($_SERVER["REQUEST_METHOD"] == "POST"){
  function cleaninput($field){
    $field = trim($field);
    $field = stripcslashes($field);
    $field = htmlspecialchars($field);
    return $field;}

$fname= cleaninput( $_POST['fname']);
$lname=cleaninput($_POST['lname']);
$email=cleaninput($_POST['email']);
$gender=cleaninput($_POST['gender']);
$pass=cleaninput($_POST['pass']);
$repass=cleaninput($_POST['repass']);


if(isset($fname) && $fname != "" && isset($lname) && $lname != "" && isset($email) && $email != "" && isset($gender) && $gender != ""
&& isset($pass) && $pass != "" && isset($repass) && $repass != ""){

  

if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
  $fnameerror = "Only letters and White Spaces are allowed...!";
}
else if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
  $lnameerror = "Only letters and White Spaces are allowed...!";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $emailerror = "Please Enter valid Email...";
}
else if(strlen($pass) < 8 ){
    $passerror = "Password must have 8 or more Characters..";
}
else if($pass != $repass){
    $repasserror = "Your password doesn't match...";
}
else {
  $fname = $lname = $email = $gender = $pass = $repass = $error = "";
  echo '<script type="text/javascript">
  					swal("", "Registered Successfully", "success");
  					</script>';
}

}

else {
  $error = "You must Fill All Fields....";
}

}

?>


    <div class="container">
        <br><br>
  <div class="row"  style="background-color: white; border-radius: 15px;"> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST" class="col-5 ml-5"><br>
    <h1>Sign up</h1><br>

    <label for="">First Name</label>:
    <input type="text" class="form-control" name="fname" value="<?php if($fname) {echo $fname;} ?>">
    <span style="color:red;"><?php 
    if($fnameerror){
    echo $fnameerror; 
     }?></span><br>

    <label for="">Last Name</label>:
    <input type="text" class="form-control" name="lname" value="<?php echo $lname ?>" >
    <span style="color:red;"><?php 
    if($lnameerror){
    echo $lnameerror; 
     }?></span><br>

    <label for="">Email</label>:
    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
    <span style="color:red;"><?php 
    if($emailerror){
    echo $emailerror; 
     }?></span><br>
    
    <label for="">Gender:</label><br>
    <input type="radio" name="gender" id="" checked >Male
    <input type="radio" name="gender" id="" class="p-5 ml-5 " >Female <br><br>

    <label for="">Password</label>:
    <input type="password" class="form-control" name="pass" value="<?php echo $pass ?>">
    <span style="color:red;"><?php 
    if($passerror){
    echo $passerror; 
     }?></span><br>

    <label for="">Retype-Password</label>:
    <input type="password" class="form-control" name="repass" value="<?php echo $repass ?>">
    <span style="color:red;"><?php 
    if($repasserror){
    echo $repasserror; 
     }?></span><br>

    <button type="submit" name="submit" class="btn btn-primary">Register</button><br><br>

    <div class="error" style="">
      <?php
      if($error){
        echo "<span style='display:block;background-color:red;color:white;padding:10px;'>.$error.</span>";
      }
      ?>
    </div><br><br>
    </form>
    <img src="images/signin-image.jpg" alt="" class="" style="margin-left: 200px;margin-top: 100px" height="400px" width="350px">
  </div>
  <br><br>
</div>





</body>
</html>