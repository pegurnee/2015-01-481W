<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $review->book_isbn],
                ['confirm' => __('Are you sure you want to delete # {0}?', $review->book_isbn)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Review'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="review form large-10 medium-9 columns">
    <?= $this->Form->create($review); ?>
    <fieldset>
        <legend><?= __('Edit Review') ?></legend>
        <?php
            echo $this->Form->input('submit_time');
            echo $this->Form->input('rating');
            echo $this->Form->input('content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
