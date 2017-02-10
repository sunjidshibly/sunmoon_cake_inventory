<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Add New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>




<div class="products index large-10 medium-10 columns content">
    <h3><?= __('Products') ?></h3>
     

        <div>
        <form action="Products/search" method="post" >
            <legend><?= __('Search Product') ?></legend>
            <input type="text" name="search">
            <?= $this->Form->button(__('Submit')) ?>
        </form>
        </div>


    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Total Price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchased_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->product_code) ?></td>
                <td><?= h($product->product_name) ?></td>
                <td><?= $this->Number->format($product->quantity) ?></td>
                <td><?= $this->Number->format($product->unit_price) ?></td>
                <td><?= $this->Number->format($product->quantity*$product->unit_price) ?></td>
                <td><?= h($product->purchased_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div>
        <?= $this->Html->link(__('Go to Sells'), ['action' => '../sells']) ?>
        <br>
        <?= $this->Html->link(__('Go to Drafts'), ['action' => '../drafts']) ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
