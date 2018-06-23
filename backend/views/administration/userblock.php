<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 12.05.18
 * Time: 18:00
 */
/* Таблица заблокированных пользователей */

use yii\helpers\Html;

$this->title = 'Управление статусом пользователей';

$this->params['breadcrumbs'][] = ['label' => 'Администрирование', 'url' => ['/administration']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h2> Управление статусом</h2>

<p> В данном разделе можно изменить статус пользователя на (активный / не активынй)
    тем самым ограничить доступ сотрудников к системе. Если пользователь заблокирован, значит он не сможет войти в систему.
    Отдельные права доступа к разделам проекта решаются при помощи RBAC.
    <br><br>
<strong>зеленым</strong> помечаны активные пользователи<br>
    <strong>красным</strong> помечаны не активные пользователи<br><br>
</p>

<table class="table table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Логин</th>
        <th>ФИО</th>
        <th>Статус</th>
        <th></th>
    </tr>
    </thead>

    <?php

    $i=1;

    foreach($dataViewe as $data)
    {
        echo "<tbody>";

        if($data->status != 0)
            echo "<tr class=\"success\">";
        else
            echo "<tr class=\"danger\">";

        echo "<td>";
        echo $i;
        $i++;
        echo "</td>";
    echo "<td>";
    echo $data->username;
    echo "</td>";

    echo "<td>";
    echo $data->username;
    echo "</td>";

     /* $people = \app\models\People::findAll(['id_user' => $data->id]);
     echo $people['id'];*/
    //echo "<td>". $people->name. " ФИО</td>";

    if($data->status != 0)
            echo "<td>АКТИВНЫЙ</td>";
        else
            echo "<td>БЛОКИРОВАН</td>";

        // Выводим иконку для изменения статуса
    echo "<td>";
        if($data->status != 0)
            echo Html::a(
                '',
                ['/help/'],
                ['data-method' => 'post', 'class' => 'fa fa-unlock', 'title' => 'Заблокировать']
            );
        else
           echo Html::a(
                '',
                ['/help/'],
                ['data-method' => 'post', 'class' => 'fa fa-lock', 'title' => 'Разблокировать']
            );

        echo "</td>";

    echo "</tr>";

    echo "</tbody>";
    }

    ?>

</table>