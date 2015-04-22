<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="phones view large-10 medium-9 columns">
    <h2><?= h($phone->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $phone->has('user') ? $this->Html->link($phone->user->name, ['controller' => 'Users', 'action' => 'view', $phone->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Area Code') ?></h6>
            <p><?= h($phone->area_code) ?></p>
            <h6 class="subheader"><?= __('Number') ?></h6>
            <p><?= h($phone->number) ?></p>
            <h6 class="subheader"><?= __('Provider') ?></h6>
            <p><?= h($phone->provider) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($phone->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($phone->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($phone->updated) ?></p>
        </div>
    </div>
</div>
