<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>

    <div class="container">

        <div class="row">        

            <?php $this->view('includes/friends'); ?>

            <form action="/survey/submit" method="post">
            <?php foreach ($questions as $id => $text): ?>
                <div class="row row-form">
                    <div class="col-xs-12">
                        <h2><?=$id; ?>. <?=$text; ?></h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="1" type="radio" autocomplete="off">În niciun caz!
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
                            <input name="questions[<?=$id; ?>]" value="5" type="radio" autocomplete="off">Cu siguranţă!
                          </label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="row row-form-btn">
              <div class="col-xs-12">
                <p>
                  <button type="submit" class="btn btn-primary btn-lg">Trimite răspunsurile</button>
                </p>
              </div>
            </div>

          </form>

        </div>

    </div>

<?php $this->view('includes/footer'); ?>