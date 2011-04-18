<?php

namespace Fuel\Migrations;

class Create_alerts {

	public function up()
	{
		\DBUtil::create_table('alerts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'alert_profile_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'identifier' => array('type' => 'text'),
			'starts' => array('type' => 'datetime'),
			'ends' => array('type' => 'datetime'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),
			'description' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('alerts');
	}
}