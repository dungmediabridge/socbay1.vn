<?php

use common\migrations\BaseMigration;

class m171215_085758_job extends BaseMigration
{
    public function up()
    {
// note: when creating tables using $this->createTable(), pass $this->tableOptions as last parameter

    }

    public function down()
    {
        echo "m171215_085758_job cannot be reverted.\n";
        return false;
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
