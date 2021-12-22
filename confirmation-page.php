<style>

img {

position: relative;

	width:20%;
   left: 50%;
transform: translate(-50%, -50%);
top:250px;
max-width: 400px;
}

h1 {

position: absolute;
	   left: 50%;
transform: translate(-50%, -50%);
margin-top: 200px;
font-family: Roboto;
}

</style>	




<div class="image">
<img src="images/correct.svg">
</div>


<div class="text">
<h1>Thank you for your order !</h1>
</div>


<?php  header( "refresh:1;url=/php/survey/orderdisplay.php" ); ?>