<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wishlist->book_isbn],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->book_isbn)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wishlist'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="wishlist form large-10 medium-9 columns">
    <?= $this->Form->create($wishlist); ?>
    <fieldset>
        <legend><?= __('Edit Wishlist') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
