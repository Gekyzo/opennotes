<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Folder $folder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Folders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="folders form content">
            <?= $this->Form->create($folder) ?>
            <fieldset>
                <legend><?= __('Add Folder') ?></legend>
                <?= $this->Form->control('name') ?>
                <?= $this->Form->control('parent_id', ['options' => $parentFolders, 'empty' => true]) ?>
                <?php // $this->Form->control('notes._ids', ['options' => $notes])
                ?>
                <?php // $this->Form->control('users._ids', ['options' => $users])
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
