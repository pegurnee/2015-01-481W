<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $admin->username],
                ['confirm' => __('Are you sure you want to delete # {0}?', $admin->username)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Admin'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="admin form large-10 medium-9 columns">
    <?= $this->Form->create($admin); ?>
    <fieldset>
        <legend><?= __('Edit Admin') ?></legend>
        <?php
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
