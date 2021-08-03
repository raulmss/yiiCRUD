<?php

use yii\db\Migration;

/**
 * Class m210802_223230_add_address_info
 */
class m210802_223230_add_address_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cadastro','logradouro',$this->string()->notNull());
        $this->addColumn('cadastro','bairro',$this->string()->notNull());
        $this->addColumn('cadastro','complemento',$this->string());
        $this->addColumn('cadastro','cidade',$this->string()->notNull());
        $this->addColumn('cadastro','estado',$this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('cadastro','logradouro');
        $this->dropColumn('cadastro','bairro');
        $this->dropColumn('cadastro','complemento');
        $this->dropColumn('cadastro','cidade');
        $this->dropColumn('cadastro','estado');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210802_223230_add_address_info cannot be reverted.\n";

        return false;
    }
    */
}
