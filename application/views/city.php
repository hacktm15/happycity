
<?php $this->view('includes/header'); ?>


    <div class="container container-anim container-fadeout">
        <a href="/"><img src="/assets/img/logo.png" alt="Happy City" class="img-responsive center-block"></a>

        <div class="row">

            <div class="col-xs-12 text-center">

                <h1>CHI <?= $city['name']; ?></h1>
                <div class="city-indice">
                    <h2><?= $city['value'] ?><?php $this->view('includes/city-trend', ['city' => $city['city_id']]); ?></h2>
                </div>

            </div>

        </div>

        <div class="embed-responsive embed-responsive-16by9">

            <iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=<?=$city['panel_id'];?>&fullscreen&from=now-6m&to=now&theme=light" width="800" height="600" frameborder="0"></iframe>

        </div>



        <?php $this->view('includes/credits'); ?>

    </div>

<?php $this->view('includes/footer'); ?>