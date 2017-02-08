<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('actions',array('type'=>'Appoinment','typePlural'=>'Appoinments'));?>
</nav>
<div class="appoinment form large-9 medium-8 columns content">
    <?= $this->Form->create($appoinment) ?>
    <fieldset>
        <legend><?= __('Edit Appoinment') ?></legend>
        <?php
            echo $this->Form->input('patient_id', ['options' => $patients]);
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('appoiment_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
