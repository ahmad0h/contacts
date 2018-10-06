<?php
use Cake\Core\Configure;
?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
	
    <li><a href="<?php echo $this->Url->build('/pages/home'); ?>"><i class="fa fa-gear"></i> Dashboard</a></li>
	<li class="treeview">
		<a href="#">
			<i class="fa fa-dashboard"></i> <span>Persons</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li><a href="<?php echo $this->Url->build('/person'); ?>"><i class="fa fa-circle-o"></i> Manage </a></li> 
			<li><a href="<?php echo $this->Url->build('/person/add'); ?>"><i class="fa fa-circle-o"></i> Add New </a></li> 
		</ul>
    </li>
 
</ul>
 
