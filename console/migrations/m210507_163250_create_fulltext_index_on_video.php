<?php
use yii\db\Migration;

/**
 * Class m210507_163250_create_fulltext_index_on_video
 */
class m210507_163250_create_fulltext_index_on_video extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%video}} ADD FULLTEXT(title, description, tags)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210507_163250_create_fulltext_index_on_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210507_163250_create_fulltext_index_on_video cannot be reverted.\n";

        return false;
    }
    */
}
