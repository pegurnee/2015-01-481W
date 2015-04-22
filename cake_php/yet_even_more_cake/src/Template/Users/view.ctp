<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($user->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Emails') ?></h4>
    <?php if (!empty($user->emails)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->emails as $emails): ?>
        <tr>
            <td><?= h($emails->id) ?></td>
            <td><?= h($emails->user_id) ?></td>
            <td><?= h($emails->email) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Phones') ?></h4>
    <?php if (!empty($user->phones)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Area Code') ?></th>
            <th><?= __('Number') ?></th>
            <th><?= __('Provider') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->phones as $phones): ?>
        <tr>
            <td><?= h($phones->id) ?></td>
            <td><?= h($phones->user_id) ?></td>
            <td><?= h($phones->area_code) ?></td>
            <td><?= h($phones->number) ?></td>
            <td><?= h($phones->provider) ?></td>
            <td><?= h($phones->created) ?></td>
            <td><?= h($phones->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Phones', 'action' => 'view', $phones->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Phones', 'action' => 'edit', $phones->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Phones', 'action' => 'delete', $phones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phones->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Addresses') ?></h4>
    <?php if (!empty($user->addresses)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Street Address') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('State') ?></th>
            <th><?= __('Zip') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->addresses as $addresses): ?>
        <tr>
            <td><?= h($addresses->id) ?></td>
            <td><?= h($addresses->street_address) ?></td>
            <td><?= h($addresses->city) ?></td>
            <td><?= h($addresses->state) ?></td>
            <td><?= h($addresses->zip) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
