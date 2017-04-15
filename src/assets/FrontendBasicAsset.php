<?php
/**
 * Created by PhpStorm.
 * User: havoe
 * Date: 2017/4/15
 * Time: 下午6:07
 */



namespace havoe\layui\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontendBasicAsset extends AssetBundle
{


    public $sourcePath =  __DIR__ . '/../static/frontend/';

    public $css = [
        'css/global.css',
        'css/full.css',
    ];
    public $js = [

    ];
    public $depends = [
        'havoe\layui\assets\BasicAsset',

    ];
}
