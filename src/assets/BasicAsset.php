<?php
/**
 * Created by PhpStorm.
 * User: havoe
 * Date: 2017/4/15
 * Time: 下午4:55
 */
namespace havoe\layui\assets;
use yii\web\AssetBundle;

class BasicAsset extends  AssetBundle{

    public $sourcePath =  __DIR__ . '/../layui/';

    public $css = [
        'css/layui.css',
    ];
    public $js = [
        'lay/dest/layui.all.js',
    ];

}