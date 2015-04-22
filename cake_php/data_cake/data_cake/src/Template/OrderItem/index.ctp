<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderItem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('order_id') ?></th>
            <th><?= $this->Paginator->sort('book_isbn') ?></th>
            <th><?= $this->Paginator->sort('quantity') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orderItem as $orderItem): ?>
        <tr>
            <td>
                <?= $orderItem->has('sales_order') ? $this->Html->link($orderItem->sales_order->id, ['controller' => 'SalesOrder', 'action' => 'view', $orderItem->sales_order->id]) : '' ?>
            </td>
            <td><?= h($orderItem->book_isbn) ?></td>
            <td><?= $this->Number->format($orderItem->quantity) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $orderItem->order_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderItem->order_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderItem->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->order_id)]) ?>
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
