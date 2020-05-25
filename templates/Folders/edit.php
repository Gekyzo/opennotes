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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $folder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $folder->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Folders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="folders form content">
            <?= $this->Form->create($folder) ?>
            <fieldset>
                <legend><?= __('Edit Folder') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('parent_id', ['options' => $parentFolders, 'empty' => true]);
                echo $this->Form->control('notes._ids', ['options' => $notes]);
                echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
