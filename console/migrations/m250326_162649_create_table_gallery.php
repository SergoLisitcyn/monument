<?php

use yii\db\Migration;

class m250326_162649_create_table_gallery extends Migration
{
    public function up()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'image' => $this->text()->null(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('gallery');
    }
}
