<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Series Entry'), ['action' => 'edit', $seriesEntry->book_isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Series Entry'), ['action' => 'delete', $seriesEntry->book_isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $seriesEntry->book_isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Series Entry'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series Entry'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="seriesEntry view large-10 medium-9 columns">
    <h2><?= h($seriesEntry->book_isbn) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Book Isbn') ?></h6>
            <p><?= h($seriesEntry->book_isbn) ?></p>
            <h6 class="subheader"><?= __('Series') ?></h6>
            <p><?= $seriesEntry->has('series') ? $this->Html->link($seriesEntry->series->name, ['controller' => 'Series', 'action' => 'view', $seriesEntry->series->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Position') ?></h6>
            <p><?= $this->Number->format($seriesEntry->position) ?></p>
        </div>
    </div>
</div>
