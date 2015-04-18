<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Shipping Zone'), ['action' => 'edit', $shippingZone->code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipping Zone'), ['action' => 'delete', $shippingZone->code], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingZone->code)]) ?> </li>
        <li><?= $this->Html->link(__('List Shipping Zone'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping Zone'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shippingZone view large-10 medium-9 columns">
    <h2><?= h($shippingZone->code) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Code') ?></h6>
            <p><?= h($shippingZone->code) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($shippingZone->price) ?></p>
            <h6 class="subheader"><?= __('Deliver Time') ?></h6>
            <p><?= $this->Number->format($shippingZone->deliver_time) ?></p>
        </div>
    </div>
</div>
