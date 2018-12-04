<?php

use yii\db\Migration;
use common\models\User;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // Изначально задаём админа
        // Логин - admin
        // Пароль - passw0rd
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'auth_key' => 'Auwa9jsi-ChU8QBQp18UP2-36s9h4qxt',
            'password_hash' => '$2y$13$cppZdvqh09kZTV7Wyoi3R.5PHJPPdWm92Vy4QWWMnP0/aav4s3Sey',
            'status' => User::STATUS_ACTIVE,
            'created_at' => 1535555403,
            'updated_at' => 1535555403,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
