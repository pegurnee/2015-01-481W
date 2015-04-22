<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="wishlist index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('book_isbn') ?></th>
            <th><?= $this->Paginator->sort('customer_username') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wishlist as $wishlist): ?>
        <tr>
            <td><?= h($wishlist->book_isbn) ?></td>
            <td><?= h($wishlist->customer_username) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wishlist->book_isbn]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wishlist->book_isbn]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wishlist->book_isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->book_isbn)]) ?>
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
