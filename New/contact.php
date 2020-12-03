<?php
  $title = "Website Survey";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Website Survey</legend>
				    <p class="lead">This Website Survey will help us improve our website. <br> So please do fill the form given below.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.1</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" placeholder="What was your first impression when you entered the website?"></textarea>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.2</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" placeholder="How did you first hear about us?"></textarea>				        	
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.3</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" placeholder="Is there anything missing on this page?"></textarea>	       	
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Q.4</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" placeholder="How likely are you to recommend us to a friend or colleague?"></textarea>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" class="btn btn-primary">Submit</button>
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