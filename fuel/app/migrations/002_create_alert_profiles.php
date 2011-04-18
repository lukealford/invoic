<?php

namespace Fuel\Migrations;

class Create_alert_profiles {

	public function up()
	{
		\DBUtil::create_table('alert_profiles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'identifier' => array('type' => 'text'),
			'priority' => array('constraint' => 11, 'type' => 'int'),
			'concurrency' => array('constraint' => 11, 'type' => 'int'),
			'description' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('alert_profiles');
	}
}