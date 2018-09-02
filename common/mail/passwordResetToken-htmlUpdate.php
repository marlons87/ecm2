<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

//$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
$resetLink = Yii::$app->UrlManagerF->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Hola estimado <?= Html::encode($user->Nombre) ?>,</p>

    <p>El mecanismo de acceso a su cuenta para la aplicaci&oacute;n ECM2 ha sido actualizado, por favor ingrese al siguiente enlace para obtener una nueva contrase&ntilde;a.</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
