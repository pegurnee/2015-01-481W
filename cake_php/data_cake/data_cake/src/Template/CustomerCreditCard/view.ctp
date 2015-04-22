<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer Credit Card'), ['action' => 'edit', $customerCreditCard->customer_username]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Credit Card'), ['action' => 'delete', $customerCreditCard->customer_username], ['confirm' => __('Are you sure you want to delete # {0}?', $customerCreditCard->customer_username)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Credit Card'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Credit Card'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customerCreditCard view large-10 medium-9 columns">
    <h2><?= h($customerCreditCard->customer_username) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer Username') ?></h6>
            <p><?= h($customerCreditCard->customer_username) ?></p>
            <h6 class="subheader"><?= __('Credit Card Number') ?></h6>
            <p><?= h($customerCreditCard->credit_card_number) ?></p>
        </div>
    </div>
</div>
