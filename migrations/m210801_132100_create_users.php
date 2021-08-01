<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210801_132100_create_users
 */
class m210801_132100_create_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cadastro',[
            'id'=> Schema::TYPE_PK.' NOT NULL AUTO_INCREMENT',
            'usuario'=>$this->string()->notNull(),
            'senha'=>$this->string()->notNull(),
            'nome'=>$this->string(60)->notNull(),
            'cpf'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'telefone'=>$this->string()->notNull(),
            'datanasc'=>$this->dateTime()->notNull(),
            'ativo'=>$this->boolean()->notNull(),
            'cep'=>$this->string(8)->notNull(),

        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cadastro');
    }

}
