<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customer->username],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->username)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Credit Card'), ['controller' => 'CreditCard', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Credit Card'), ['controller' => 'CreditCard', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customer form large-10 medium-9 columns">
    <?= $this->Form->create($customer); ?>
    <fieldset>
        <legend><?= __('Edit Customer') ?></legend>
        <?php
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('middle_initial');
            echo $this->Form->input('date_of_birth', array('empty' => true, 'default' => ''));
            echo $this->Form->input('loyalty_points');
            echo $this->Form->input('one_click_buying');
            echo $this->Form->input('prime_member');
            echo $this->Form->input('phone_area_code');
            echo $this->Form->input('phone_number');
            echo $this->Form->input('address_id');
            echo $this->Form->input('card_number');
            echo $this->Form->input('address._ids', ['options' => $address]);
            echo $this->Form->input('credit_card._ids', ['options' => $creditCard]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
