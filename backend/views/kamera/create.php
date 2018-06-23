<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Kamera */
/* @var $form ActiveForm */

$this->title = 'Создать заявку';

$this->params['breadcrumbs'][] = ['label' => 'Меню проект Камера', 'url' => ['/kamera']];
$this->params['breadcrumbs'][] = ['label' => 'Заявки Камера', 'url' => ['/kamera/view']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <h3>Новая заявка</h3>
<br>
</div>

<?php $form = ActiveForm::begin(); ?>
<div class="container-fluid">
<div class="raw">
    <div class="col-lg-6"><?= $form->field($model, 'client')->textInput(['placeholder' => 'ФИО или название компании Заказчика']) ?></div>
    <div class="col-lg-6"><?= $form->field($model, 'id_company') ?></div>
</div>

<div class="raw">
    <div class="col-lg-12"></div>
</div>

<div class="raw">
    <div class="col-lg-3"><?= $form->field($model, 'date_in')->widget(\yii\jui\DatePicker::class,[
            'language' => 'ru',
            'dateFormat' => 'dd.MM.yyyy',
            ]) ?></div>
    <div class="col-lg-3"><?= $form->field($model, 'date_out')->widget(\yii\jui\DatePicker::class,[
            'language' => 'ru',
            'dateFormat' => 'dd.MM.yyyy',
        ]) ?></div>
    <div class="col-lg-3"><?= $form->field($model, 'price')->textInput(['placeholder' => 'Стоимость заявки (руб.)']) ?></div>
    <div class="col-lg-3"><?= $form->field($model, 'type_payment')->dropDownList(['0' => 'Наличные', '1' => 'Безналичные']) ?></div>
</div>

    <div class="raw">
        <div class="col-lg-12"></div>
    </div>

<div class="raw">
    <div class="col-lg-4"><?= $form->field($model, 'pasport')->textInput(['placeholder' => 'Паспортные данные']) ?></div>
    <div class="col-lg-4"><?= $form->field($model, 'email')->textInput(['placeholder' => 'Адрес электронной почты']) ?></div>
    <div class="col-lg-4"><?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '+7 (999) 999-9999',
        ]) ?></div>
</div>

    <div class="raw">
        <div class="col-lg-12"></div>
    </div>

<div class="raw">
    <div class="col-lg-12"><?= $form->field($model, 'opisanie')->textarea(['placeholder' => 'Описание заявки, наименование изделек, кол-во, цвет, необходимые операции', 'rows' => 4]) ?></div>
</div>

    <?/*= $form->field($model, 'useradd') */?>
        <?/*= $form->field($model, 'date_in') */?>
        <?/*= $form->field($model, 'date_out') */?>
        <?/*= $form->field($model, 'id_company') */?>
        <?/*= $form->field($model, 'type_payment') */?>
        <?/*= $form->field($model, 'realization') */?>
        <?/*= $form->field($model, 'date_realization') */?>
        <?/*= $form->field($model, 'userrealization') */?>
        <?/*= $form->field($model, 'payment') */?>
        <?/*= $form->field($model, 'date_payment') */?>
        <?/*= $form->field($model, 'userpayment') */?>
        <?/*= $form->field($model, 'give') */?>
        <?/*= $form->field($model, 'date_give') */?>
        <?/*= $form->field($model, 'usergive') */?>
        <?/*= $form->field($model, 'client') */?>
        <?/*= $form->field($model, 'price') */?>
        <?/*= $form->field($model, 'pasport') */?>
        <?/*= $form->field($model, 'opisanie') */?>
        <?/*= $form->field($model, 'email') */?>
        <?/*= $form->field($model, 'phone') */?>

</div><!-- kamera-create -->
<div style="padding: 25px;">
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary btn-lg']) ?>
</div>
<?php ActiveForm::end(); ?>
