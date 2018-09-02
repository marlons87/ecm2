<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

//$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
$resetLink = Yii::$app->UrlManagerF;
?>
<div class="password-reset">
    <p>Hola estimado <?= Html::encode($user->Nombre) ?>,</p>

    <p>El mecanismo de acceso a su cuenta para la aplicaci&oacute;n ECM2 ha sido actualizado y ahora puede hacer ingreso mediante el uso del certificado de firma digital.</p>
    


   
</div>
