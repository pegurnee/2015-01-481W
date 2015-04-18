<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Sales Order'), ['action' => 'edit', $salesOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sales Order'), ['action' => 'delete', $salesOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sales Order'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sales Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="salesOrder view large-10 medium-9 columns">
    <h2><?= h($salesOrder->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer Username') ?></h6>
            <p><?= h($salesOrder->customer_username) ?></p>
            <h6 class="subheader"><?= __('Addres') ?></h6>
            <p><?= $salesOrder->has('addres') ? $this->Html->link($salesOrder->addres->id, ['controller' => 'Address', 'action' => 'view', $salesOrder->addres->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Credit Card Number') ?></h6>
            <p><?= h($salesOrder->credit_card_number) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($salesOrder->id) ?></p>
            <h6 class="subheader"><?= __('Total Cost') ?></h6>
            <p><?= $this->Number->format($salesOrder->total_cost) ?></p>
            <h6 class="subheader"><?= __('Shipping Cost') ?></h6>
            <p><?= $this->Number->format($salesOrder->shipping_cost) ?></p>
            <h6 class="subheader"><?= __('Contact Phone Area Code') ?></h6>
            <p><?= $this->Number->format($salesOrder->contact_phone_area_code) ?></p>
            <h6 class="subheader"><?= __('Contact Phone Number') ?></h6>
            <p><?= $this->Number->format($salesOrder->contact_phone_number) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Submit Date') ?></h6>
            <p><?= h($salesOrder->submit_date) ?></p>
            <h6 class="subheader"><?= __('Delivery Date') ?></h6>
            <p><?= h($salesOrder->delivery_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Delivery Status') ?></h6>
            <?= $this->Text->autoParagraph(h($salesOrder->delivery_status)); ?>

        </div>
    </div>
</div>
