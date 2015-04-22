<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses view large-10 medium-9 columns">
    <h2><?= h($address->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Street Address') ?></h6>
            <p><?= h($address->street_address) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($address->city) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($address->state) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($address->id) ?></p>
            <h6 class="subheader"><?= __('Zip') ?></h6>
            <p><?= $this->Number->format($address->zip) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($address->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($address->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->name) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
