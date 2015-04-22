<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Credit Card'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="creditCard index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('number') ?></th>
            <th><?= $this->Paginator->sort('ccv') ?></th>
            <th><?= $this->Paginator->sort('expiration') ?></th>
            <th><?= $this->Paginator->sort('name_on_card') ?></th>
            <th><?= $this->Paginator->sort('issuer') ?></th>
            <th><?= $this->Paginator->sort('pin_number') ?></th>
            <th><?= $this->Paginator->sort('associated_zip') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($creditCard as $creditCard): ?>
        <tr>
            <td><?= h($creditCard->number) ?></td>
            <td><?= h($creditCard->ccv) ?></td>
            <td><?= h($creditCard->expiration) ?></td>
            <td><?= h($creditCard->name_on_card) ?></td>
            <td><?= h($creditCard->issuer) ?></td>
            <td><?= $this->Number->format($creditCard->pin_number) ?></td>
            <td><?= $this->Number->format($creditCard->associated_zip) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $creditCard->number]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $creditCard->number]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $creditCard->number], ['confirm' => __('Are you sure you want to delete # {0}?', $creditCard->number)]) ?>
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
