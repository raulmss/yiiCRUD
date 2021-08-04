<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property int $id
 * @property string $nome
 * @property string $usuario
 * @property string $senha
 * @property string $cpf
 * @property string $email
 * @property string $telefone
 * @property string $datanasc
 * @property int $ativo
 * @property string $cep
 * @property string $logradouro
 * @property string $bairro
 * @property string|null $complemento
 * @property string $cidade
 * @property string $estado
 * @property string $pathFoto
 */

class CadastroModel extends \yii\db\ActiveRecord
{
    public $imageFile; //utilizado para carregar a imagem do formulário.

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'usuario', 'senha', 'cpf', 'email', 'telefone', 'datanasc', 'cep', 'logradouro', 'bairro', 'cidade', 'estado'], 'required'],
            [['datanasc'], 'safe'],
            [['ativo'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['usuario', 'senha', 'cpf', 'email', 'telefone', 'logradouro', 'bairro', 'complemento', 'cidade', 'estado'], 'string', 'max' => 255],
            [['cep'], 'string', 'max' => 8],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'usuario' => 'Usuario',
            'senha' => 'Senha',
            'cpf' => 'Cpf',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'datanasc' => 'Data de Nascimento',
            'ativo' => 'Ativo',
            'cep' => 'Cep',
            'logradouro' => 'Logradouro',
            'bairro' => 'Bairro',
            'complemento' => 'Complemento',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'pathFoto' => 'Foto'
        ];
    }
}
