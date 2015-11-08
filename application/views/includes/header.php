<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy City Index - Un indice care măsoară succesul, bunăstarea, progresul unui oraș. Cu alte cuvinte, măsurăm fericirea.</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="/assets/css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    



    <script type="text/javascript">
      // Test for the ugliness.
      if (window.location.hash == '#_=_'){

          // Check if the browser supports history.replaceState.
          if (history.replaceState) {

              // Keep the exact URL up to the hash.
              var cleanHref = window.location.href.split('#')[0];

              // Replace the URL in the address bar without messing with the back button.
              history.replaceState(null, null, cleanHref);

          } else {

              // Well, you're on an old browser, we can get rid of the _=_ but not the #.
              window.location.hash = '';

          }

      }
    </script>

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
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=559352467574102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
      
 