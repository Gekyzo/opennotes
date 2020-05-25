<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Folder[]|\Cake\Collection\CollectionInterface $folders
 */
?>
<div class="folders index content">
    <?= $this->Html->link(__('New Folder'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Folders') ?></h3>
    <div class="table-responsive">
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
                <?php foreach ($folders as $folder): ?>
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
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
