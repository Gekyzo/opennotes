<?php

/**
 * @var \App\View\AppView $this
 */

if ($folders->count()) : ?>

    <?php foreach ($folders as $folder) : ?>

        <?= $this->Html->link(h($folder->name), ['action' => 'view', $folder->id], ['class' => 'btn btn-outline-primary no-radius py-3 px-4']) ?>

    <?php endforeach; ?>

<?php else : ?>

    <p>Todavía no has creado ninguna carpeta.</p>

<?php endif; ?>
