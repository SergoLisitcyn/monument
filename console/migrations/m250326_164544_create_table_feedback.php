<?php

use yii\db\Migration;

class m250326_164544_create_table_feedback extends Migration
{
    public function up()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'body' => $this->text()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('feedback');
    }
}
