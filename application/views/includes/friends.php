<?php if (!empty($friends)) { ?>
<div class="friends">
    <p>Prietenii tăi au completat deja sondajul. Durează mai puțin de 2 minute!</p>
    <ul>
    <?php foreach ($friends as $val) { ?>
      <li><img src="<?= $val['avatar'] ?>" title="<?= $val['name'] ?>" alt="<?= $val['name'] ?>" data-toggle="tooltip" data-placement="top" ></li>
    <?php } ?>
    </ul>
</div>
<?php } ?>