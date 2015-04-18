<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Publisher'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Book'), ['controller' => 'Book', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Book', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="publisher form large-10 medium-9 columns">
    <?= $this->Form->create($publisher); ?>
    <fieldset>
        <legend><?= __('Add Publisher') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('code');
            echo $this->Form->input('num_books');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
