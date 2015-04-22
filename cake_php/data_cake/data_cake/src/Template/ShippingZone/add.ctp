<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Shipping Zone'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="shippingZone form large-10 medium-9 columns">
    <?= $this->Form->create($shippingZone); ?>
    <fieldset>
        <legend><?= __('Add Shipping Zone') ?></legend>
        <?php
            echo $this->Form->input('price');
            echo $this->Form->input('deliver_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
