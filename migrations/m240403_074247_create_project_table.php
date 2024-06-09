<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m240403_074247_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'tech-stack'=>$this->text()->notNull(),
            'description'=>$this->text()->notNull(),
            'start_data'=>$this->integer()->notNull(),
            'end_data'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
