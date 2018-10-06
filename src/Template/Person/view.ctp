<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav"> 
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li style="background: red;"><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Person'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="person view large-9 medium-8 columns content">
    <h3>Person ID:<?= h($person->id) ?></h3>
    <table class="table table-bordered table-striped">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($person->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($person->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($person->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PCM') ?></th>
            <td><?= h($person->PCM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($person->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($person->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($person->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DOB') ?></th>
            <td><?= h($person->DOB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($person->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($person->modified_on) ?></td>
        </tr>
    </table>
	
	<div class="related">
        <h2><?= __('Related Address') .'&nbsp'.$this->Html->link(
              'Add New',
              [
                'controller' => 'Address',
                'action' => 'add',
                $person->id,
                '?' => ['auto' => 1]
              ], 
              array(
                'class' => 'btn btn-info btn-xs'
              )
            ) 
			?></h2>
        <?php if (!empty($person->address)): ?>
        <table class="table table-bordered table-striped dtable">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Floor') ?></th>
                <th scope="col"><?= __('Building') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Regoin') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->address as $address): ?>
            <tr>
                <td><?= h($address->id) ?></td>
                <td><?= h($address->name) ?></td>
                <td><?= h($address->floor) ?></td>
                <td><?= h($address->building) ?></td>
                <td><?= h($address->street) ?></td>
                <td><?= h($address->city) ?></td>
                <td><?= h($address->regoin) ?></td>
                <td><?= h($address->country) ?></td>
               <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['controller' => 'Address','action' => 'view', $address->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['controller' => 'Address','action' => 'edit', $address->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Html->link(__('Delete'), ['controller' => 'Address','action' => 'delete', $address->id,"?"=>['personID'=>$person->id]], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

	<?php
$this->Html->css([
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () { 
    $('.dtable').DataTable();
  });
</script>
<?php $this->end(); ?>