<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phones index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('area_code') ?></th>
            <th><?= $this->Paginator->sort('number') ?></th>
            <th><?= $this->Paginator->sort('provider') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($phones as $phone): ?>
        <tr>
            <td><?= $this->Number->format($phone->id) ?></td>
            <td>
                <?= $phone->has('user') ? $this->Html->link($phone->user->name, ['controller' => 'Users', 'action' => 'view', $phone->user->id]) : '' ?>
            </td>
            <td><?= h($phone->area_code) ?></td>
            <td><?= h($phone->number) ?></td>
            <td><?= h($phone->provider) ?></td>
            <td><?= h($phone->created) ?></td>
            <td><?= h($phone->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $phone->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phone->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?>
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
