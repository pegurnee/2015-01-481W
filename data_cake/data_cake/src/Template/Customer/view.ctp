<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->username]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->username], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->username)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Credit Card'), ['controller' => 'CreditCard', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Credit Card'), ['controller' => 'CreditCard', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customer view large-10 medium-9 columns">
    <h2><?= h($customer->username) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($customer->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($customer->password) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($customer->email) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($customer->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($customer->last_name) ?></p>
            <h6 class="subheader"><?= __('Middle Initial') ?></h6>
            <p><?= h($customer->middle_initial) ?></p>
            <h6 class="subheader"><?= __('Card Number') ?></h6>
            <p><?= h($customer->card_number) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Loyalty Points') ?></h6>
            <p><?= $this->Number->format($customer->loyalty_points) ?></p>
            <h6 class="subheader"><?= __('Phone Area Code') ?></h6>
            <p><?= $this->Number->format($customer->phone_area_code) ?></p>
            <h6 class="subheader"><?= __('Phone Number') ?></h6>
            <p><?= $this->Number->format($customer->phone_number) ?></p>
            <h6 class="subheader"><?= __('Address Id') ?></h6>
            <p><?= $this->Number->format($customer->address_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Of Birth') ?></h6>
            <p><?= h($customer->date_of_birth) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('One Click Buying') ?></h6>
            <p><?= $customer->one_click_buying ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Prime Member') ?></h6>
            <p><?= $customer->prime_member ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Address') ?></h4>
    <?php if (!empty($customer->address)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Street Address') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('Zip') ?></th>
            <th><?= __('State') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->address as $address): ?>
        <tr>
            <td><?= h($address->id) ?></td>
            <td><?= h($address->street_address) ?></td>
            <td><?= h($address->city) ?></td>
            <td><?= h($address->zip) ?></td>
            <td><?= h($address->state) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Address', 'action' => 'view', $address->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Address', 'action' => 'edit', $address->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Address', 'action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related CreditCard') ?></h4>
    <?php if (!empty($customer->credit_card)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Number') ?></th>
            <th><?= __('Ccv') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('Expiration') ?></th>
            <th><?= __('Name On Card') ?></th>
            <th><?= __('Issuer') ?></th>
            <th><?= __('Pin Number') ?></th>
            <th><?= __('Associated Zip') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->credit_card as $creditCard): ?>
        <tr>
            <td><?= h($creditCard->number) ?></td>
            <td><?= h($creditCard->ccv) ?></td>
            <td><?= h($creditCard->type) ?></td>
            <td><?= h($creditCard->expiration) ?></td>
            <td><?= h($creditCard->name_on_card) ?></td>
            <td><?= h($creditCard->issuer) ?></td>
            <td><?= h($creditCard->pin_number) ?></td>
            <td><?= h($creditCard->associated_zip) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CreditCard', 'action' => 'view', $creditCard->number]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CreditCard', 'action' => 'edit', $creditCard->number]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CreditCard', 'action' => 'delete', $creditCard->number], ['confirm' => __('Are you sure you want to delete # {0}?', $creditCard->number)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
