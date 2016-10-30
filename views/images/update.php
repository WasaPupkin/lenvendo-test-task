<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Image */
/* @var $drawForm app\models\DrawSaveForm */

$this->title = 'Редактирование изроражения: ' . $model->image_id;
$this->params['breadcrumbs'][] = ['label' => 'Изображения', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->image_id, 'url' => ['view', 'id' => $model->image_id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'drawForm' => $drawForm,
    ]) ?>

</div>
