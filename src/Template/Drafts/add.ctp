<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Drafts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="drafts form large-9 medium-8 columns content">
    <?= $this->Form->create($draft) ?>
    <fieldset>
        <legend><?= __('Add Draft') ?></legend>
        <?php
            echo $this->Form->input('sell_no');
            echo $this->Form->input('product_code');
            echo $this->Form->input('product_name');
            echo $this->Form->input('unit_price');
            echo $this->Form->input('sell_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
