<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>
    
<div class="jumbotron">
    <div class="container">

		<div class="row">

            <div class="col-md-4 text-center">
                <p class="indice"><?=$cities['national']; ?></p>
                <p class="indice-trend"><span class="trend-positive"><i class="fa fa-arrow-up"></i> 20%</span> față de săptămâna trecută</p>
            </div>

            <div class="col-md-8">
                <h1>Gross City Happiness</h1>
                <p>GCH este indicele fericirii. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt neque nunc, sed dapibus odio ullamcorper pulvinar.</p>
                <?php $this->view('includes/friends'); ?>

                <p>
                <?php if (@$userData['first_name']) { ?>
                    <a class="btn btn-primary btn-lg" href="/survey" role="button">Completează și tu sondajul &raquo;</a>
                <?php } else { ?>
                    <a class="btn btn-primary btn-lg" href="<?= $loginUrl ?>" role="button">Login cu Facebook &raquo;</a>
                <?php } ?>
                </p>
            </div>
    </div>
		
	</div>
</div>

<div class="container">

	<div class="row">

		<div class="col-md-6">
			<div class="row">
                                <div class="col-md-6 city-label"><h2>Timișoara</h2></div>
                                <div class="col-md-6 city-indice"><h2><?= $cities['Timisoara'] ?></h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                                <div class="col-md-6 city-label"><h2>Brașov</h2></div>
                                <div class="col-md-6 city-indice"><h2><?= $cities['Brasov'] ?></h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 city-label"><h2>București</h2></div>
                <div class="col-md-6 city-indice"><h2><?= $cities['Bucuresti'] ?></h2></div>
            </div>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 city-label"><h2>Cluj-Napoca</h2></div>
                <div class="col-md-6 city-indice"><h2><?= $cities['Cluj'] ?></h2></div>
            </div>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
            </div>
        </div>

    </div>

    <div class="row">

		<div class="col-md-6">
			<div class="row">
                                <div class="col-md-6 city-label"><h2>Constanța</h2></div>
                                <div class="col-md-6 city-indice"><h2><?= $cities['Constanta'] ?></h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=4&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                                <div class="col-md-6 city-label"><h2>Oradea</h2></div>
                                <div class="col-md-6 city-indice"><h2><?= $cities['Oradea'] ?></h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=5&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <?php $this->view('includes/credits'); ?>

</div> <!-- /container -->

<?php $this->view('includes/footer'); ?>