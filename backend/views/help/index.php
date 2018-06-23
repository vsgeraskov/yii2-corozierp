<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 11.06.18
 * Time: 20:45
 */
use yii\helpers\Url;

$this->title = 'Раздел помощи';
$this->params['breadcrumbs'][] = $this->title;
?>

<a href="<?= Url::to(['list'])?>" class="btn btn-primary">УПРАВЛЕНИЕ</a>
<a href="<?= Url::to(['create'])?>" class="btn btn-success">ДОБАВИТЬ</a>

<br><br>

<p>
    В настоящем разделе Вы найдете всю необходимую информацию, на наиболее часто встречающиеся вопросы касающуюся работы в системе производственного управления.
    Настоящий разде поддерживается в актуальном состоянии, и постоянно обновляется.
</p>

<?php

$category = 0;

foreach($model as $models)
{
    if($category!=$models->category)
    {
        $category = $models->category;
        switch ($category){
            case 1: echo '<h2>Основной раздел</h2>'; break;
            case 2: echo '<h2>Трудовая деятельность</h2>'; break;
            case 3: echo '<h2>Бухгалтерские вопросы</h2>'; break;
            case 3: echo '<h2>Производственная деятельность</h2>'; break;
        }
    }

    echo "<a href=\"".Url::to(['viewarticle','id' => $models->id_articl])."\">";
    echo $models->title." ".$models->id_articl."<br>";
    echo "</a>";
}
?>