<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="address view large-10 medium-9 columns">
    <h2><?= h($addres->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Street Address') ?></h6>
            <p><?= h($addres->street_address) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($addres->city) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($addres->state) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($addres->id) ?></p>
            <h6 class="subheader"><?= __('Zip') ?></h6>
            <p><?= $this->Number->format($addres->zip) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Customer') ?></h4>
    <?php if (!empty($addres->customer)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Middle Initial') ?></th>
            <th><?= __('Date Of Birth') ?></th>
            <th><?= __('Loyalty Points') ?></th>
            <th><?= __('One Click Buying') ?></th>
            <th><?= __('Prime Member') ?></th>
            <th><?= __('Phone Area Code') ?></th>
            <th><?= __('Phone Number') ?></th>
            <th><?= __('Address Id') ?></th>
            <th><?= __('Card Number') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($addres->customer as $customer): ?>
        <tr>
            <td><?= h($customer->username) ?></td>
            <td><?= h($customer->password) ?></td>
            <td><?= h($customer->email) ?></td>
            <td><?= h($customer->first_name) ?></td>
            <td><?= h($customer->last_name) ?></td>
            <td><?= h($customer->middle_initial) ?></td>
            <td><?= h($customer->date_of_birth) ?></td>
            <td><?= h($customer->loyalty_points) ?></td>
            <td><?= h($customer->one_click_buying) ?></td>
            <td><?= h($customer->prime_member) ?></td>
            <td><?= h($customer->phone_area_code) ?></td>
            <td><?= h($customer->phone_number) ?></td>
            <td><?= h($customer->address_id) ?></td>
            <td><?= h($customer->card_number) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Customer', 'action' => 'view', $customer->username]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Customer', 'action' => 'edit', $customer->username]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customer', 'action' => 'delete', $customer->username], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->username)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
