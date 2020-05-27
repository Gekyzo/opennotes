<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * @var \App\View\AppView $this
 */

?>

<section class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/undraw_book_lover_mkck.svg" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Los apuntes del siglo XXI</span>
                    <h1>Todas tus notas en un único sitio</h1>
                    <p>OpenNotes utiliza <b>carpetas y etiquetas</b> para organizar todas tus notas.</p>
                    <p>Además, gracias al lenguaje Markdown, escribir las notas es <b>más fácil y rápido</b> que nunca.</p>
                    <?= $this->Html->link(
                        __('Comenzar'),
                        ['controller' => 'Users', 'action' => 'register'],
                        ['class' => 'btn btn-primary py-3 px-4']
                    ) ?>
                </div>
            </div>
        </div>
    </div>
</section>
