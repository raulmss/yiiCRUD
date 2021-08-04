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
            'nome'=>$this->string(60)->notNull(),
            'usuario'=>$this->string()->notNull(),
            'senha'=>$this->string()->notNull(),
            'cpf'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'telefone'=>$this->string()->notNull(),
            'datanasc'=>$this->dateTime()->notNull(),
            'ativo'=>$this->boolean()->notNull(),
            'cep'=>$this->string(8)->notNull(),

        ]);

        $this->insert('cadastro',[
            'nome'=>'admin',
            'usuario'=>'admin',
            'senha'=>sha1('admin'),
            'cpf'=>'00000000000',
            'email'=>'admin@admin.com',
            'telefone'=>'999999999',
            'datanasc'=>date('Y-m-d H:i:s'),
            'ativo'=>1,
            'cep'=>'59060370'
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
