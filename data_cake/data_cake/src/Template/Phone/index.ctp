<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="phone index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('area_code') ?></th>
            <th><?= $this->Paginator->sort('number') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($phone as $phone): ?>
        <tr>
            <td><?= $this->Number->format($phone->area_code) ?></td>
            <td><?= $this->Number->format($phone->number) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $phone->area_code]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phone->area_code]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phone->area_code], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->area_code)]) ?>
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
