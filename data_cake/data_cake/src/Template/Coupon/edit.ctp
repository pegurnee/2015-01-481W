<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coupon->entry_code],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->entry_code)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coupon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="coupon form large-10 medium-9 columns">
    <?= $this->Form->create($coupon); ?>
    <fieldset>
        <legend><?= __('Edit Coupon') ?></legend>
        <?php
            echo $this->Form->input('expiration_date');
            echo $this->Form->input('value');
            echo $this->Form->input('used');
            echo $this->Form->input('customer_username');
            echo $this->Form->input('order_id', ['options' => $salesOrder, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
