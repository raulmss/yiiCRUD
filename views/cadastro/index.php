<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CadastroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastro Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cadastro Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            'usuario',
            //'senha',
            'cpf',
            'email:email',
            'telefone',
            'datanasc',
            //'ativo',
            'cep',
            'logradouro',
            'bairro',
            'complemento',
            'cidade',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
