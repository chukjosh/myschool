<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Todo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-todo">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Todo page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
