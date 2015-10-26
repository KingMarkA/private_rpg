<style>.back{height:200px;width:420px;border:none;margin-top:10px;margin-left:100px;margin-right:150px;position:absolute;background:url('http://pkmneothunder.com/back.png')}.Gas{margin-top:150px;border:solid black 1px;position:absolute;height:450px;width:340px;margin-left:50px;}</style>
<center>
<div class="back">
<div class="Gas" id="Gas">
<?php
require 'db.php';
if (isset($_SESSION['id'])) { header('Location: news.php'); }
if ( isset(
$_POST['login'], 
$_POST['username'], 
$_POST['password']
) ) 
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	$phantom = mysql_query("SELECT * FROM `users` WHERE `username`='".$username."' AND `password`='".$password."'");
	echo '<br /><br /><br /><br />Logging in... '.$username;
	if ( mysql_num_rows($phantom) == 1 ) 
	{
		$omsai = mysql_fetch_array($phantom);
		$_SESSION['id'] = $omsai['id'];
		$_SESSION['username'] = $omsai['username'];
		$_SESSION['siggy'] = $omsai['siggy'];
		$_SESSION['rank'] = $omsai['rank'];
		echo '<meta http-equiv="refresh" content="4; url=news.php"><br /><br /><br /><br />Successfully logged in as '.$_SESSION['username'];
	}
	else
	{
		echo '<br /><br /><br /><br />This is not a valid user, please check if you entered the correct username and password!<br /><br /><br /><br /><a href="login.php">Back to Login</a>';
	}
} 
else 
{
?>
  <form role="form-horizontal" method="post" action="login.php" >
    <br/>
	<div class="form-group">
    	Username: <input type="text" class="form-control" name="username"  placeholder="Enter Username"><br />
		Password: <input type="password" class="form-control" name="password" placeholder="Enter Password"><br />
      	<input type="checkbox" name="remember-me"> Remember me<br /><br />
		<input type="hidden" name="submitted" id="submitted" value="yes">
	    <input type="submit" class="button_case" name="login" value="Login!">
	</div>
  </form>
<?php } ?>
</div>
</div> 
</center>
