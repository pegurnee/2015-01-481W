<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->area_code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->area_code], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->area_code)]) ?> </li>
        <li><?= $this->Html->link(__('List Phone'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phone view large-10 medium-9 columns">
    <h2><?= h($phone->area_code) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Area Code') ?></h6>
            <p><?= $this->Number->format($phone->area_code) ?></p>
            <h6 class="subheader"><?= __('Number') ?></h6>
            <p><?= $this->Number->format($phone->number) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Carrier') ?></h6>
            <?= $this->Text->autoParagraph(h($phone->carrier)); ?>

        </div>
    </div>
</div>
