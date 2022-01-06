<?php 

	return [

		/*
			Admin Panel
		*/

		'admin/login' => [
			'controller' => 'Admin',
			'action' => 'AdminLogin',
		],

		'admin/panel' => [
			'controller' => 'Admin',
			'action' => 'Panel',
		],

		'admin/pages' => [
			'controller' => 'Admin',
			'action' => 'Pages',
		],

		'admin/setting' => [
			'controller' => 'Admin',
			'action' => 'setting',
		],

		'admin/plugins' => [
			'controller' => 'Admin',
			'action' => 'plugins',
		],

		/*
			User site
		*/

		'' => [
			'controller' => 'Index',
			'action' => 'Index',
		],	

		'index' => [
			'controller' => 'Index',
			'action' => 'Index',
		],
	];

?>