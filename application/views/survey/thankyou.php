
<?php $this->view('includes/header'); ?>

    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h2>
                <?php if (@$userData['first_name']) { ?>            
                <img src="<?= $userData['picture']['data']['url'] ?>"> <?= $userData['first_name'] ?>, îți mulțumim frumos!
                <?php } ?>
                </h2>
                <div class="fb-share-button" data-href="http://<?= $_SERVER['HTTP_HOST']?>/survey/" data-layout="button_count"></div>
            </div>

        </div>

    </div>

<?php $this->view('includes/footer'); ?>