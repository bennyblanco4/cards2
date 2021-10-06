



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment</title>
<meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <meta name="viewport" content="width=device-width,initial-scale=1">
  



</head>


<style>

body {
  
  background-color: #fafdff;
  min-width: 450px;  

}

html body {
margin:0;
padding:0;
width: 100%;
height:100%;

}

.header {


  width:100%;
   width:100%;
 height: 117px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
}


.logout {
float: right;
padding-right: 30px;
margin-top: 6.5px;
text-decoration: none;
font-weight: bold;

}

a:visited {color:green;}

.username {

float:right;
margin: 0 ;
    
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight:bold;
    font-size: 24px;
    line-height: 33px;
    letter-spacing: 0.02em;
    color: #333333;
  padding-right: 20px;



}

.loginfield {

 margin-top: 200px;


}

.logo {

padding-top: 40px;


}

#logoimg {
  padding-left: 20px;
}

</style>


<body>
  

<div class="header">
        
      <div class="logo">
          <img id="logoimg" src="/php/views/group.svg" width="80px">
    <a class="logout" href="/php/index.php?logout">Logout</a>
    <div class="username"> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </div>

        </div>



<div class="loginfield">

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<form method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Password (min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit"  name="register" value="Register" />

</form>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>


</div>



</body>





</html>
