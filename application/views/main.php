<?php include('includes/header.php'); ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Happy City</a>
        </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0yMZ-04ud_Q" frameborder="0" allowfullscreen></iframe>
        </div>
        <p>   </p>
        <p>It only takes one minute to complete the survey.</p>
        <p><a class="btn btn-primary btn-lg" href="survey.html" role="button">Take the survey! &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h2>Timisoara</h2></div>
            <div class="col-md-6"></div>
          </div>
        <div class="embed-responsive embed-responsive-4by3">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0yMZ-04ud_Q" frameborder="0" allowfullscreen></iframe>
        </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h2>Bucuresti</h2></div>
            <div class="col-md-6"></div>
          </div>
        <div class="embed-responsive embed-responsive-4by3" >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0yMZ-04ud_Q" frameborder="0" allowfullscreen></iframe>
        </div>
       </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h2>Cluj</h2></div>
            <div class="col-md-6"></div>
          </div>     
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>

         <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h2>Bacau</h2></div>
            <div class="col-md-6"></div>
          </div>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      <hr>
      <footer>
        <p>&copy; Happy City</p>
      </footer>
    </div> <!-- /container -->



		<?php if (@$userData['first_name']) { ?>
			Salut <?= $userData['first_name'] ?>, <?= $userData['location']['name'] ?>
		<?php } else { ?>
			<a href="<?= $loginUrl ?>">Login with Facebook</a>
		<?php } ?>		
	


<?php include('includes/footer.php'); ?>