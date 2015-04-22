<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="address form large-10 medium-9 columns">
    <?= $this->Form->create($addres); ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
        <?php
            echo $this->Form->input('street_address');
            echo $this->Form->input('city');
            echo $this->Form->input('zip');
            echo $this->Form->input('state');
            echo $this->Form->input('customer._ids', ['options' => $customer]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
