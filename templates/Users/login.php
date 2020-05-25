<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create(null, ['id' => 'login-form']) ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <?= $this->Form->control('email', ['label' => __('field.email'), 'label' => false, 'placeholder' => 'Email']) ?>
                <?= $this->Form->control('password', ['label' => __('field.password'), 'label' => false, 'placeholder' => 'Contraseña']) ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
