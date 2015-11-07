<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy City</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
  </head>

  <body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '559352467574102',
          xfbml      : true,
          version    : 'v2.5'
        });

        // ADD ADDITIONAL FACEBOOK CODE HERE
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));


    </script>


      <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
		<img src="/assets/img/logo.png" alt="Happy City">
          </a>
        </div>
        <div class="navbar-right">
		<p class="welcome">
			<?php if (@$userData['first_name']) { ?>
                <img src="<?= $userData['picture']['data']['url'] ?>"> <?= $userData['first_name'] ?>, bine ai venit!
            <?php } else { ?>
                <a href="<?= $loginUrl ?>">Login cu Facebook</a>
            <?php } ?>          
            </p>
        </div>
      </div>
    </nav>
 