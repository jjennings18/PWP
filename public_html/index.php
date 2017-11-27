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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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

	  <form id="contact-form" action="php/mailer.php" method="post" novalidate="novalidate">
		  <div class="form-group">
			  <label for="name">Name <span class="text-danger">*</span></label>
			  <div class="input-group">
				  <div class="input-group-addon">
					  <i class="fa fa-user" aria-hidden="true"></i>
				  </div>
				  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
			  </div>
		  </div>
		  <div class="form-group">
			  <label for="email">Email <span class="text-danger">*</span></label>
			  <div class="input-group">
				  <div class="input-group-addon">
					  <i class="fa fa-envelope" aria-hidden="true"></i>
				  </div>
				  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
		  </div>
		  <div class="form-group">
			  <label for="subject">Subject</label>
			  <div class="input-group">
				  <div class="input-group-addon">
					  <i class="fa fa-pencil" aria-hidden="true"></i>
				  </div>
				  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
			  </div>
		  </div>
		  <div class="form-group">
			  <label for="message">Message <span class="text-danger">*</span></label>
			  <div class="input-group">
				  <div class="input-group-addon">
					  <i class="fa fa-comment" aria-hidden="true"></i>
				  </div>
				  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
			  </div>
		  </div>

		  <!-- reCAPTCHA -->
		  <div class="g-recaptcha" data-sitekey="6LcaRyQUAAAAAH5YSvBO7MHX58qLhIwoPyXfvKSM"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcaRyQUAAAAAH5YSvBO7MHX58qLhIwoPyXfvKSM&amp;co=aHR0cDovL2FtYmllbnRjcmVhdGl2aXQuY29tOjgw&amp;hl=en&amp;v=r20171115120512&amp;size=normal&amp;cb=qzqejeaf1a95" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>

		  <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
		  <button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
	  </form>
  </body>
</html>
