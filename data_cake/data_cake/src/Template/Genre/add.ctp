<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Genre'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Book'), ['controller' => 'Book', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Book', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="genre form large-10 medium-9 columns">
    <?= $this->Form->create($genre); ?>
    <fieldset>
        <legend><?= __('Add Genre') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('book._ids', ['options' => $book]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
