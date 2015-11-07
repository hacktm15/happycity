<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
    <img src="/assets/img/logo.png" alt="Happy City">
      </a>
    </div>
    <div class="navbar-right">      
        <?php if (@$userData['first_name']) { ?>
        <p class="welcome welcome-logged">
            <img src="<?= $userData['picture']['data']['url'] ?>"> <?= $userData['first_name'] ?>, bine ai venit!
        </p>
        <?php } else { ?>
        <p class="welcome">
            <a href="<?= $loginUrl ?>"><i class="fa fa-facebook-square"></i><b>Login cu Facebook</b></a>
        </p>
        <?php } ?>          
        
    </div>
  </div>
</nav>