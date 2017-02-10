<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Draft'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drafts index large-9 medium-8 columns content">
    <h3><?= __('Drafts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sell_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sell_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drafts as $draft): ?>
            <tr>
                <td><?= $this->Number->format($draft->id) ?></td>
                <td><?= $this->Number->format($draft->sell_no) ?></td>
                <td><?= h($draft->product_code) ?></td>
                <td><?= h($draft->product_name) ?></td>
                <td><?= $this->Number->format($draft->unit_price) ?></td>
                <td><?= h($draft->sell_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $draft->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $draft->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $draft->id], ['confirm' => __('Are you sure you want to delete # {0}?', $draft->id)]) ?>
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
