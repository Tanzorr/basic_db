<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Vaults';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vault-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Vault', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
