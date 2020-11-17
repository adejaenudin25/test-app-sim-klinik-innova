<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%unit}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%unit}}`
 */
class m201113_133008_create_unit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%unit}}', [
            'id' => $this->primaryKey(),
            'kd_parent' => $this->integer(),
            'unit' => $this->string(20),
        ]);

        // creates index for column `kd_parent`
        $this->createIndex(
            '{{%idx-unit-kd_parent}}',
            '{{%unit}}',
            'kd_parent'
        );

        // add foreign key for table `{{%unit}}`
        $this->addForeignKey(
            '{{%fk-unit-kd_parent}}',
            '{{%unit}}',
            'kd_parent',
            '{{%unit}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%unit}}`
        $this->dropForeignKey(
            '{{%fk-unit-kd_parent}}',
            '{{%unit}}'
        );

        // drops index for column `kd_parent`
        $this->dropIndex(
            '{{%idx-unit-kd_parent}}',
            '{{%unit}}'
        );

        $this->dropTable('{{%unit}}');
    }
}
