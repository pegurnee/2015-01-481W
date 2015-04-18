<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Author'), ['controller' => 'Author', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Author', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publisher'), ['controller' => 'Publisher', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publisher', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="book index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('isbn') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('author_id') ?></th>
            <th><?= $this->Paginator->sort('publisher_id') ?></th>
            <th><?= $this->Paginator->sort('cover') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($book as $book): ?>
        <tr>
            <td><?= h($book->isbn) ?></td>
            <td><?= h($book->title) ?></td>
            <td><?= h($book->description) ?></td>
            <td><?= $this->Number->format($book->price) ?></td>
            <td>
                <?= $book->has('author') ? $this->Html->link($book->author->id, ['controller' => 'Author', 'action' => 'view', $book->author->id]) : '' ?>
            </td>
            <td>
                <?= $book->has('publisher') ? $this->Html->link($book->publisher->name, ['controller' => 'Publisher', 'action' => 'view', $book->publisher->id]) : '' ?>
            </td>
            <td><?= h($book->cover) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $book->isbn]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->isbn]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]) ?>
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
