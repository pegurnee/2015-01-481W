<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $creditCard->number],
                ['confirm' => __('Are you sure you want to delete # {0}?', $creditCard->number)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Credit Card'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="creditCard form large-10 medium-9 columns">
    <?= $this->Form->create($creditCard); ?>
    <fieldset>
        <legend><?= __('Edit Credit Card') ?></legend>
        <?php
            echo $this->Form->input('ccv');
            echo $this->Form->input('type');
            echo $this->Form->input('expiration');
            echo $this->Form->input('name_on_card');
            echo $this->Form->input('issuer');
            echo $this->Form->input('pin_number');
            echo $this->Form->input('associated_zip');
            echo $this->Form->input('customer._ids', ['options' => $customer]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
