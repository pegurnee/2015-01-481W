<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('street_address') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th><?= $this->Paginator->sort('state') ?></th>
            <th><?= $this->Paginator->sort('zip') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($addresses as $address): ?>
        <tr>
            <td><?= $this->Number->format($address->id) ?></td>
            <td><?= h($address->street_address) ?></td>
            <td><?= h($address->city) ?></td>
            <td><?= h($address->state) ?></td>
            <td><?= $this->Number->format($address->zip) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $address->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
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
