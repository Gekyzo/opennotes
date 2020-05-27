<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$user ??= null;
?>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">

        <div class="row no-gutters block-9">
            <div class="col-md-6 d-flex">
                <?= $this->Form->create($user, ['class' => 'bg-light p-4 p-md-5 contact-form']) ?>

                <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary py-3 px-5']) ?>
                </div>
                <?= $this->Form->end() ?>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="map"></div>
                <!-- <div class="img" style="background-image: url(images/about.jpg);"></div> -->
            </div>
        </div>
    </div>
</section>
