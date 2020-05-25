<?php

/**
 * @var \App\View\AppView $this
 */

if ($folders->count()) : ?>

    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($folders as $folder) : ?>
                <tr>
                    <td><?= $this->Number->format($folder->id) ?></td>
                    <td><?= h($folder->name) ?></td>
                    <td><?= $folder->has('parent_folder') ? $this->Html->link($folder->parent_folder->name, ['controller' => 'Folders', 'action' => 'view', $folder->parent_folder->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $folder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $folder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $folder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $folder->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else : ?>

    <p>Todavía no has creado ninguna carpeta.</p>

<?php endif; ?>
