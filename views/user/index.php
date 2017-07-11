<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['site/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php 
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
            'id',
            'lastname',
            'firstname',
            'patronymic',
            'rfcid',
            [
                'attribute'=>'groupTotem',
                'value'=>'group.totemname'
            ],
            [
                'attribute'=>'routeName',
                'value'=>'route.name'
            ],
    ]
]);
    ?>
    <?= GridView::widget([
        'summary'=>'Пользователей {count} - Страница {page}',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'lastname',
            'firstname',
            'patronymic',
            'rfcid',
            [
                'attribute'=>'groupTotem',
                'value'=>'group.totemname'
            ],
            [
                'attribute'=>'routeName',
                'value'=>'route.name'
            ],
            // 'groupid',
            // 'batchid',
            // 'routeid',
            // 'iscap',
            // 'isdeleted',
             'sex',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>