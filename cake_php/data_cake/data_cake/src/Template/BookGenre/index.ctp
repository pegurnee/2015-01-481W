<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Book Genre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bookGenre index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('isbn') ?></th>
            <th><?= $this->Paginator->sort('genre_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bookGenre as $bookGenre): ?>
        <tr>
            <td><?= h($bookGenre->isbn) ?></td>
            <td>
                <?= $bookGenre->has('genre') ? $this->Html->link($bookGenre->genre->name, ['controller' => 'Genre', 'action' => 'view', $bookGenre->genre->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bookGenre->isbn]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookGenre->isbn]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookGenre->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $bookGenre->isbn)]) ?>
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
