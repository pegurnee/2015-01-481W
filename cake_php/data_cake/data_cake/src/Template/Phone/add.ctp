<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Phone'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="phone form large-10 medium-9 columns">
    <?= $this->Form->create($phone); ?>
    <fieldset>
        <legend><?= __('Add Phone') ?></legend>
        <?php
            echo $this->Form->input('carrier');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
