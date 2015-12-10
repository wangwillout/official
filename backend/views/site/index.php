<?php
use yii\helpers\Url;
?>
<div class="header">
    <div class="dl-title"><span class="">钱富宝官网后台管理系统</span></div>
    <div class="dl-log">欢迎您，<span class="dl-log-user"><?=Yii::$app->user->identity->username?></span>
        <a href="<?=Url::to(['logout'])?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>

<div class="content">
    <div class="dl-main-nav">
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-storage">首页</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-inventory">搜索页</div></li>
        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>

</div>

<script>
    BUI.use('common/main',function(){
        var config = [
            {
                id:'menu',
                menu:[{
                    text:'首页内容',
                    items:[
                        {id:'main-menu',text:'顶部导航',href:'main/menu.php'},
                        {id:'second-menu',text:'二级菜单',href:'main/second-menu.php'}
                    ]
                }]
            },
            {
                id:'search',
                menu:[{
                    text:'搜索页面',
                    items:[
                       {id:'introduce',text:'搜索页面简介',href:'search/introduce.html'}
                    ]
                }]
            }
        ];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>