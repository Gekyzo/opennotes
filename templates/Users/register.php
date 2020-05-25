<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$user ??= null;
?>

<div class="row">
    <div class="column-responsive column-50">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Crear una cuenta') ?></legend>
                <?= $this->Form->control('name') ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password') ?>
                <?= $this->Form->control('password_repeated', ['type' => 'password']) ?>
            </fieldset>
            <?= $this->Form->button(__('Crear cuenta')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
