<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tag->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Notes') ?></h4>
                <?php if (!empty($tag->notes)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Title') ?></th>
                                <th><?= __('Body') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Deleted') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($tag->notes as $notes) : ?>
                                <tr>
                                    <td><?= h($notes->id) ?></td>
                                    <td><?= h($notes->user_id) ?></td>
                                    <td><?= h($notes->title) ?></td>
                                    <td><?= h($notes->body) ?></td>
                                    <td><?= h($notes->created) ?></td>
                                    <td><?= h($notes->modified) ?></td>
                                    <td><?= h($notes->deleted) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($tag->users)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Role Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Email') ?></th>
                                <th><?= __('Password') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Deleted') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($tag->users as $users) : ?>
                                <tr>
                                    <td><?= h($users->id) ?></td>
                                    <td><?= h($users->role_id) ?></td>
                                    <td><?= h($users->name) ?></td>
                                    <td><?= h($users->email) ?></td>
                                    <td><?= h($users->password) ?></td>
                                    <td><?= h($users->created) ?></td>
                                    <td><?= h($users->deleted) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
