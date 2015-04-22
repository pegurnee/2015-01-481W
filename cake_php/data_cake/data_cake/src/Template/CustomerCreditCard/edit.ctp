<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerCreditCard->customer_username],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerCreditCard->customer_username)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer Credit Card'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="customerCreditCard form large-10 medium-9 columns">
    <?= $this->Form->create($customerCreditCard); ?>
    <fieldset>
        <legend><?= __('Edit Customer Credit Card') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
