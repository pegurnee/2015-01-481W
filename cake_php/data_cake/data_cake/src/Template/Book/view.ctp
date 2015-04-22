<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Book'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Author'), ['controller' => 'Author', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Author', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publisher'), ['controller' => 'Publisher', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publisher', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genre'), ['controller' => 'Genre', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genre', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="book view large-10 medium-9 columns">
    <h2><?= h($book->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Isbn') ?></h6>
            <p><?= h($book->isbn) ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($book->title) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($book->description) ?></p>
            <h6 class="subheader"><?= __('Author') ?></h6>
            <p><?= $book->has('author') ? $this->Html->link($book->author->id, ['controller' => 'Author', 'action' => 'view', $book->author->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Publisher') ?></h6>
            <p><?= $book->has('publisher') ? $this->Html->link($book->publisher->name, ['controller' => 'Publisher', 'action' => 'view', $book->publisher->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cover') ?></h6>
            <p><?= h($book->cover) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($book->price) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Genre') ?></h4>
    <?php if (!empty($book->genre)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($book->genre as $genre): ?>
        <tr>
            <td><?= h($genre->id) ?></td>
            <td><?= h($genre->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Genre', 'action' => 'view', $genre->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Genre', 'action' => 'edit', $genre->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Genre', 'action' => 'delete', $genre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
