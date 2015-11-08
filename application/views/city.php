
<?php $this->view('includes/header'); ?>


    <div class="container container-anim container-fadeout">
        <a href="/"><img src="/assets/img/logo.png" alt="Happy City" class="img-responsive center-block"></a>

        <div class="row">

            <div class="col-md-12 text-center">

                <h1>CHI Timișoara</h1>
                <iframe src="http://happycity.xyz:3000/dashboard-solo/db/hacktm?panelId=2&fullscreen&from=now-6m&to=now&theme=light" width="800" height="500" frameborder="0"></iframe>

            </div>

        </div>

        <?php $this->view('includes/credits'); ?>

    </div>

<?php $this->view('includes/footer'); ?>