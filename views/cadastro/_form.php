<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\CadastroModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cadastro-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datanasc')->input('date') ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true, 'placeholder'=>"Números somente", 'onchange'=>'buscaCep()'])?>
    <script>
        
        function preencheCampos(json) {
            if(json.logradouro == undefined){
                document.querySelector('input[id="cadastromodel-logradouro"]').value = "CEP INVÁLIDO";
                document.querySelector('input[id="cadastromodel-bairro"]').value = "CEP INVÁLIDO";
                document.querySelector('input[id="cadastromodel-complemento"]').value = "CEP INVÁLIDO";
                document.querySelector('input[id="cadastromodel-cidade"]').value = "CEP INVÁLIDO";
                document.querySelector('input[id="cadastromodel-estado"]').value = "CEP INVÁLIDO";
            }else{
                document.querySelector('input[id="cadastromodel-logradouro"]').value = json.logradouro;
                document.querySelector('input[id="cadastromodel-bairro"]').value = json.bairro;
                document.querySelector('input[id="cadastromodel-complemento"]').value = json.complemento;
                document.querySelector('input[id="cadastromodel-cidade"]').value = json.localidade;
                document.querySelector('input[id="cadastromodel-estado"]').value = json.uf;
            }

        }

        function buscaCep() {
            let inputCep = document.querySelector('input[id="cadastromodel-cep"]');
            let cep = inputCep.value.replace('-', '');
            let url = 'http://viacep.com.br/ws/' + cep + '/json';
            let xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status = 200)
                        preencheCampos(JSON.parse(xhr.responseText));
                }
            }
            xhr.send();
        }

    </script>
    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
