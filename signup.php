	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<img src='http://pkmneothunder.com/Poke_reg.png'style="margin-top:252px;z-index:1;margin-left:610px;position:absolute">
	  <div id="Display"style="background:url('http://pkmneothunder.com/reg.png');height:450px;width:500px;margin-top:170px;margin-left:360px;position:absolute;"><p id="email_error"style="margin-left:168px;margin-top:150px"></p>
	  </div> <div style="height:600px; width:420px;border:none;margin-top:-10px;margin-left:120px;margin-right:150px;position:absolute;background:url('http://pkmneothunder.com/Register.png')">

<div id="Gas" style="margin-top:220px;margin-left:10px;border:solid black 1px;position:absolute;height:450px;width:360px">
<?php
require 'db.php';
if (isset($_SESSION['id'])) { header('Location: news.php'); }
if (isset($_POST['register'], $_POST['email'], $_POST['passwd'], $_POST['lastname'], $_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['lastname']) && !empty($_POST['firstname']))
{
$username = mysql_real_escape_string($_POST['firstname']);
$password = md5(mysql_real_escape_string($_POST['passwd']));
$trainer = mysql_real_escape_string($_POST['lastname']);
$email = mysql_real_escape_string($_POST['email']);
mysql_query("INSERT INTO `users` (`username`, `password`, `siggy`, `rank`, `coins`, `email`, `trainer`) VALUES ('".$username."','".$password."','This user does not have any signature!','Member','0','".$email."','".$trainer."')");
echo "<img src='http://pkmneothunder.com/Egg_crack.gif'height='80'width='80'style='margin:150px;'><br/><center>Be ready to experience the beta and become a worthy trainer<br /><a href='login.php'>Login to continue...</a></center>";
}
else
{
?>
  <form role="form-horizontal" method="post" action="signup.php" >
    <br/> 

	<center>Register</center>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div><br/>
	 </div>
	
	 <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:  </label>
	  <div class="control-label col-sm-10">
      <input type="password" class="form-control" name="passwd" placeholder="Enter password" id="pass">
	  </div><br/>
    </div>
	<br/>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Trainer:  </label>
	  <div class="control-label col-sm-10">
      <input type="Trainer_name" class="form-control" name="lastname" placeholder="Enter Trainer Name" value="" id="user">
	  </div><br/>
    </div>
	<br/>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:  </label>
	  <div class="control-label col-sm-10">
      <input type="Username" class="form-control" name="firstname" placeholder="Enter Username" id="real" value="">
	  </div><br/>
    </div>
	<br/>
    <div class="checkbox"style="margin-left:0px">
<center>By clicking the Start! button you're accepting our <u>Terms of Use</u> and <u>Privacy policy.</u></center><br/>
    </div>
	<input type="hidden" name="submitted" id="submitted" value="yes">
    <input type="submit" class="button_case" name="register" value="Register!" style="margin-left:80px">
  </form>
<?php } ?></div>
</div>
<!-- Code Ends -->
<script>
		$(document).ready(function(){
		$("#email").mouseleave(function () { //user types username on inputfiled
		   var email = $(this).val(); //get the string typed by user_email
		   var x=email.valueOf();
			 if(x=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Please insert the email id.Its's<br/>totally secured by our Team's<br/> Technicial department";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
				$("#pass").mouseleave(function () { //user types username on inputfiled
			  var lastname = $(this).val(); //get the string typed by user_email
		   var y=lastname.valueOf();
			  if(y=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Trainers don't have time<br/> to remember these.<br/>We remember it on your<br/> behalf";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
		   $("#user").mouseleave(function () { //user types username on inputfiled
			  var passwd = $(this).val(); //get the string typed by user_email
		   var z=passwd.valueOf(); //returns string representation of the value entered
			  if(z=="")
		   {
		   document.getElementById('Display').style.visibility="visible";
		   document.getElementById('email_error').innerHTML="Enter the trainer name to be used.";
		   }
		   else
			  document.getElementById('Display').style.visibility="hidden";
		   });
		   });
		   </script>
