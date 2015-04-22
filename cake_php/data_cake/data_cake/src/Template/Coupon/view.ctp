<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Coupon'), ['action' => 'edit', $coupon->entry_code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coupon'), ['action' => 'delete', $coupon->entry_code], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->entry_code)]) ?> </li>
        <li><?= $this->Html->link(__('List Coupon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="coupon view large-10 medium-9 columns">
    <h2><?= h($coupon->entry_code) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Entry Code') ?></h6>
            <p><?= h($coupon->entry_code) ?></p>
            <h6 class="subheader"><?= __('Customer Username') ?></h6>
            <p><?= h($coupon->customer_username) ?></p>
            <h6 class="subheader"><?= __('Sales Order') ?></h6>
            <p><?= $coupon->has('sales_order') ? $this->Html->link($coupon->sales_order->id, ['controller' => 'SalesOrder', 'action' => 'view', $coupon->sales_order->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($coupon->value) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Expiration Date') ?></h6>
            <p><?= h($coupon->expiration_date) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Used') ?></h6>
            <p><?= $coupon->used ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
