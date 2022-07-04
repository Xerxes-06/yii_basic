<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-berita">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Ini adalah berita
    </p>

    <code><?= __FILE__ ?></code>
</div>
