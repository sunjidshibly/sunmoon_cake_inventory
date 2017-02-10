<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Draft'), ['action' => 'edit', $draft->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Draft'), ['action' => 'delete', $draft->id], ['confirm' => __('Are you sure you want to delete # {0}?', $draft->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drafts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Draft'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drafts view large-9 medium-8 columns content">
    <h3><?= h($draft->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($draft->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Name') ?></th>
            <td><?= h($draft->product_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($draft->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sell No') ?></th>
            <td><?= $this->Number->format($draft->sell_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($draft->unit_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sell Date') ?></th>
            <td><?= h($draft->sell_date) ?></td>
        </tr>
    </table>
</div>
