

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
 text-align: center;

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
          <a href="/php/index-landingpage.php"><img id="logoimg" src="/php/views/group.svg" width="80px">
    <!-- <a class="logout" href="/php/index.php?logout">Logout</a> 
    <div class="username"> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </div> -->

        </div>




<div class="loginfield">



<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->




<a href="index.php?logout">Logout</a>

<p>

<a href="/php/survey/add-record-form-card.html">Get Started</a>


</div>



</body>





</html>
