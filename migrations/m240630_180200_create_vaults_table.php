<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vaults}}`.
 */
class m240630_180200_create_vaults_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create table
        $this->createTable('vaults', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Drop trigger first
        $this->execute('DROP TRIGGER IF EXISTS update_vaults_updated_at');

        // Drop table
        $this->dropTable('{{%vaults}}');
    }
}
