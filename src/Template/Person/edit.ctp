<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?> 
<div class="person form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('DOB' ,[
				'empty' => false,
				'minYear' => date( 'Y') - 40,
				'maxYear' => date('Y'),
				'label' => 'Date of birth'
				]);
				
			echo $this->Form->label('PCM', 'Preferred  Method of Contact');
            echo $this->Form->radio('PCM',[['value' => 'email', 'text' => 'email'  ],['value' => 'phone', 'text' => 'phone' ],['value' => 'SMS', 'text' => 'SMS' ]]); 
			echo $this->Form->label('gender', 'Gender');
            echo $this->Form->radio('gender',[['value' => 'Male', 'text' => 'Male'  ],['value' => 'Female', 'text' => 'Female' ]]); 
       ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
