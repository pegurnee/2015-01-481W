<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="admin index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($admin as $admin): ?>
        <tr>
            <td><?= h($admin->username) ?></td>
            <td><?= h($admin->password) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $admin->username]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->username]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->username], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->username)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
