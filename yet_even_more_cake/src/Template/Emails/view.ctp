<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emails view large-10 medium-9 columns">
    <h2><?= h($email->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $email->has('user') ? $this->Html->link($email->user->name, ['controller' => 'Users', 'action' => 'view', $email->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($email->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($email->id) ?></p>
        </div>
    </div>
</div>
