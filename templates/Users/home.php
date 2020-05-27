<?php

/**
 * @var \App\View\AppView $this
 */
?>

<section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Tu espacio personal</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1">Notas</a></li>
                        <li><a href="#page-2">Etiquetas</a></li>
                        <li><a href="#page-3">Carpetas</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page bg-light one">
                    <div class="row">
                        <div class="col-8">
                            <h2 class="heading">Notas</h2>
                        </div>
                        <div class="col-4 text-right">
                            <?= $this->Html->link(
                                __('Crear'),
                                ['controller' => 'Notes', 'action' => 'add'],
                                ['class' => 'btn btn-primary py-3 px-4']
                            ) ?>
                        </div>
                    </div>
                    <?= $this->element('notesTable') ?>
                </div>
                <div id="page-2" class="page bg-light one">
                    <div class="row">
                        <div class="col-8">
                            <h2 class="heading">Etiquetas</h2>
                        </div>
                        <div class="col-4 text-right">
                            <?= $this->Html->link(
                                __('Crear'),
                                ['controller' => 'Tags', 'action' => 'add'],
                                ['class' => 'btn btn-primary py-3 px-4']
                            ) ?>
                        </div>
                    </div>
                    <?= $this->element('tagsTable') ?>
                </div>
                <div id="page-3" class="page bg-light one">
                    <div class="row">
                        <div class="col">
                            <h2 class="heading">Carpetas</h2>
                        </div>
                        <div class="col text-right">
                            <?= $this->Html->link(
                                __('Gestionar'),
                                ['controller' => 'Folders', 'action' => 'index'],
                                ['class' => 'btn btn-outline-primary py-3 px-4']
                            ) ?>
                            <?= $this->Html->link(
                                __('Crear'),
                                ['controller' => 'Folders', 'action' => 'add'],
                                ['class' => 'btn btn-primary py-3 px-4']
                            ) ?>
                        </div>
                    </div>
                    <?= $this->element('foldersTable') ?>
                </div>
            </div>
        </div>
    </div>
</section>
