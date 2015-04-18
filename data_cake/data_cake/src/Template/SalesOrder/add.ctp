<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Sales Order'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="salesOrder form large-10 medium-9 columns">
    <?= $this->Form->create($salesOrder); ?>
    <fieldset>
        <legend><?= __('Add Sales Order') ?></legend>
        <?php
            echo $this->Form->input('total_cost');
            echo $this->Form->input('submit_date');
            echo $this->Form->input('shipping_cost');
            echo $this->Form->input('delivery_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('delivery_status');
            echo $this->Form->input('contact_phone_area_code');
            echo $this->Form->input('contact_phone_number');
            echo $this->Form->input('customer_username');
            echo $this->Form->input('address_id', ['options' => $address]);
            echo $this->Form->input('credit_card_number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
