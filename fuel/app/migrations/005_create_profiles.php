<?php

namespace Fuel\Migrations;

class Create_profiles {

	public function up()
	{
		\DBUtil::create_table('profiles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'lastname' => array('constraint' => 255, 'type' => 'varchar'),
			'birthday' => array('type' => 'date'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'notes' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('profiles');
	}
}