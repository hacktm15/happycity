<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>

    <div class="container">

        <div class="row">

            <p>Pe o scară de la 1 la 5, cu 1 fiind 'Dezacord Total' și 5 fiind 'Acord Total', te rugăm să răspunzi la următoarele întrebări:</p>

            <form action="/survey/submit" method="post">
            <?php foreach ($questions as $id => $text): ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h2><?=$id; ?>. <?=$text; ?></h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="1" type="radio" autocomplete="off"> 1
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="2" type="radio" autocomplete="off"> 2
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="3" type="radio" autocomplete="off"> 3
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="4" type="radio" autocomplete="off"> 4
                          </label>
                          <label class="btn btn-default">
                            <input name="questions[<?=$id; ?>]" value="5" type="radio" autocomplete="off"> 5
                          </label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <p class="text-center">
              <button type="submit" class="btn btn-primary btn-success btn-lg">Trimite răspunsurile</button>
            </p>

          </form>

        </div>

    </div>

<?php $this->view('includes/footer'); ?>