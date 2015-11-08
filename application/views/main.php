<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>
    
<div class="jumbotron">
    <div class="container">

		<div class="row">

            <div class="col-md-4 text-center">
                <p class="indice"><?=empty($cities['national']['value']) ? '??' : $cities['national']['value']; ?></p>
                <p class="indice-trend">
                    <?php if (isset($cities['national']) && $cities['national']['variation'] > 0): ?>
                        <span class="trend-positive"><i class="fa fa-arrow-up"></i> <?=empty($cities['national']['variation']) ? '--' : $cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php elseif (isset($cities['national']) && $cities['national']['variation'] < 0): ?>
                        <span class="trend-negative"><i class="fa fa-arrow-down"></i> <?=empty($cities['national']['variation']) ? '--' : $cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php else: ?>
                        <span class="trend-positive"><i class="fa fa-arrow-right"></i> <?=empty($cities['national']['variation']) ? '--' : $cities['national']['variation']; ?>%</span> față de săptămâna trecută
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-md-8">
                <h1>City Happiness Index</h1>
                <p>CHI este un indice alternativ la metodele tradiționale care măsoară succesul, bunăstarea, progresul unui oraș.
Cu alte cuvinte, <strong>măsurăm fericirea</strong>.</p>
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
                <div class="col-md-6 city-label"><h2><a href="/timisoara">Timișoara</a></h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['timisoara']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Timisoara']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=2&fullscreen&from=now-6m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2><a href="/brasov">Brașov</h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['brasov']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Brasov']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
	            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=4&fullscreen&from=now-6m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <div class="row">

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2><a href="/constanta">București</a></h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['bucuresti']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Constanta']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=3&fullscreen&from=now-6m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
                <div class="col-md-6 city-label"><h2><a href="/oradea">Cluj Napoca</a></h2></div>
                <div class="col-md-6 city-indice">
                    <h2><?= $cities['cluj-napoca']['value'] ?><?php $this->view('includes/city-trend', ['city' => 'Oradea']); ?></h2>
                </div>
			</div>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=5&fullscreen&from=now-6m&to=now&theme=light" width="450" height="100" frameborder="0"></iframe>
			</div>
		</div>

    </div>

    <div class="row">
        <div class="col-md-12">

            <h2>Distribuția indicelui CHI pe orașe</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Oras</th>
                    <th>CHI Curent</th>
                    <th>CHI Precedent</th>
                    <th>Variatie (procent)</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cities as $cityName => $values): ?>
                    <tr <?=$cityName=='national' ? 'class="info"' : '' ?>>
                        <td><?=ucfirst($cityName); ?></td>
                        <td><?=$values['value']; ?></td>
                        <td><?=$values['previous_value']; ?></td>
                        <td><?=sprintf('%+0.2f', $values['variation']); ?>%</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=1&fullscreen&from=now-6m&to=now&theme=light" width="100%" height="200" frameborder="0"></iframe>
        </div>
    </div>


    <?php $this->view('includes/credits'); ?>

</div> <!-- /container -->

<?php $this->view('includes/footer'); ?>