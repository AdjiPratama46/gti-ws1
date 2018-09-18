<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="thumbnail tb-lgn">
                <div class="caption">
                    <h1 class="text-center h1-lgn"><?= Html::encode($this->title) ?></h1>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Masukkan Username'])->label(false) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Masukkan Password'])->label(false) ?>

                    <!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
