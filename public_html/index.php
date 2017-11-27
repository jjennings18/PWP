<!doctype html>
<html lang="en">
  <head>
    <title>Jermain Jennings</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	  <!-- jQuery Form, Additional Methods, Validate -->
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	  <!-- JavaScript Form Validator -->
	  <script src="js/jquery-validate.js"></script>

	  <!--Google reCAPTCHA-->
	  <script src='https://www.google.com/recaptcha/api.js'></script>
	  <!-- start of page -->
	  <div class="jumbotron jumbotron-fluid">
		  <div class="container">
			  <h1 class="text-primary" class="display-3">Welcome!</h1>
			  <p class="lead"></p>
		  </div>
	  </div>

	  <div class="container">
	  <!-- Headshot image -->
	  <img src="documentation/images/jermainjennings2.jpg" class="rounded mx-auto d-block img-fluid mb-3" alt="Responsive image">
	  </div>
	  <!-- Brief Bio-->
	  <div class="container">
			 <p class="text-center"> My Name is Jermain Jennings I am a native to Albuquerque, New Mexico. Ive been working with computers for
				 over 10 years. I am currently looking to help small bussiness owners start or strengthen their digital footprint
			 in the modern world of technology. My skillset allows me to build basic yet elegant websites that are fully
			 functional and mobile friendly so your business can be viewd by everyone!</p>
	  </div>

	  <div class="card-deck">
		  <div class="card">
			  <div class="card-body">
				  <h4 class="card-title">Skills</h4>
				  <ul class="card-text">
					  <li>write HTML and CSS</li>
					  <li>wireframe/layout a website or web application </li>
					  <li>write a basic application in an object-oriented programming language</li>
					  <li>Deploy websites to website host</li>
				  </ul>
			  </div>
		  </div>
		  <div class="card">
			  <div class="card-body">
				  <h4 class="card-title">Programing/Software background</h4>
				  <ul class="card-text">
					  <li>HTML5</li>
					  <li>GitHub</li>
					  <li>CSS3</li>
					  <li>Object Oriented Programming</li>
					  <li>PHP and PHP Unit</li>
					  <li>Javascript</li>
					  <li>Angular</li>
					  <li>MySQL</li>
					  <li>jQuery</li>
					  <li>Bootstrap</li>
				  </ul>
			  </div>
		  </div>
		  <div class="card">
			  <div class="card-body">
				  <h4 class="card-title">Titles</h4>
				  <ul class="card-text">
					  <li>Jr.Web developer</li>
					  <li>Jr.Program writer</li>
					  <li></li>
				  </ul>
			  </div>
		  </div>
	  </div>
	  <div class="col-md-12">
		  <h2 class="heading">Contact</h2>
		  <div class="row">

			  <!-- Social Media Links -->


			  </div><!--/.social links-->
			  <!-- Contact Form Section -->
			  <div class="col-md-6 col-md-offset-3">
				  <!-- BEGIN CONTACT FORM -->
				  <form id="contact-form" method="post" action="php/mailer.php"  novalidate>
					  <div class="form-group">
						  <label for="name">Name</label>
						  <div class="input-group">
							  <div class="input-group-addon">
								  <i class="fa fa-user"></i>
							  </div>
							  <input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
						  </div>
					  </div>
					  <div class="form-group">
						  <label for="email">Email</label>
						  <div class="input-group">
							  <div class="input-group-addon">
								  <i class="fa fa-envelope"></i>
							  </div>
							  <input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
						  </div>
					  </div>
					  <div class="form-group">
						  <label for="subject">Subject</label>
						  <div class="input-group">
							  <div class="input-group-addon">
								  <i class="fa fa-pencil"></i>
							  </div>
							  <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
						  </div>
					  </div>
					  <div class="form-group">
						  <label for="message">Message</label>
						  <div class="input-group">
							  <div class="input-group-addon">
								  <i class="fa fa-comment"></i>
							  </div>
							  <textarea rows="5" id="message" name="message" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>

						  </div>
					  </div>
					  <!-- Google reCAPTCHA -->
					  <div class="g-recaptcha" data-sitekey="6LdhnzoUAAAAAE0drDieHh4BWfb7wfH4kUkza5pv"></div>

					  <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Submit</button>
					  <button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				  </form>
				  <!-- END CONTACT FORM-->

				  <!-- EMPTY FORM OUTPUT AREA -->
				  <div class="row">
					  <div class="col-md-6">
						  <div id="output-area"></div>
					  </div>
				  </div>

			  </div>

		  </div>
		  <div class="row copyright">
			  <div class="col-md-4 col-md-offset-4">
				  <p>©2017</p>
			  </div>
		  </div>
	  </div>
  </body>
</html>
