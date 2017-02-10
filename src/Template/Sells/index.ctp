<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sell'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sells index large-9 medium-8 columns content">
    <h3><?= __('Sells') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sell_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sell_quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_price') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sells as $sell): ?>
            <tr>
                <td><?= $this->Number->format($sell->ID) ?></td>
                <td><?= h($sell->sell_code) ?></td>
                <td><?= h($sell->product_code) ?></td>
                <td><?= h($sell->product_name) ?></td>
                <td><?= $this->Number->format($sell->sell_quantity) ?></td>
                <td><?= $this->Number->format($sell->unit_price) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sell->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sell->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sell->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sell->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
