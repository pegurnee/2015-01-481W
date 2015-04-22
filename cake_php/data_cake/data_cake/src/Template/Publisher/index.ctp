<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Publisher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Book'), ['controller' => 'Book', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Book', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="publisher index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('code') ?></th>
            <th><?= $this->Paginator->sort('num_books') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($publisher as $publisher): ?>
        <tr>
            <td><?= $this->Number->format($publisher->id) ?></td>
            <td><?= h($publisher->name) ?></td>
            <td><?= h($publisher->code) ?></td>
            <td><?= $this->Number->format($publisher->num_books) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $publisher->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?>
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
