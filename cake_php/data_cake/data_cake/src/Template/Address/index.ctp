<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="address index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('street_address') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th><?= $this->Paginator->sort('zip') ?></th>
            <th><?= $this->Paginator->sort('state') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($address as $addres): ?>
        <tr>
            <td><?= $this->Number->format($addres->id) ?></td>
            <td><?= h($addres->street_address) ?></td>
            <td><?= h($addres->city) ?></td>
            <td><?= $this->Number->format($addres->zip) ?></td>
            <td><?= h($addres->state) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $addres->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?>
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
