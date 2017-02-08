<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
     <?=$this->Element('actions',array('type'=>'Doctor','typePlural'=>'Doctors'));?>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($doctor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doctor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($doctor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($doctor->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepting Patients') ?></th>
            <td><?= $doctor->accepting_patients ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appoinment') ?></h4>
        <?php if (!empty($doctor->appoinment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>

                <th scope="col"><?= __('Appoiment Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->appoinment as $appoinment): ?>
            <tr>
                <td><?= h($appoinment->id) ?></td>
                <td><?= $this->Format->getName($appoinment->patient_id,'paitents') ?></td>

                <td><?= h($appoinment->appoiment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appoinment', 'action' => 'view', $appoinment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appoinment', 'action' => 'edit', $appoinment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appoinment', 'action' => 'delete', $appoinment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoinment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
