<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer Addres'), ['action' => 'edit', $customerAddres->username]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Addres'), ['action' => 'delete', $customerAddres->username], ['confirm' => __('Are you sure you want to delete # {0}?', $customerAddres->username)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Addres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customerAddress view large-10 medium-9 columns">
    <h2><?= h($customerAddres->username) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($customerAddres->username) ?></p>
            <h6 class="subheader"><?= __('Addres') ?></h6>
            <p><?= $customerAddres->has('addres') ? $this->Html->link($customerAddres->addres->id, ['controller' => 'Address', 'action' => 'view', $customerAddres->addres->id]) : '' ?></p>
        </div>
    </div>
</div>
