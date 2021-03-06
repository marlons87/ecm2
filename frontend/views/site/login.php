<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset_1;

AppAsset_1::register($this);

$this->title = 'Iniciar sesión';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor ingrese sus credenciales de acceso:</p>

    <div class="row">
		<div class="col-lg-5">	
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
				
				<?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Usuario') ?>

						<?= $form->field($model, 'password')->passwordInput(['autocomplete' => 'off'])->label('Contrase&ntilde;a')  ?>
						
						<?= $form->field($model, 'fd')->hiddenInput(['value' => 0])->label(false);?>

						<?= $form->field($model, 'rememberMe')->checkbox()->label('Recordarme') ?>

						<div style="color:#999;margin:1em 0">
							Si usted olvido su contraseña la puede <?= Html::a('restablecer aquí', ['site/request-password-reset']) ?>.
						</div>
				
				
			<?php ActiveForm::end(); ?>
			<div class="form-group">
				<button class="btn btn-primary" onclick="submit();">Iniciar sesión</button>
            <button class="btn btn-primary" onclick="showModalAutenticacion();">Firma digital</button>
        </div>
        </div>

		<div id="divLoading" class="modalLoading">
            <div>
                <p>Cargando</p>
            </div>
        </div>
        <div id="overlay" class="modalDialog">
            <div>
                <a onclick="overlay();" title="Cerrar" class="close">X</a>
                <h3>Autenticación</h3>

                <input id="chkTarjeta" type="radio" name="tipoCertificado" value="CARD" onclick="typeCertificate();" checked><label for="chkTarjeta">Certificado digital</label>
                <!--<br>-->
               <!-- <input id="chkArchivo" type="radio" name="tipoCertificado" value="FILE" onclick="typeCertificate();"><label for="chkArchivo"><img src="img/folder.png" alt="Archivo" />Archivo</label>-->
                <div id="divFiles">
                    Por favor seleccione el certificado:
                <div id="divCertFiles">
                </div>
                </div>

                <div id="divSmartCard">
                    Por favor seleccione el certificado:
                <div id="divSmartCardCerts">
                </div>
                </div>

                <br>
                <br>
                <label>Pin:</label>
                <input id="pin" type="password" onkeypress="Javascript: if (event.which == 13 || event.keyCode == 13) getDN();" />
                <button class="btn btn-primary" onclick="getDN();">Validar</button>
                <button class="btn btn-primary" onclick="overlay();">Cerrar</button>
            </div>
        </div>
		<div class="col-lg-5"> 
            <div class="form-group">
            
                    
<!--                    <span style="width:300px;height:100px;border:1px solid;" onclick="showModalAutenticacion();">Firma digital</span>-->
                      
                </div>                     
        </div>
    </div>
</div>
<script>
    function submit()
    {
        document.getElementById("login-form").submit();
    }
    </script>