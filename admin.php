<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control" id="username">
				<div id="error" style="color:red"></div>
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control" id="password_input">
			</div>
		</div>
		<div align="center">
			<input type="submit" onclick="return val()" name="submit" class="btn btn-primary" align="center">
		</div>
	</form>


<script>
	function val(){

		var uname = document.getElementById('username').value;
		var password_input = document.getElementById('password_input').value;
		if(!uname){
			document.getElementById("error").innerHTML = "Enter a username";
			return false;
		}
		else if(!password_input){
			document.getElementById("error").innerHTML = "Enter a password";
			return false;
		}
		else{
			return true;
		}
	}
</script>

<?php
	require_once "./template/footer.php";
?>