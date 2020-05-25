<?php

/**
 * @var \App\View\AppView $this
 */

if ($notes->count()) : ?>

    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('deleted') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $note) : ?>
                <tr>
                    <td><?= $this->Number->format($note->id) ?></td>
                    <td><?= $note->has('user') ? $this->Html->link($note->user->name, ['controller' => 'Users', 'action' => 'view', $note->user->id]) : '' ?></td>
                    <td><?= h($note->title) ?></td>
                    <td><?= h($note->created) ?></td>
                    <td><?= h($note->modified) ?></td>
                    <td><?= h($note->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $note->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $note->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $note->id], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php else : ?>

    <p>Todavía no has creado ninguna nota.</p>

<?php endif; ?>
