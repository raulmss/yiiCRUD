<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210801_143937_create_authorizations
 */
class m210801_143937_create_authorizations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('autorizacoes', [
            'id_usuario'=> $this->integer()->notNull(),
            'usuario'=>$this->string()->notNull(),
            'senha'=>$this->string()->notNull(),
        ]);

        $this->addForeignKey('fk_autorizacoes_usuario_id', 'autorizacoes','id_usuario', 'cadastro', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_autorizacoes_usuario_id', 'autorizacoes');
        $this->dropTable('autorizacoes');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210801_143937_create_authorizations cannot be reverted.\n";

        return false;
    }
    */
}
