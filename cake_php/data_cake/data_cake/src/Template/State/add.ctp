<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List State'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="state form large-10 medium-9 columns">
    <?= $this->Form->create($state); ?>
    <fieldset>
        <legend><?= __('Add State') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('shipping_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
