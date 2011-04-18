<?php

namespace Fuel\Migrations;

class Create_events {

	public function up()
	{
		\DBUtil::create_table('events', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'identifier' => array('type' => 'text'),
			'event_category_id' => array('constraint' => 11, 'type' => 'int'),
			'starts' => array('type' => 'datetime'),
			'ends' => array('type' => 'datetime'),
			'created' => array('type' => 'timestamp'),
			'updated' => array('type' => 'timestamp'),
			'description' => array('type' => 'text'),
			'location' => array('type' => 'text'),
			'latitude' => array('type' => 'text'),
			'longitude' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('events');
	}
}