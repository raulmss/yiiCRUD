<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CadastroModel */

$this->title = 'Create Cadastro Model';
$this->params['breadcrumbs'][] = ['label' => 'Cadastro Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
