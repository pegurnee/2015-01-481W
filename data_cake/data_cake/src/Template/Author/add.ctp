<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Author'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Book'), ['controller' => 'Book', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Book', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="author form large-10 medium-9 columns">
    <?= $this->Form->create($author); ?>
    <fieldset>
        <legend><?= __('Add Author') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
