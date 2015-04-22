<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Book Genre'), ['action' => 'edit', $bookGenre->isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book Genre'), ['action' => 'delete', $bookGenre->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $bookGenre->isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Book Genre'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book Genre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bookGenre view large-10 medium-9 columns">
    <h2><?= h($bookGenre->isbn) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Isbn') ?></h6>
            <p><?= h($bookGenre->isbn) ?></p>
            <h6 class="subheader"><?= __('Genre') ?></h6>
            <p><?= $bookGenre->has('genre') ? $this->Html->link($bookGenre->genre->name, ['controller' => 'Genre', 'action' => 'view', $bookGenre->genre->id]) : '' ?></p>
        </div>
    </div>
</div>
