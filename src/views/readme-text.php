<?= $config->readme->renderH1($config->package->headline ?: $config->package->title) ?>

<?php if ($config->package->headline) : ?>
<?= $config->package->title ?>

<?php endif ?>
<?php if ($config->package->description) : ?>
<?= $config->readme->renderText($config->package->description) ?>
<?php endif ?>
<?= $config->readme->renderSections() ?>
