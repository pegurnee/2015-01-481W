<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Currency'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="currency form large-10 medium-9 columns">
    <?= $this->Form->create($currency); ?>
    <fieldset>
        <legend><?= __('Add Currency') ?></legend>
        <?php
            echo $this->Form->input('symbol');
            echo $this->Form->input('price_multiplier');
            echo $this->Form->input('symbol_location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
