<?php $this->view('includes/header'); ?>

    <div class="container container-survey">

        <div class="row">
            <div class="col-xs-12">
                <a href="/"><img src="/assets/img/logo.png" alt="Happy City" class="img-responsive center-block" width="300"></a>
            </div>
        </div>
        
        <div class="row ">        

            <div class="col-xs-12 text-center">
        
                <?php if (@$userData['first_name']) { ?>            
                <img class="profil" src="<?= $userData['picture']['data']['url'] ?>"><h3>Salut <?= $userData['first_name'] ?>!</h3>
                <?php } ?>                
            </div>

            <div class="col-xs-12 text-center">                
                <?php $this->view('includes/friends'); ?>
            </div>

            <form action="https://<?= $_SERVER['HTTP_HOST'] ?>/survey/submit" method="post">
            <?php foreach ($questions as $id => $text): ?>
                <div class="row row-form">
                    <div class="col-xs-12">
                        <h2><?=$id; ?>. <?=$text; ?></h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="1" type="radio" autocomplete="off">În niciun caz
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="2" type="radio" autocomplete="off">Nu
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="3" type="radio" autocomplete="off">Poate
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="4" type="radio" autocomplete="off">Da
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="5" type="radio" autocomplete="off">Cu siguranţă
                          </label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="row row-form-btn">
              <div class="col-xs-12 text-center">
                <p>
                  <button type="submit" class="btn btn-primary btn-lg">Trimite răspunsurile</button>
                </p>
              </div>
            </div>

          </form>


<?php $this->view('includes/credits'); ?>
        </div>

    </div>

<?php $this->view('includes/footer'); ?>