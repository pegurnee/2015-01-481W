<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->abbreviation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->abbreviation], ['confirm' => __('Are you sure you want to delete # {0}?', $state->abbreviation)]) ?> </li>
        <li><?= $this->Html->link(__('List State'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="state view large-10 medium-9 columns">
    <h2><?= h($state->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Abbreviation') ?></h6>
            <p><?= h($state->abbreviation) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($state->name) ?></p>
            <h6 class="subheader"><?= __('Shipping Code') ?></h6>
            <p><?= h($state->shipping_code) ?></p>
        </div>
    </div>
</div>
