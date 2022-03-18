<?php
	include "views/header.php";
	//require "models/database.php";

?>
<div class="container">
	<div class="section">
		<form id="signUpForm" action="models/signUpUser.php" method="post">
				<h4 class="center">Sign Up</h4>
			<div class="row">
				<div class="col m6 offset-m3 l6 offset-l3 s12">
				Username:
				<input type="text" name="loginName"/>
				Password:
				<input type="password" name="password"/>
				<div class="row" style="margin-top:10px; padding-left:20px;">
				<div class="col m6 offset-m3 l6 offset-l3 s12">
				<button type="submit">Sign Up</button> &nbsp;&nbsp;&nbsp;&nbsp;
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
<button class="amber" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<br>
<br>
<br>
<br>
<br>
<?php
	include "views/footer.php"
?>