<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Currency'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="currency index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('symbol') ?></th>
            <th><?= $this->Paginator->sort('price_multiplier') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($currency as $currency): ?>
        <tr>
            <td><?= h($currency->name) ?></td>
            <td><?= h($currency->symbol) ?></td>
            <td><?= $this->Number->format($currency->price_multiplier) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $currency->name]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $currency->name]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $currency->name], ['confirm' => __('Are you sure you want to delete # {0}?', $currency->name)]) ?>
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
