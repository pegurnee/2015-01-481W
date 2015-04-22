<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Currency'), ['action' => 'edit', $currency->name]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Currency'), ['action' => 'delete', $currency->name], ['confirm' => __('Are you sure you want to delete # {0}?', $currency->name)]) ?> </li>
        <li><?= $this->Html->link(__('List Currency'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="currency view large-10 medium-9 columns">
    <h2><?= h($currency->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($currency->name) ?></p>
            <h6 class="subheader"><?= __('Symbol') ?></h6>
            <p><?= h($currency->symbol) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Price Multiplier') ?></h6>
            <p><?= $this->Number->format($currency->price_multiplier) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Symbol Location') ?></h6>
            <?= $this->Text->autoParagraph(h($currency->symbol_location)); ?>

        </div>
    </div>
</div>
