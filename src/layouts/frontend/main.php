<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use havoe\layui\assets\FrontendBasicAsset;
FrontendBasicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="header">
    <div class="main">
        <a class="logo" href="/" title="Fly">Fly社区</a>
        <div class="nav">
            <a class="nav-this " href="jie/index.html">
                <i class="iconfont icon-blog"></i>博客</a>

            <a class="nav-this active" href="jie/index.html">
                <i class="iconfont icon-wenda"></i>问答
            </a>

            <a href="http://www.layui.com/" target="_blank">
                <i class="iconfont icon-ui"></i>框架
            </a>
        </div>

        <div class="nav-user">
            <!-- 未登入状态 -->
            <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
            <span>
                <a href="<?=\yii\helpers\Url::to('login')?>">登入</a><a href="user/reg.html">注册</a></span>
            <p class="out-login">
                <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
            </p>

            <!-- 登入后的状态 -->
            <!--
            <a class="avatar" href="user/index.html">
              <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
              <cite>贤心</cite>
              <i>VIP2</i>
            </a>
            <div class="nav">
              <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
              <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
            </div> -->

        </div>
    </div>
</div>

<?php $this->beginBody() ?>

<?= $content ?>
<ul class="layui-fixbar">
    <li class="layui-icon" lay-type="bar1" style=""></li>
    <li class="layui-icon layui-fixbar-top" lay-type="top" style="display: list-item;"></li></ul>
<div class="layui-layer-move"></div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
