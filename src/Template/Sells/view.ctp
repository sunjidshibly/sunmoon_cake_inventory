<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sell'), ['action' => 'edit', $sell->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sell'), ['action' => 'delete', $sell->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sell->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Sells'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sell'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sells view large-9 medium-8 columns content">
    <h3><?= h($sell->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sell Code') ?></th>
            <td><?= h($sell->sell_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($sell->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Name') ?></th>
            <td><?= h($sell->product_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($sell->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sell Quantity') ?></th>
            <td><?= $this->Number->format($sell->sell_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($sell->unit_price) ?></td>
        </tr>
    </table>
</div>
