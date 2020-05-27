<?php

/**
 * @var \App\View\AppView $this
 */
$currentUser ??= null;
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <?= $this->Html->link(
            __('OpenNotes'),
            ['controller' => 'Users', 'action' => 'home'],
            ['class' => 'navbar-brand']
        ) ?>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <?php if (!$currentUser) : ?>
                    <li class="nav-item">
                        <?= $this->Html->link(__('Registro'), ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link']) ?>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <?php if ($currentUser && $currentUser->role_id) {
                        echo $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']);
                    } else {
                        echo $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link']);
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
