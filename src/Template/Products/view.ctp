<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($product->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Name') ?></th>
            <td><?= h($product->product_name) ?></td>
        </tr>   
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($product->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($product->unit_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchased Date') ?></th>
            <td><?= h($product->purchased_date) ?></td>
        </tr>
    </table>
    <div>
        <?= $this->Html->link(__('Go to Sells'), ['action' => '../sells']) ?>
        <br>
        <?= $this->Html->link(__('Go to Drafts'), ['action' => '../drafts']) ?>
    </div>

</div>


