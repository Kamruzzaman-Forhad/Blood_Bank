<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Blood & Heart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#registration">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <section id="showcase">
	<div class="primary-overlay">
		<div class="container text-center pt-5">
			  <form action="view_search.php" method="post" class="mt-4">
				<p class="display-4 text-danger mt-5">Search Blood</p>
				<div class="row">
                <div class="col-md-4 mb-1">
                <select class="form-control" name="blood_search">  
                    <option value="A+">A+</option>}  
                    <option value="A-">A-</option>  
                    <option value="B+">B+</option>  
                    <option value="B-">B-</option>  
                    <option value="O+">O+</option>  
                    <option value="O-">O-</option>  
                    <option value="AB+">AB+</option>  
                    <option value="AB-">AB-</option>   
                </select>
                </div>
                <div class="col-md-4 mb-1">
                <select class="form-control" name="district_search">  
                    
                   

<?php


        $query = "SELECT distinct district_name FROM donar_data";
        $select_district = mysqli_query($connection,$query);

        if(!$query){
          die("QUERY FAILED" .mysqli_error($connection));
        }
        

        while($row = mysqli_fetch_assoc($select_district)){
          
          $district_name = $row['district_name'];

        echo "<option value='$district_name'>{$district_name}</option>";

        }

?> 
                    <!-- <option value="Dhaka">Dhaka</option>}  
                    <option value="Noakhali">Noakhali</option>  
                    <option value="Chittagong">Chattagong</option>  
                    <option value="Rajshahi">Rajshahi</option>  
                    <option value="Barisal">Barisal</option>  
                    <option value="Sylhet">Sylhet</option>  
                    <option value="Khulna">Khulna</option>  
                    <option value="Rangpur">Rangpur</option>    -->
                </select>
                </div>
				<div class="col-md-4">
					<input type="submit" name="search" class="btn btn-block search_button" value="submit" />
				</div> 
            </div>
        </form>
		</div>
	</div>
 </section>

 <!-- About section -->
 
 <section id="about">
	<div class="container">
		<div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <ul>
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul>
        </div>
      </div>
	</div>
 </section>
 
<!-- Registration section --> 

 <section id="registration">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="card">
					<div class="card-header bg-dark text-light text-center"><h3>Registration</h3></div>
					<div class="card-body"> 
					  <form action="" method="post">
						  <div class="form-group">
							<label for="name">Name <sup class="text-danger">*</sup></label>
							<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
						  </div>
						  <div class="form-group">
							<label for="districtName">District Name <sup class="text-danger">*</sup></label>
							<input type="text" name="district" class="form-control" placeholder="Enter Your District Name" required>
						  </div>
						  <div class="form-group">
							<label for="blood_group">Blood Group <sup class="text-danger">*</sup></label>
										<select class="form-control" name="blood">  
											<option value="A+">A+</option>}  
											<option value="A-">A-</option>  
											<option value="B+">B+</option>  
											<option value="B-">B-</option>  
											<option value="O+">O+</option>  
											<option value="O-">O-</option>  
											<option value="AB+">AB+</option>  
											<option value="AB-">AB-</option>   
										 </select>
						  </div>
						  <div class="form-group">
							<label for="emailname">Email address</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your email if Exist">
						  </div>
						  
	                      <div class="remove_down_arrow"></div>
						  
						  <div class="form-group">
							<label for="contact">contact Number <sup class="text-danger">*</sup></label>
							<input type="number" name="contact" class="form-control" placeholder="Enter your Phone Number" maxlength="11" required>
							<span class="white"></span>
						  </div>
						  
						  <div class="form-group">
							<label for="password">Password <sup class="text-danger">*</sup></label>
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						  </div>

						  <div class="form-group">
							<label for="confpassword">Confirm Password <sup class="text-danger">*</sup></label>
							<input type="password" class="form-control" placeholder="Confirm Password" required>
						  </div>

						  <div class="row">
							<div class="col-12">
							<label for="blood_group">Last donated date <sup class="text-danger">*</sup></label>
							</div>
						  </div>

						  <div class="form-group">
						  <input class="form-control" name="last_donated" type="text" id="datepicker" required></p>
						  </div>

						  <button type="submit" class="btn btn-ingo" name="submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section>
<!-- Contact Us -->

<section id="contact">
	<div class="container text-center">
		<div class="row">
            <div class="col-10 ml-5">
                <div class="form-wrap">
                <h1>Contact</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
						<!--<h6 class="text-center"><?php //echo $message;?></h6>-->
					
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email">
                        </div>
                         <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your Subject">
                        </div>
                         <div class="form-group">
                            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div>
	</div>
</section>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
 <!-- <script src="js/scrolling-nav.js"></script>-->

</body>

</html>
