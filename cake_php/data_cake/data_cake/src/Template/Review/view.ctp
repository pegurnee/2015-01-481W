<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->book_isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->book_isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $review->book_isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Review'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="review view large-10 medium-9 columns">
    <h2><?= h($review->book_isbn) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Book Isbn') ?></h6>
            <p><?= h($review->book_isbn) ?></p>
            <h6 class="subheader"><?= __('Customer Username') ?></h6>
            <p><?= h($review->customer_username) ?></p>
            <h6 class="subheader"><?= __('Content') ?></h6>
            <p><?= h($review->content) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Rating') ?></h6>
            <p><?= $this->Number->format($review->rating) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Submit Time') ?></h6>
            <p><?= h($review->submit_time) ?></p>
        </div>
    </div>
</div>
