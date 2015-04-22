<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wishlist'), ['action' => 'edit', $wishlist->book_isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wishlist'), ['action' => 'delete', $wishlist->book_isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->book_isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Wishlist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wishlist view large-10 medium-9 columns">
    <h2><?= h($wishlist->book_isbn) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Book Isbn') ?></h6>
            <p><?= h($wishlist->book_isbn) ?></p>
            <h6 class="subheader"><?= __('Customer Username') ?></h6>
            <p><?= h($wishlist->customer_username) ?></p>
        </div>
    </div>
</div>
