<?php

namespace Fuel\Migrations;

class Create_event_categories {

	public function up()
	{
		\DBUtil::create_table('event_categories', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'parent_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'identifier' => array('type' => 'text'),
			'description' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('event_categories');
	}
}