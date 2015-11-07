<?php $this->view('includes/header'); ?>
    
<div class="jumbotron">
        <div class="container">
	<h1>Gross City Happiness (GCH)</h1>
	<p>GCH este indicele fericirii :)</p>
	<?php if (!empty($friends)) { ?>
	<p><h3>Prietenii tai au completat deja sondajul!</h3>
		<ul>
	    <?php foreach ($friends as $val) { ?>
	      <li><img src="<?= $val['avatar'] ?>" title="<?= $val['name'] ?>" alt="<?= $val['name'] ?>"></li>
	    <?php } ?>
	    </ul>
    </p>
    <?php } ?>
	
	<p>
	<?php if (@$userData['first_name']) { ?>
		<a class="btn btn-primary btn-lg" href="/survey" role="button">Completează sondajul &raquo;</a>        
    <?php } else { ?>        
        <a class="btn btn-primary btn-lg" href="<?= $loginUrl ?>" role="button">Login cu Facebook &raquo;</a>        
    <?php } ?>          
    </p>
	</div>
</div>

<div class="container">

        <div class="row">

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6"><h2>Timisoara</h2></div>
			<div class="col-md-6 trend-positive"><h2>+10%</h2></div>
		</div>
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001" width="450" height="200" frameborder="0"></iframe>
		</div>
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6"><h2>Cluj-Napoca</h2></div>
			<div class="col-md-6 trend-negative"><h2>-5,23%</h2></div>
		</div>
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001" width="450" height="200" frameborder="0"></iframe>
		</div>
	</div>

    </div>

        <div class="row">

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6"><h2>București</h2></div>
			<div class="col-md-6 trend-negative"><h2>-7%</h2></div>
		</div>
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001" width="450" height="200" frameborder="0"></iframe>
		</div>
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6"><h2>Bacău</h2></div>
			<div class="col-md-6 trend-positive"><h2>+3%</h2></div>
		</div>
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001" width="450" height="200" frameborder="0"></iframe>
		</div>
	</div>

    </div>

        <hr>
        <footer>
        <p>&copy; Happy City</p>
        </footer>

</div> <!-- /container -->

<?php include('includes/footer.php'); ?>