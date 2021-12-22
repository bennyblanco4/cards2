<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Your Cards</title>
<meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="main.css">

  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <meta name="viewport" content="width=device-width,initial-scale=1">
  



</head>


<style>



</style>


<body>
  




<div class="header" style="text-align: right;">
        <div class="logo">
          <img id="logoimg" src="group.svg" width="80px">
    <a class="logout" href="/php/index.php?logout">Logout</a>
    <div class="username"> Hello  <?php  session_start(); echo $_SESSION['user_name'];?> ! </div>

        </div>

</div>

<div class="database-data" style="text-align: center; margin-top: 200px;">

<?php

$servername = "localhost";
$username = "arjon";
$password = "arjonsadikaj";
$dbname = "login";


$username1 = $_SESSION['user_name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** $sql = "SELECT firstname, lastname, relationship FROM cards"; **/
$sql="SELECT firstname, lastname, relationship FROM `cards` WHERE `username`='$username1'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {




 echo "

<br>
<tr>
 <td>".$row['firstname']."</td>
 <td>".$row['lastname']."</td>
 <td>".$row['relationship']."</td>
</tr>
</br>

 ";





$firstname = $row["firstname"];
$lastname  = $row["lastname"];
$relationship = $row["relationship"];
    }
} else {
    echo "0 results";
}

$conn->close();


?>

</div>


  




<div class="orders-container">

<div class="orders">
    
    
    



   <!-- <img class="order" src="addnew.svg"> -->

<div class="order">


<div class="carddata">




<div class="card-data" id="card-name"></div>
<div class="card-data" id="card-age"></div>
<div class="card-data" id="card-rel1"></div>
<div class="card-data" id="card-rel2"></div>
<div class="card-data" id="card-date1"></div>
<div class="card-data" id="card-date2"></div>

</div>





</div>



<div class="order">

<div class="carddata">

<div class="card-data" id="card-name"></div>
<div class="card-data" id="card-age"></div>
<div class="card-data" id="card-rel1"></div>
<div class="card-data" id="card-rel2"></div>
<div class="card-data" id="card-date1"></div>
<div class="card-data" id="card-date2"></div>



</div>



</div>
    



</div>

</div>




</body>

 


</html>



<!-- <div class="card-data" id="card-name"><?php echo $firstname;?> <?php echo $lastname;?></div>
<div class="card-data" id="card-age">22 years old</div>
<div class="card-data" id="card-rel1">Relationship to you</div>
<div class="card-data" id="card-rel2"><?php echo $relationship;  ?></div>
<div class="card-data" id="card-date1">Date you want to send out the card</div>
<div class="card-data" id="card-date2">22 August 2018</div> -->

