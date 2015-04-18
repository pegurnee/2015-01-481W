<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="state index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('abbreviation') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('shipping_code') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($state as $state): ?>
        <tr>
            <td><?= h($state->abbreviation) ?></td>
            <td><?= h($state->name) ?></td>
            <td><?= h($state->shipping_code) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $state->abbreviation]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $state->abbreviation]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $state->abbreviation], ['confirm' => __('Are you sure you want to delete # {0}?', $state->abbreviation)]) ?>
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
