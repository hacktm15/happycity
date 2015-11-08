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