<?php if (isset($cities[$city]) && $cities[$city]['variation'] > 0): ?>
    <span class="trend-positive"><i class="fa fa-arrow-up"></i> <?=$cities[$city]['variation']; ?>%</span>
<?php elseif (isset($cities[$city]) && $cities[$city]['variation'] < 0): ?>
    <span class="trend-negative"><i class="fa fa-arrow-down"></i> <?=$cities[$city]['variation']; ?>%</span>
<?php else: ?>
    <span class="trend-positive"><i class="fa fa-arrow-right"></i> <?=empty($cities[$city]['variation']) ? '0' : $cities[$city]['variation']; ?>%</span>
<?php endif; ?>