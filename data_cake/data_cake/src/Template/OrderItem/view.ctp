<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order Item'), ['action' => 'edit', $orderItem->order_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Item'), ['action' => 'delete', $orderItem->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->order_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Item'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderItem view large-10 medium-9 columns">
    <h2><?= h($orderItem->order_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Sales Order') ?></h6>
            <p><?= $orderItem->has('sales_order') ? $this->Html->link($orderItem->sales_order->id, ['controller' => 'SalesOrder', 'action' => 'view', $orderItem->sales_order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Book Isbn') ?></h6>
            <p><?= h($orderItem->book_isbn) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Quantity') ?></h6>
            <p><?= $this->Number->format($orderItem->quantity) ?></p>
        </div>
    </div>
</div>
