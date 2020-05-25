<?php

/**
 * @var \App\View\AppView $this
 */

if ($tags->count()) : ?>

    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $tag) : ?>
                <tr>
                    <td><?= $this->Number->format($tag->id) ?></td>
                    <td><?= h($tag->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else : ?>

    <p>Todavía no has creado ninguna etiqueta.</p>

<?php endif; ?>
