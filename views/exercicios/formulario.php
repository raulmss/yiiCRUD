<?php

use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;


?>

<h2>Formulário</h2>
<hr>

<?php $form = ActiveForm::begin() ?>

    <?php $form->field($model, 'nome') ?>
    <?php $form->field($model, 'email') ?>
    <?php $form->field($model, 'idade') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar Dados',['class'=> 'btn btn-primary '])?>
    </div>

<?php $form = ActiveForm::end() ?>