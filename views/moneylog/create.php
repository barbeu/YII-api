<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Moneylog */

$this->title = 'Create Moneylog';
$this->params['breadcrumbs'][] = ['label' => 'Moneylogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moneylog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
