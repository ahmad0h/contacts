<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav"> 
         <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
 
	<section class="content">
  <div class="row"> 
    <div class="col-xs-12">
      <div class="box">
				<div class="box-header">
				  <h3 class="box-title"><?= __('List of') ?> Persons</h3>
				  
				</div>
        <!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table  class="table table-bordered table-striped dtable">
						<thead>
							<tr>
								<th scope="col"><?= $this->Paginator->sort('id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
								<th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
								<th scope="col"><?= $this->Paginator->sort('email') ?></th>
								<th scope="col"><?= $this->Paginator->sort('phone') ?></th>
								<th scope="col" class="actions"><?= __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($person as $person): ?>
							<tr>
								<td><?= $this->Number->format($person->id) ?></td>
								<td><?= h($person->first_name) ?></td>
								<td><?= h($person->last_name) ?></td>
								<td><?= h($person->email) ?></td>
								<td><?= h($person->phone) ?></td>
								<td class="actions">
									<?= $this->Html->link(__('View'), ['action' => 'view', $person->id],['class'=>'btn btn-info btn-xs']) ?>
									<?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id], ['class'=>'btn btn-warning btn-xs']) ?>
									<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs'])  ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</section>
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