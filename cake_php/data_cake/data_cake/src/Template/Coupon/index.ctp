<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Coupon'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="coupon index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('entry_code') ?></th>
            <th><?= $this->Paginator->sort('expiration_date') ?></th>
            <th><?= $this->Paginator->sort('value') ?></th>
            <th><?= $this->Paginator->sort('used') ?></th>
            <th><?= $this->Paginator->sort('customer_username') ?></th>
            <th><?= $this->Paginator->sort('order_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($coupon as $coupon): ?>
        <tr>
            <td><?= h($coupon->entry_code) ?></td>
            <td><?= h($coupon->expiration_date) ?></td>
            <td><?= $this->Number->format($coupon->value) ?></td>
            <td><?= h($coupon->used) ?></td>
            <td><?= h($coupon->customer_username) ?></td>
            <td>
                <?= $coupon->has('sales_order') ? $this->Html->link($coupon->sales_order->id, ['controller' => 'SalesOrder', 'action' => 'view', $coupon->sales_order->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $coupon->entry_code]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coupon->entry_code]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coupon->entry_code], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->entry_code)]) ?>
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
