<?php

class m220611_081629_create_popup_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_popup', array(
            'id' => 'pk',
			'name' => 'string NOT NULL',
            'content' => 'text',
			'use_count' => 'int(11) DEFAULT 0',
			'isOn' => 'boolean DEFAULT false'
        ));

	}

	public function down()
	{
		$this->dropTable('tbl_popup');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}