<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Book Genre'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bookGenre form large-10 medium-9 columns">
    <?= $this->Form->create($bookGenre); ?>
    <fieldset>
        <legend><?= __('Add Book Genre') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
