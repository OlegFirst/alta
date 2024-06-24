<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(255),
            'username' => $this->string(255)->notNull(),
						'auth_key' => $this->string(32)->notNull()->unique(),						
						'password_hash' => $this->string(255)->notNull(),
						'password_reset_token' => $this->string(255),
						'email' => $this->string()->notNull(),
						'role' => $this->smallInteger(6)->defaultValue(10),
						'status' => $this->smallInteger(6)->defaultValue(10),
						'created_at' => $this->integer(11)->notNull(),
						'updated_at' => $this->integer(11)->notNull(),
						'phone' => $this->string()->notNull(),
						'password' => $this->string(255)->notNull(),
						'is_legal_entity' => $this->tinyInteger(1)->defaultValue(0),
						'company_name' => $this->string(),
						'company_type_id' => $this->integer(),
						'company_info' => $this->string()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
