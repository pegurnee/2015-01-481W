<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Credit Card'), ['controller' => 'CreditCard', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Credit Card'), ['controller' => 'CreditCard', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customer index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('middle_initial') ?></th>
            <th><?= $this->Paginator->sort('date_of_birth') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customer as $customer): ?>
        <tr>
            <td><?= h($customer->username) ?></td>
            <td><?= h($customer->password) ?></td>
            <td><?= h($customer->email) ?></td>
            <td><?= h($customer->first_name) ?></td>
            <td><?= h($customer->last_name) ?></td>
            <td><?= h($customer->middle_initial) ?></td>
            <td><?= h($customer->date_of_birth) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customer->username]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->username]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->username], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->username)]) ?>
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
