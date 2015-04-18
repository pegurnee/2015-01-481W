<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Shipping Zone'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="shippingZone index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('code') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('deliver_time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($shippingZone as $shippingZone): ?>
        <tr>
            <td><?= h($shippingZone->code) ?></td>
            <td><?= $this->Number->format($shippingZone->price) ?></td>
            <td><?= $this->Number->format($shippingZone->deliver_time) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $shippingZone->code]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shippingZone->code]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shippingZone->code], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingZone->code)]) ?>
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
