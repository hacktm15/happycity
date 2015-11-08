<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>
    
<div class="jumbotron">
    <div class="container">

		<div class="row">

            <div class="col-md-4 text-center">
                <p class="indice"><?=$cities['national']['value']; ?></p>
                <p class="indice-trend">
                    <?php if ($cities['national']['variation'] > 0): ?>
                        <span class="trend-positive"><i class="fa fa-arrow-up"></i> <?=$cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php elseif ($cities['national']['variation'] < 0): ?>
                        <span class="trend-negative"><i class="fa fa-arrow-down"></i> <?=$cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php else: ?>
                        <span class="trend-positive"><i class="fa fa-arrow-right"></i> <?=$cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-md-8">
                <h1>City Happiness Index</h1>
                <p>CHI este indicele fericirii. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt neque nunc, sed dapibus odio ullamcorper pulvinar.</p>
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
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['Timisoara']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Timisoara']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="https://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2>Brașov</h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['Brasov']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Brasov']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="https://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>
<?php /*
    <div class="row">

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 city-label"><h2>București</h2></div>
                <div class="col-md-6 city-indice"><h2><?= $cities['Bucuresti']['value'] ?></h2></div>
            </div>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 city-label"><h2>Cluj-Napoca</h2></div>
                <div class="col-md-6 city-indice"><h2><?= $cities['Cluj']['value'] ?></h2></div>
            </div>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
            </div>
        </div>
    </div>
*/ ?>
    <div class="row">

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2>Constanța</h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['Constanta']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Constanta']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=4&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2>Oradea</h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['Oradea']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Oradea']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=5&fullscreen&from=now-15m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <?php $this->view('includes/credits'); ?>

</div> <!-- /container -->

<?php $this->view('includes/footer'); ?>