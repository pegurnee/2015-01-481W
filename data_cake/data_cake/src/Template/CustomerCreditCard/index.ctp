<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer Credit Card'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="customerCreditCard index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('customer_username') ?></th>
            <th><?= $this->Paginator->sort('credit_card_number') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customerCreditCard as $customerCreditCard): ?>
        <tr>
            <td><?= h($customerCreditCard->customer_username) ?></td>
            <td><?= h($customerCreditCard->credit_card_number) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customerCreditCard->customer_username]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerCreditCard->customer_username]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerCreditCard->customer_username], ['confirm' => __('Are you sure you want to delete # {0}?', $customerCreditCard->customer_username)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
