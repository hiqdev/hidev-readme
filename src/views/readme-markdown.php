<?= $component->renderH1($app->package->headline ?: $app->package->title) ?>
<?php if ($app->package->headline) : ?>
<?= $component->renderBold($app->package->title) ?>
<?php endif ?>
<?= $component->renderBadges() ?>
<?php if ($app->package->description) : ?>
<?= $component->renderText($app->package->description) ?>
<?php endif ?>
<?= $component->renderSections() ?>
