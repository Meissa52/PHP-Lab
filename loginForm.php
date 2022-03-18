<?php
	include "views/header.php";
	require "models/database.php";
	if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    	header('Location: index.php');
	}
?>
<div class="container">
<div class="center">
	<h5>
  <?php
if(isset($_GET['Message'])){
  echo $_GET['Message'];
}
?>
</h5>
</div>
	<div class="section">
		<form id="loginForm" action="models/loginUser.php" method="post">
				<h4 class="center">Login</h4>
			<div class="row">
				<div class="col m6 offset-m3 l6 offset-l3 s12">
				Username:
				<input type="text" name="loginName"/>
				Password:
				<input type="password" name="password"/>
				<div class="row" style="margin-top:10px; padding-left:20px;">
				<div class="col m6 offset-m3 l6 offset-l3 s12">
				<button type="submit">Login</button> &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="index.php"><input type="button" value="Cancel"></a>
</div>
</div>
		</form>
			<div class="row">
				<div class="col m6 offset-m3 l6 offset-l3 s12">
				No Account?&nbsp;<a href="signUp.php">Sign Up Here</a>
</div>
</div>
		</div>
</div>
	</div>
</div>
<button class="black" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<br>
<br>
<br>
<br>
<?php
	include "views/footer.php"
?>