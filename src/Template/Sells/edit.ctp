<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sell->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sell->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sells'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sells form large-9 medium-8 columns content">
    <?= $this->Form->create($sell) ?>
    <fieldset>
        <legend><?= __('Edit Sell') ?></legend>
        <?php
            echo $this->Form->input('sell_code');
            echo $this->Form->input('product_code');
            echo $this->Form->input('product_name');
            echo $this->Form->input('sell_quantity');
            echo $this->Form->input('unit_price');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
