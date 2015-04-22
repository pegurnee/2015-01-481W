<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Series Entry'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="seriesEntry index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('book_isbn') ?></th>
            <th><?= $this->Paginator->sort('series_id') ?></th>
            <th><?= $this->Paginator->sort('position') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($seriesEntry as $seriesEntry): ?>
        <tr>
            <td><?= h($seriesEntry->book_isbn) ?></td>
            <td>
                <?= $seriesEntry->has('series') ? $this->Html->link($seriesEntry->series->name, ['controller' => 'Series', 'action' => 'view', $seriesEntry->series->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($seriesEntry->position) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $seriesEntry->book_isbn]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seriesEntry->book_isbn]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seriesEntry->book_isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $seriesEntry->book_isbn)]) ?>
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
