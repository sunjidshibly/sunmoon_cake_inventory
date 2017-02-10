<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('product_code');
            echo $this->Form->input('product_name');
            echo $this->Form->input('quantity');
            echo $this->Form->input('unit_price');
            echo $this->Form->input('purchased_date', ['empty' => true]);
        ?>
    </fieldset>
    <div>
        <?= $this->Html->link(__('Go to Sells'), ['action' => '../sells']) ?>
        <br>
        <?= $this->Html->link(__('Go to Drafts'), ['action' => '../drafts']) ?>
    </div>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
