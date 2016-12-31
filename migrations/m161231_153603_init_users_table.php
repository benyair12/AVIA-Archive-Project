<?php

use yii\db\Migration;

class m161231_153603_init_users_table extends Migration
{
    public function up()
    {
		$this->createTable(
		'users',
			[
				'account_num' => 'pk',
				'first_name' => 'string',
				'last_name' => 'string',
				'username' => 'string',
				'phone' => 'string',
				'email' => 'string',
				'password' => 'string',
				'auth_key' => 'string'
			],
			'ENGINE=InnoDB'
		);

    }

    public function down()
    {
        $this->dropTable('users');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
