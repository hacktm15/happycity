<?php $this->view('includes/header'); ?>
<div class="fb-share-button" data-href="https://<?= $_SERVER['HTTP_HOST']?>/index.php/survey/" data-layout="button_count"></div>

    <p>Pe o scara de la 1 la 5, cu 1 fiind 'Dezacord Total' si 5 fiind 'Acord Total', raspunde la urmatoarele
    intrebari:</p>

  <form action="/survey/submit" method="post">
    <?php foreach ($questions as $id => $text): ?>
      <div class="row">
        <div class="col-md-6">
          <p><?=$id; ?> <?=$text; ?></p>
        </div>
        <div class="col-md-6">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input name="questions[<?=$id; ?>]" value="1" type="radio" autocomplete="off"> 1
            </label>
            <label class="btn btn-primary">
              <input name="questions[<?=$id; ?>]" value="2" type="radio" autocomplete="off"> 2
            </label>
            <label class="btn btn-primary">
              <input name="questions[<?=$id; ?>]" value="3" type="radio" autocomplete="off"> 3
            </label>
            <label class="btn btn-primary">
              <input name="questions[<?=$id; ?>]" value="4" type="radio" autocomplete="off"> 4
            </label>
            <label class="btn btn-primary">
              <input name="questions[<?=$id; ?>]" value="5" type="radio" autocomplete="off"> 5
            </label>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <p>
      <button type="submit" class="btn btn-primary btn-success btn-lg">Make it count!</button>
    </p>

  </form>

<?php $this->view('includes/footer'); ?>