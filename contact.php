<?php
  $title = "Website Survey";
  require_once "./template/header.php";
?>


	<?php
         // define variables and set to empty values
         $nameErr = $emailErr = "";
         $name = $email = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["inputName"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["inputName"]);
            }
            
            if (empty($_POST["inputEmail"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["inputEmail"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
			}

			if($nameErr == "" and $emailErr == ""){

			
				$servername = "localhost";
				$username = "phpmyadmin";
				$password = "PASSWORD";
				$dbname = "www_project";
				
				/* Attempt MySQL server connection. Assuming you are running MySQL
				server with default setting (user 'root' with no password) */
				$link = mysqli_connect($servername, $username, $password, $dbname);
				 
				// Check connection
				if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				
				$inputName = test_input($_POST["inputName"]);
				$inputEmail = test_input($_POST["inputEmail"]);
				$question_1 = test_input($_POST["question_1"]);
				$question_2 = test_input($_POST["question_2"]);
				$question_3 = test_input($_POST["question_3"]);
				$question_4 = test_input($_POST["question_4"]);
				 
				// Attempt insert query execution
				
				$sql = "INSERT INTO review VALUES('$inputName', '$inputEmail', '$question_1', '$question_2', '$question_3', '$question_4')";
				if(mysqli_query($link, $sql)){
					echo "Records added successfully.";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				 
				// Close connection
				mysqli_close($link);
			} 
			
		 }
		 
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>


	<style>
         .error {color: #FF0000;}
    </style>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			  	<fieldset>
				    <legend>Website Survey</legend>
				    <p class="lead">This Website Survey will help us improve our website. <br> So please do fill the form given below.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" name="inputName" class="form-control" id="inputName" placeholder="Name" required>
							<span class = "error"><?php echo $nameErr;?></span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" required>
							<span class = "error"><?php echo $emailErr;?></span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.1</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" name="question_1" rows="3" id="textArea" placeholder="What was your first impression when you entered the website?" required></textarea>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.2</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" name="question_2" rows="3" id="textArea" placeholder="How did you first hear about us?" required></textarea>				        	
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.3</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" name="question_3" rows="3" id="textArea" placeholder="Is there anything missing on this page?" required></textarea>	       	
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.4</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" name="question_4" rows="3" id="textArea" placeholder="How likely are you to recommend us to a friend or colleague?" required></textarea>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" name="submit_review" class="btn btn-primary">Submit</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>

<?php
  require_once "./template/footer.php";
?>