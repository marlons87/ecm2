<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

//$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Hola estimado <?= Html::encode($user->Nombre) ?>,</p>

    <p>Estimado usuario, Su cuenta para la aplicación ECM2 ha sido activada, y puede hacer ingreso mediante el uso de su certificado de firma digital.</p>

   
</div>
