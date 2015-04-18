<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->username]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->username], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->username)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="admin view large-10 medium-9 columns">
    <h2><?= h($admin->username) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($admin->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($admin->password) ?></p>
        </div>
    </div>
</div>
