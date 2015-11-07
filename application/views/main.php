<?php $this->view('includes/header'); ?>
    
<div class="jumbotron">
    <div class="container">

		<div class="row">

            <div class="col-md-4">
                <!-- <img src="/assets/img/logo.png" alt="Happy City" style="max-width: 100%"> -->
            </div>

            <div class="col-md-8">
                <h1>Gross City Happiness</h1>
                <p>GCH este indicele fericirii :)</p>
                <?php if (!empty($friends)) { ?>
                <div class="friends">
                    <p>Prietenii tăi au completat deja sondajul! Durează mai puțin de 2 minute!</p>
                    <ul>
                    <?php foreach ($friends as $val) { ?>
                      <li><img src="<?= $val['avatar'] ?>" title="<?= $val['name'] ?>" alt="<?= $val['name'] ?>" data-toggle="tooltip" data-placement="top" ></li>
                    <?php } ?>
                    </ul>
                </div>
                <?php } ?>

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
				<div class="col-md-6"><h2>Timisoara</h2></div>
				<div class="col-md-6 trend-positive"><h2>+10%</h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001&theme=dark" width="450" height="200" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6"><h2>Cluj-Napoca</h2></div>
				<div class="col-md-6 trend-negative"><h2>-5,23%</h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001&theme=dark" width="450" height="200" frameborder="0"></iframe>
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
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001&theme=light" width="450" height="200" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6"><h2>Bacău</h2></div>
				<div class="col-md-6 trend-positive"><h2>+3%</h2></div>
			</div>
			<div class="embed-responsive embed-responsive-4by3">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/curiosity?panelId=1&fullscreen&from=1446884495001&to=1446906095001&theme=light" width="450" height="200" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <?php $this->view('includes/credits'); ?>

</div> <!-- /container -->

<?php $this->view('includes/footer'); ?>