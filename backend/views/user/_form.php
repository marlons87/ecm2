<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Instituciones;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['readonly' => !$model->isNewRecord]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellido1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellido2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'Puesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Institucion')->dropDownList($model->InstitucionList , ['prompt' => 'Seleccione...']) ?>
    
     <?= $form->field($model, 'status')->dropDownList([\common\models\User::STATUS_DELETED => 'Inactivo',
                                                     \common\models\User::STATUS_ACTIVE=> 'Activo'], ['disabled' => true]); ?>
    
    <?= $form->field($model, 'firma')->dropDownList([common\models\User::LOGIN_USR_PASS => 'Usuario / Contraseña',
                                                      common\models\User::LOGIN_FIRMA=>'Firma Digital']); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
       
        <?= Html::a("Cancelar", Url::toRoute(['user/index']), ['class' => 'btn btn-danger']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
