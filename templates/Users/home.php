<?php

/**
 * @var \App\View\AppView $this
 */
?>

<h1>Home!</h1>

<h2>Notas</h2>
<?= $this->Html->link(__('Nueva nota'), ['controller' => 'Notes', 'action' => 'add'], ['class' => 'button float-right']) ?>
<?= $this->element('notesTable') ?>

<h2>Etiquetas</h2>
<?= $this->Html->link(__('Nueva etiqueta'), ['controller' => 'Tags', 'action' => 'add'], ['class' => 'button float-right']) ?>
<?= $this->element('tagsTable') ?>

<h2>Carpetas</h2>
<?= $this->Html->link(__('Nueva carpeta'), ['controller' => 'Folders', 'action' => 'add'], ['class' => 'button float-right']) ?>
<?= $this->element('foldersTable') ?>
