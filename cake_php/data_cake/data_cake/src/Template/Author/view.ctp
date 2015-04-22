<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Author'), ['action' => 'edit', $author->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Author'), ['action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Author'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Book'), ['controller' => 'Book', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Book', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="author view large-10 medium-9 columns">
    <h2><?= h($author->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($author->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($author->last_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($author->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Book') ?></h4>
    <?php if (!empty($author->book)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Isbn') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Author Id') ?></th>
            <th><?= __('Publisher Id') ?></th>
            <th><?= __('Cover') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($author->book as $book): ?>
        <tr>
            <td><?= h($book->isbn) ?></td>
            <td><?= h($book->title) ?></td>
            <td><?= h($book->description) ?></td>
            <td><?= h($book->price) ?></td>
            <td><?= h($book->author_id) ?></td>
            <td><?= h($book->publisher_id) ?></td>
            <td><?= h($book->cover) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Book', 'action' => 'view', $book->isbn]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Book', 'action' => 'edit', $book->isbn]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Book', 'action' => 'delete', $book->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
