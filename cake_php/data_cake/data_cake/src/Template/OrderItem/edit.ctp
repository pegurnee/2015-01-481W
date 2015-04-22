<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderItem->order_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->order_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Order Item'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sales Order'), ['controller' => 'SalesOrder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['controller' => 'SalesOrder', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderItem form large-10 medium-9 columns">
    <?= $this->Form->create($orderItem); ?>
    <fieldset>
        <legend><?= __('Edit Order Item') ?></legend>
        <?php
            echo $this->Form->input('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
