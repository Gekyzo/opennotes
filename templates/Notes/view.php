<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Note $note
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Note'), ['action' => 'edit', $note->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Note'), ['action' => 'delete', $note->id], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Note'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="notes view content">
            <h3><?= h($note->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $note->has('user') ? $this->Html->link($note->user->name, ['controller' => 'Users', 'action' => 'view', $note->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($note->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($note->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($note->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($note->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($note->deleted) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($note->body)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Folders') ?></h4>
                <?php if (!empty($note->folders)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Parent Id') ?></th>
                                <th><?= __('Lft') ?></th>
                                <th><?= __('Rght') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($note->folders as $folders) : ?>
                                <tr>
                                    <td><?= h($folders->id) ?></td>
                                    <td><?= h($folders->name) ?></td>
                                    <td><?= h($folders->parent_id) ?></td>
                                    <td><?= h($folders->lft) ?></td>
                                    <td><?= h($folders->rght) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Folders', 'action' => 'view', $folders->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Folders', 'action' => 'edit', $folders->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Folders', 'action' => 'delete', $folders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $folders->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tags') ?></h4>
                <?php if (!empty($note->tags)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($note->tags as $tags) : ?>
                                <tr>
                                    <td><?= h($tags->id) ?></td>
                                    <td><?= h($tags->name) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
