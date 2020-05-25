<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Folder $folder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Folder'), ['action' => 'edit', $folder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Folder'), ['action' => 'delete', $folder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $folder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Folders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Folder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="folders view content">
            <h3><?= h($folder->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($folder->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Folder') ?></th>
                    <td><?= $folder->has('parent_folder') ? $this->Html->link($folder->parent_folder->name, ['controller' => 'Folders', 'action' => 'view', $folder->parent_folder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($folder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $this->Number->format($folder->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $this->Number->format($folder->rght) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Notes') ?></h4>
                <?php if (!empty($folder->notes)) : ?>
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
                        <?php foreach ($folder->notes as $notes) : ?>
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
                <?php if (!empty($folder->users)) : ?>
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
                        <?php foreach ($folder->users as $users) : ?>
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
            <div class="related">
                <h4><?= __('Related Folders') ?></h4>
                <?php if (!empty($folder->child_folders)) : ?>
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
                        <?php foreach ($folder->child_folders as $childFolders) : ?>
                        <tr>
                            <td><?= h($childFolders->id) ?></td>
                            <td><?= h($childFolders->name) ?></td>
                            <td><?= h($childFolders->parent_id) ?></td>
                            <td><?= h($childFolders->lft) ?></td>
                            <td><?= h($childFolders->rght) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Folders', 'action' => 'view', $childFolders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Folders', 'action' => 'edit', $childFolders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Folders', 'action' => 'delete', $childFolders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childFolders->id)]) ?>
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
