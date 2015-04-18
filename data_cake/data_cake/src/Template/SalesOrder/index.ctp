<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Sales Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="salesOrder index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('total_cost') ?></th>
            <th><?= $this->Paginator->sort('submit_date') ?></th>
            <th><?= $this->Paginator->sort('shipping_cost') ?></th>
            <th><?= $this->Paginator->sort('delivery_date') ?></th>
            <th><?= $this->Paginator->sort('contact_phone_area_code') ?></th>
            <th><?= $this->Paginator->sort('contact_phone_number') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($salesOrder as $salesOrder): ?>
        <tr>
            <td><?= $this->Number->format($salesOrder->id) ?></td>
            <td><?= $this->Number->format($salesOrder->total_cost) ?></td>
            <td><?= h($salesOrder->submit_date) ?></td>
            <td><?= $this->Number->format($salesOrder->shipping_cost) ?></td>
            <td><?= h($salesOrder->delivery_date) ?></td>
            <td><?= $this->Number->format($salesOrder->contact_phone_area_code) ?></td>
            <td><?= $this->Number->format($salesOrder->contact_phone_number) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $salesOrder->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salesOrder->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salesOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesOrder->id)]) ?>
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
