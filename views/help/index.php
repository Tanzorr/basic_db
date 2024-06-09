<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="help-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Help Center page. You may modify the following file to customize its content:
    </p>
    <p>
        lorm ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias animi aperiam aspernatur atque autem
        commodi consequatur cumque cupiditate delectus doloremque doloribus ducimus ea eius eligendi eos error est
        exercitationem explicabo facere facilis fugiat harum id illum impedit in incidunt ipsa iure laboriosam laborum
        laudantium magnam maxime minima minus molestiae natus nemo neque nihil nisi nobis non nostrum numquam obcaecati
        odit officiis omnis optio pariatur perferendis perspiciatis placeat possimus praesentium provident quae quas quia
    </p>

    <?= Html::a('Account Settings', ['help/account-settings']) ?>

    <code><?= __FILE__ ?></code>
</div>
