<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Book'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Author'), ['controller' => 'Author', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Author', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publisher'), ['controller' => 'Publisher', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publisher', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="book form large-10 medium-9 columns">
    <?= $this->Form->create($book); ?>
    <fieldset>
        <legend><?= __('Add Book') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('price');
            echo $this->Form->input('author_id', ['options' => $author]);
            echo $this->Form->input('publisher_id', ['options' => $publisher]);
            echo $this->Form->input('cover');
            echo $this->Form->input('genre._ids', ['options' => $genre]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
