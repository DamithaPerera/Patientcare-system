<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Appoinment','typePlural'=>'Appoinments'));?>
</nav>
<div class="appoinment index large-9 medium-8 columns content">
    <h3><?= __('Appoinment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doctor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('appoiment_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appoinment as $appoinment): ?>
            <tr>
                <td><?= $this->Number->format($appoinment->id) ?></td>
                <td><?= $appoinment->has('patient') ? $this->Html->link($appoinment->patient->name, ['controller' => 'Patients', 'action' => 'view', $appoinment->patient->id]) : '' ?></td>
                <td><?= $appoinment->has('doctor') ? $this->Html->link($appoinment->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $appoinment->doctor->id]) : '' ?></td>
                <td><?= h($appoinment->appoiment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $appoinment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appoinment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appoinment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoinment->id)]) ?>
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
