<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 1/8/2018
 * Time: 3:33 PM
 */

use yii\helpers\Url;
use common\models\data\LocationData;

/* @var $this yii\web\View */
?>
<ul class="cat-list col-md-3  col-6 col-xxs-12">
    <?php
    $dataPart = LocationData::getPartList(0);
    foreach ($dataPart as $key => $item):
        ?>
        <li><a href="<?php echo Url::to(['/ads/index', 'city' => $key]) ?>"><?php echo $item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
    <?php
    $dataPart = LocationData::getPartList(1);
    foreach ($dataPart as $key => $item):
        ?>
        <li><a href="<?php echo Url::to(['/ads/index', 'city' => $key]) ?>"><?php echo $item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
    <?php
    $dataPart = LocationData::getPartList(2);
    foreach ($dataPart as $key => $item):
        ?>
        <li><a href="<?php echo Url::to(['/ads/index', 'city' => $key]) ?>"><?php echo $item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
    <?php
    $dataPart = LocationData::getPartList(3);
    foreach ($dataPart as $key => $item):
        ?>
        <li><a href="<?php echo Url::to(['/ads/index', 'city' => $key]) ?>"><?php echo $item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
