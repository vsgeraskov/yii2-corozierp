<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\People */
/* @var $form ActiveForm */


$this->title = 'Редактирование профиля пользователя';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin(); // Стартуем форму ?>

<div class="user-people" style="padding-top: 25px;">
    <div class="" style="background-color: white; margin: 0 auto; padding: 15px; box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5); border: 1px solid #e6e6e6;">
        <h1>Редактиование профиля пользователя</h1>
        <br>
        <p style="font-size: 14pt; color: #767676;">Для работы в системе Вам необходимо поддерживать в актуальном состоянии информацию о своем профиле.
            Каждый пользователь системы самостоятельно и ответственно формирует данные о себе</p>
        <br>
        <p style="font-size: 14pt; color: #767676;">Мы гарантируем, что данная информация не будет использована в противоправных действиях, а работа с данными осуществляется
            только ограниченное число сотрудников, допущенных к обработке данных, никакое другое лицо не может получить доступ к Вашим
            персональным нанным</p>
        <br>
        <h3>1. Основная информаци</h3>
        <hr>
        <p style="font-size: 14pt; color: #767676;">Укажите основные данные о себе</p>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'surname')->textInput(['placeholder' => 'Введите свою фамилию', 'maxlength' => '35']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'name')->textInput(['placeholder' => 'Введите свое имя', 'maxlength' => '35']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'middle_name')->textInput(['placeholder' => 'Введите свое отчество', 'maxlength' => '40']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'birthday') ?>
            </div>
            <div class="col-md-1">
                <?= $form->field($model, 'sex')->dropDownList(['0' => 'Мужской', '1' => 'Женский']) ?>
            </div>
        </div>

        <p style="font-size: 14pt; color: #767676;">Вы можете загрузить фотографию на свою аватарку</p>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'photo') ?>
            </div>
            <div class="col-md-8">

            </div>
        </div>

       <p style="font-size: 14pt; color: #767676;">Размеры спецодежды</p>

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'sizclothes')->dropDownList([
                    '1' => '44-46 (170-176)',
                    '2' => '44-46 (182-188)',
                    '3' => '48-50 (170-176)',
                    '4' => '48-50 (182-188)',
                    '5' => '52-54 (170-176)',
                    '6' => '52-54 (182-188)',
                    '7' => '56-58 (170-176)',
                    '8' => '56-58 (182-188)',
                ]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'sizboots')->dropDownList([
                        '1' => '38р.',
                        '2' => '39р.',
                        '3' => '40р.',
                        '4' => '41р.',
                        '5' => '42р.',
                        '6' => '43р.',
                        '7' => '44р.',
                        '8' => '45р.',
                        ]) ?>
            </div>
        </div>

        <h3>2. Паспортные данные</h3>
        <hr>
        <p style="font-size: 14pt; color: #767676;">Укажите основные паспортные данные, прописка и адрес фактического проживания. Эти данные мы зачастую используем при оформлении
        пропусков на территорию предприятий наших заказчиков.</p>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'pasport')->textInput(['placeholder' => 'Введите серию и номер паспорта, кем и когда выдан', 'maxlength' => '150']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'register')->textInput(['placeholder' => 'Введите свой адрес по прописке, как в паспорте', 'maxlength' => '255']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'adress')->textInput(['placeholder' => 'Введите фактический адрес проживания', 'maxlength' => '255']) ?>
            </div>
        </div>

        <p style="font-size: 14pt; color: #767676;">Внечите данные о своем ИНН (можно получить в любом отделении ИФНС России) и СНИЛС (пенсионное страхование). Настоящие номера
        нам необходимы для начисления обязательных выплат на пенсионное, медицинское и социальное страхование, а так же уплаты налогов и НДФЛ.</p>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'inn')->textInput(['placeholder' => 'Введите свой ИНН', 'maxlength' => '12']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'snils')->textInput(['placeholder' => 'Введите свой СНИЛС', 'maxlength' => '14'])->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '999-999-999-99',
                ])?>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <h3>3. Образование и опыт работы</h3>
        <hr>
        <p style="font-size: 14pt; color: #767676;">Мы стараемся привлекать к своим проектам только кваллифицированных специалистов с опытом работы, поэтому чем более
        детально Вы заполните данные поля, тем более наглядно для нас будет картина.</p>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'education')->textarea(['placeholder' => 'Укажите Ваше образование в формате: основное образование, учебное заведение, специальность, годы обуения', 'rows' => 8]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'experience')->textarea(['placeholder' => 'Укажите Ваш опыт работы по специальности в формате, должность, название компании, годы работы, краткое описание должностных обязанностей', 'rows' => 8]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'skills')->textarea(['placeholder' => 'Укажите Вашы дополнительные навыки или образование, которое, по Вашему мнению, будет полезно в работе. Это может быть дополнительная кваллификация сварщика, или знание сметных программ, дополнительные удостоверения ISO или технический контроль, и т.д.', 'rows' => 8]) ?>
            </div>
        </div>

        <h3>4. Личностные качества</h3>
        <hr>
        <p style="font-size: 14pt; color: #767676;">Заполните личностные характеристики, чтоб мы могли видеть Ваши предпочтения и семейное положение</p>
        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'marriage')->dropDownList([
                    '0' => 'Холост',
                    '1' => 'Женат/Замужем',
                ]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'smoke')->dropDownList([
                    '0' => 'Не курю',
                    '1' => 'Курю иногда',
                    '2' => 'Курю постоянно',
                ]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'alcohol')->dropDownList([
                    '0' => 'Не употребляю',
                    '1' => 'Употребляю редко (праздник)',
                    '2' => 'Употребляю часто (более 3х в неделю)',
                ]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'law')->dropDownList([
                    '0' => 'Не судим',
                    '1' => 'Имею погашенную судимость',
                    '2' => 'Имею не погашенную судимость',
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'bistrip')->dropDownList([
                    '0' => 'Не готов к командировкам',
                    '1' => 'Готов к командировкам до 1 мес.',
                    '2' => 'Готов к командировкам от 1 до 2 мес.',
                ]) ?>
            </div>
            <div class="col-md-1">

            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <?= $form->field($model, 'personal')->textarea(['placeholder' => 'Укажите Вашы личные качества, например как целеустремленность, учтивость, аккуратность, пунктуальность, умение находить компромисы и т.д.', 'rows' => 4]) ?>
            </div>
        </div>

        <p style="font-size: 14pt; color: #767676;">Если вы имеете водительское удостоверение, укажите его номер и открытые категории.</p>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'drive')->textInput(['placeholder' => 'Если у Вас есть водительское удостоверение укажите его номер']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'catdrive')->textInput(['placeholder' => 'Укажите открытые категории через запятую']) ?>
            </div>
        </div>

        <h3>5. Должность и оклад</h3>
        <hr>
        <p style="font-size: 14pt; color: #767676;">Укажите должность на которую хотели бы претендовать, а в случаи если ее нет в списке, выберитее наиболее подходящую
        смежную специальность. Укажите доход (в месяц) который Вы бы хотели получать. Мы рекомендуем Вам указывать реальные цифры, не стоит сильно завышать свои желания,
        но так же и не стоит занижать, укажите среднее значение.</p>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'profession') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'pay')->textInput(['placeholder' => 'Желаемый уровень дохода']) ?>
            </div>
        </div>

        <h3>6. Контактные данные</h3>
        <hr>

        <p style="font-size: 14pt; color: #767676;">Укажите актуальные контактные данные, чтоб мы могли с Вами связаться, если по какой-то причине ваши данные изменились, Вы можете самостоятельно
        изменить их при помощи данной формы. Старайтесь всегда поддерживать актуальные номера телефоннов и электронные адреся, это позволит Вам получать от
        нас приглашение на участие в различных проектах и мероприятиях.</p>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+7 (999) 999-9999',
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'email')->input('email') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'socseti1')->textInput(['placeholder' => 'Ссылка на Ваш аккаунт в социальных сетях']) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'socseti2')->textInput(['placeholder' => 'Ссылка на Ваш аккаунт в социальных сетях']) ?>
            </div>
        </div>
        <br>
        <p>  Я подтверждаю, что вся введенная информация
        не забудьте предоставить оригиналы для проверки на достоверность специалистам компании
        если у вас есть сканер, отсканируйте и направьте нам на электронную почту, в противном случаи можете
            подъехать в офис, где наши специалисты самостоятельно отсканируют все документы.</p>
        <br>
        <!--Форма заполнена, хватит мучить ее пользователя-->
        <div class="form-group">
            <?= Html::submitButton('Редактрировать', ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div> <!--Конец основного блока div-->
<br>
</div><!-- user-people -->
