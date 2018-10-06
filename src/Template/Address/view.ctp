<section class="content-header">
  <h1>
    <?php echo __('Address'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($address->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Floor') ?></dt>
                                        <dd>
                                            <?= h($address->floor) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Building') ?></dt>
                                        <dd>
                                            <?= h($address->building) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Street') ?></dt>
                                        <dd>
                                            <?= h($address->street) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('City') ?></dt>
                                        <dd>
                                            <?= h($address->city) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Regoin') ?></dt>
                                        <dd>
                                            <?= h($address->regoin) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Country') ?></dt>
                                        <dd>
                                            <?= h($address->country) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Created By') ?></dt>
                                        <dd>
                                            <?= h($address->created_by) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Modified By') ?></dt>
                                        <dd>
                                            <?= h($address->modified_by) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Person') ?></dt>
                                <dd>
                                    <?= $address->has('person') ? $address->person->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Created On') ?></dt>
                                <dd>
                                    <?= h($address->created_on) ?>
                                </dd>
                                                                                                                    <dt><?= __('Modified On') ?></dt>
                                <dd>
                                    <?= h($address->modified_on) ?>
                                </dd>
                                                                                                    
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
