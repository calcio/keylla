<?php
use yii\helpers\Html;
?>    
    <div class="col-md-4 col-sm-6">    
        <!-- Make appointment -->
        <div class="well well1-lg">
            <h4>Marque uma consulta</h4>
            <p>Você pode marcar uma consulta de 3 maneiras diferentes. Por telefône, e-mail ou pelo nosso formulario de contato. <br /><p>
            <p><i class="fa fa-phone circle-2 white bg-red"></i>&nbsp; <?= Html::encode(Yii::$app->params['personalCelphone']) ?></p>
            <p><i class="fa fa-envelope circle-2 white bg-green"></i>&nbsp; <?= Html::encode(Yii::$app->params['personalEmail']) ?></p>
           
            <br /><a href="/site/contact/" class="btn btn-color btn-sm">Marcar consulta</a>
        </div>    
    </div>