<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seriesEntry->book_isbn],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seriesEntry->book_isbn)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Series Entry'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="seriesEntry form large-10 medium-9 columns">
    <?= $this->Form->create($seriesEntry); ?>
    <fieldset>
        <legend><?= __('Edit Series Entry') ?></legend>
        <?php
            echo $this->Form->input('position');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
