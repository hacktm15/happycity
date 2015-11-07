
<?php $this->view('includes/header'); ?>

    <div class="container">

        <a href="/"><img src="/assets/img/logo.png" alt="Happy City" class="img-responsive center-block"></a>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>
                <?php if (@$userData['first_name']) { ?>            
                    <div class="friends">
                        <img src="<?= $userData['picture']['data']['url'] ?>"> <?= $userData['first_name'] ?>, îți mulțumim frumos!
                <?php } ?>
                    </div>
                </h2>
                <div class="fb-share-button" data-href="http://<?= $_SERVER['HTTP_HOST']?>/survey/" data-layout="button_count"></div>
                <br><br><br><br><br><br>
            </div>

        </div>

        <?php $this->view('includes/credits'); ?>

    </div>

<?php $this->view('includes/footer'); ?>