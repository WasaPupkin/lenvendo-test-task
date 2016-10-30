<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Image */
/* @var $drawForm app\models\DrawSaveForm */

$this->title = 'Создание шедевра';
$this->params['breadcrumbs'][] = ['label' => 'Изображения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'drawForm' => $drawForm,
    ]) ?>

</div>
