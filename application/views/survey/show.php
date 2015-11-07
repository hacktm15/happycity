<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>

    <p>Pe o scara de la 1 la 5, cu 1 fiind 'Dezacord Total' si 5 fiind 'Acord Total', raspunde la urmatoarele
    intrebari:</p>

  <form action="/index.php/survey/submit" method="post">
    <?php foreach ($questions as $id => $text): ?>
      <div class="row">
        <div class="col-md-6">
          <p><?=$id; ?> <?=$text; ?></p>
        </div>
        <div class="col-md-6">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input name="question[<?=$id; ?>][1]" type="checkbox" autocomplete="off"> 1
            </label>
            <label class="btn btn-primary">
              <input name="question[<?=$id; ?>][2]" type="checkbox" autocomplete="off"> 2
            </label>
            <label class="btn btn-primary">
              <input name="question[<?=$id; ?>][3]" type="checkbox" autocomplete="off"> 3
            </label>
            <label class="btn btn-primary">
              <input name="question[<?=$id; ?>][4]" type="checkbox" autocomplete="off"> 4
            </label>
            <label class="btn btn-primary">
              <input name="question[<?=$id; ?>][5]" type="checkbox" autocomplete="off"> 5
            </label>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <p>
      <button type="submit" class="btn btn-primary btn-success btn-lg">Make it count!</button>
    </p>

  </form>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>