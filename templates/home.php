<?php
// Start the session
session_start();
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
  console_log($_SESSION['email']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Account</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  		<link rel="stylesheet" href="../static/css/home.css" />
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</head>
	<body style="padding-top: 70px;">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="navbar-collapse collapse" id="collapsibleNavbar">
    				<ul class="nav navbar-nav">
      					<li class="nav-item active">
        					<a class="nav-link" href="#">Home</a>
      					</li>
     	  				<li class="nav-item">
        					<a class="nav-link" href="books.html">Books</a>
      					</li>   
      					<li class="nav-item">
        					<a class="nav-link" href="cart.html">My Cart</a>
						  </li>   
						  <li class="nav-item">
        					<a class="nav-link" href="wish.html">Wish List</a>
      					</li>   
      					
    				</ul>
    				<ul class="navbar-nav ml-auto">
       					<li class="nav-item ">
       						<form class="form-inline " action="#">
    							<input class="form-control mr-sm-2" type="text" placeholder="Books I want to read">
    							<button class="btn btn-light" type="submit"><span class="fa fa-search"></span> Search</button>
  							</form>
      					</li>  
    				</ul>
  				</div>  
  			</div>
		</nav>
		
            <!--Section: Block Content-->
<section>

    <!--Carousel Wrapper-->
    
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="../static/img/Images/janko-ferlic-sfL_QOnmy00-unsplash31.jpg"
              alt="First slide">
            <a href="#!">
              <div class="mask rgba-black-light"></div>
            </a>
          </div>
          <div class="carousel-caption">
            <div class="text-light text-center py-5 px-4">
                <div>
                  <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>NEVER LET THE READING STOP!</strong></h1>
                  <p class="mx-5 mb-5"><h4><br><b>"When you open a book,you open a new world"</b></h4><br><br><br>We are here to ensure that even in these difficult times you never have to stop reading ,learning,growing and prospering! <br>
                        
                  </p>
                </div>
              </div>
        </div>
    </div>
        <div class="carousel-item">
          
          <div class="view">
            <img class="d-block w-100" src="../static/img/Images/car3.jpg"
              alt="Second slide">
            <a href="#!">
              <div class="mask rgba-black-light"></div>
            </a>
          </div>
          <div class="carousel-caption">
            <div class="text-light text-center py-5 px-4">
                <div>
                  <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong> OVER 1 MILLION BOOKS!</strong></h1>
                  <p class="mx-5 mb-5"><h4><br><b>Upto 1000 different languages</b></h4><br><br><br>Right to your doorstep! <br>
                        
                  </p>
                </div>
              </div>
          </div>
        </div>
        <div class="carousel-item">
          
          <div class="view">
            <img class="d-block w-100" src="../static/img/Images/car2.jpg"
              alt="Third slide">
            <a href="#!">
              <div class="mask rgba-black-light"></div>
            </a>
          </div>
          <div class="carousel-caption">
            <div class="text-light text-center py-5 px-4">
                <div>
                  <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>E-BOOKS & AUDIO BOOKS!</strong></h1>
                  <p class="mx-5 mb-5"><h4><br><b>Coming Soon!</b></h4>
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--/Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/Controls-->
    </div>
    
    <!--/Carousel Wrapper-->
  
  </section>
  <!--Section: Block Content-->
	<br>
	<br>		
				
          
          
  		<div class="container">
        	<div class="row ">
				<div class="col-md-7 text-white text-center">
					
					<h2>Books with me</h2>
					<p>Details i.e image of the book picture </p>

					<br><br>
					
					<a href="cart.html" class="btn btn-danger">Pick up / Change book</a>
					
					
					
				</div>
			
        		
        		<div class="col-md-5 border  ">
          			<h2 class="d-flex justify-content-center text-white">SELL HERE</h2>
					<form class="was-validated" action="list-books.php" method="post">
  					<div class="form-group ">
    					<label for="uname">Book Name:</label>
    					<input type="text" class="form-control" id="uname" placeholder="Enter the book to be sold" name="uname" required>
    					<div class="valid-feedback">Valid.</div>
    					<div class="invalid-feedback">Please fill a book to sell.</div>
  					</div>
  					<div class="form-group ">
    					<label for="uname">Quoted Price in Rs</label>
    					<input type="number" class="form-control" id="pwd" placeholder="Enter an appropriate price" name="pswd" required>
    					<div class="valid-feedback">Valid.</div>
    					<div class="invalid-feedback">Please fill out the desired amount.</div>
					</div>
					<div class="form-group ">
						<div class="form-check-inline">
							<label class="form-check-label">
							  <input type="radio" class="form-check-input" name="fnf" value="Fiction">Fiction
							</label>
						  </div>
						  <div class="form-check-inline ">
								<label class="form-check-label">
								  <input type="radio" class="form-check-input" name="fnf" value="Non-fiction">Non-fiction
								</label>
						  </div>
					</div>
					<div class="form-group ">
    					<label for="uname">Genre & description</label>
    					<input type="text" class="form-control" id="genre" placeholder="Enter an appropriate genre and description" name="genre" required>
    					<div class="valid-feedback">Valid.</div>
    					<div class="invalid-feedback">Please fill out the description.</div>
					</div>
					<div class="form-group ">
    					<label for="link">Link of the picture</label>
    					<input type="link" class="form-control" id="link" placeholder="Enter the link" name="link" required>
    					<div class="valid-feedback">Valid.</div>
    					<div class="invalid-feedback">Please paste a link of the image of the front cover.</div>
					</div>
									  
		
					
					<br><br>
			 		 <ul>
						<li style="display:inline-block;">
							<input name="sub_book" type="submit" class="btn btn-danger" value="SUBMIT">Submit</input>
						</li>
						<li style="display:inline-block;">
							<a href="#"  style="color:#f4f4f4"><p>Terms & conditions apply*<p></a>
						</li>
					</ul>
					</form>
        		</div>
			</div>
		</div>
	</body>
	<br>
	<br>
	<!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4">

	<!-- Footer Elements -->
	<div class="container">
  
	  <!-- Social buttons -->
	  <ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item">
		  <a class="btn-floating btn-fb mx-1">
			<i class="fab fa-facebook-f"> </i>
		  </a>
		</li>
		<li class="list-inline-item">
		  <a class="btn-floating btn-tw mx-1">
			<i class="fab fa-twitter"> </i>
		  </a>
		</li>
		<li class="list-inline-item">
		  <a class="btn-floating btn-gplus mx-1">
			<i class="fab fa-google-plus-g"> </i>
		  </a>
		</li>
		<li class="list-inline-item">
		  <a class="btn-floating btn-li mx-1">
			<i class="fab fa-linkedin-in"> </i>
		  </a>
		</li>
		<li class="list-inline-item">
		  <a class="btn-floating btn-dribbble mx-1">
			<i class="fab fa-dribbble"> </i>
		  </a>
		</li>
	  </ul>
	  <h6 class="text-uppercase mb-4 text-center font-weight-bold">Contact</h6>
	  <ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item"><p>
          <i class="fas fa-home mr-3"></i>New York, NY 10012, US  |</p>
		</li>
			<li class="list-inline-item"><p>
		  <i class="fas fa-envelope mr-3"></i>solace@gmail.com  |</p></li>
		  
		
		<li class="list-inline-item"><p>
		  <i class="fas fa-phone mr-3"></i>+ 91 90 234 567 88  |</p></li>
		  <li class="list-inline-item">
        <p>
		  <i class="fas fa-print mr-3"></i>+ 91 90 234 567 89</p>
		
		</li>
	  </ul>
	  <!-- Social buttons -->
  
	</div>
	<!-- Footer Elements -->
  
	<!-- Copyright -->
	<div class="footer-copyright text-center  py-3">© 2020 Copyright:
	 
		  <a class="text-white" href="#"> Solace</a>
	
</div>
	<!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</html>
		