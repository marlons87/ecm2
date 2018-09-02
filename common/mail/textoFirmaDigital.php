<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->UrlManagerF->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Hello <?= $user->Nombre ?>,

Follow the link below to reset your password:

<?= $resetLink ?>
