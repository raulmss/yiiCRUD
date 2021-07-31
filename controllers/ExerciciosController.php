<?php

namespace app\controllers;

use app\models\CadastroModel;
use yii\web\Controller;

class ExerciciosController extends Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel();

        return $this->render('formulario', [
            'model'=> $cadastroModel
        ]);
    }
}