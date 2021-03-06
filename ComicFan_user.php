<!DOCTYPE html>
<html>
<head lang="en-zh">
    <meta charset="UTF-8">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <title>漫FM-Comic 用户</title>
    <link href="http://static.bootcss.com/www/assets/css/site.min.css?v5" rel="stylesheet">
    <!--<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="css/site.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/comicfm.ico">
</head>

<body>
<?php
    session_start();
?>
<!--NAVBAR-->
<header id="mynav" class="navbar navbar-default navbar-static-top bs-docs-nav navbar-fixed-top" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                <span class="sr-only">缩放下拉列表</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Comic-FM</a>
        </div>
        <!--navbar header-->
        <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav" id="navtab">
                <li>
                    <a href="index.php">首页<span class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">MV
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_mv.php">推荐MV</a></li>
                        <li><a href="ComicFan_AllMv.php">全部MV</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        漫单
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_mList.php">推荐漫单</a></li>
                        <li><a href="ComicFan_mMan.php">漫单达人</a></li>
                        <li><a href="ComicFan_AllMList.php">全部漫单</a></li>
                    </ul>
                </li>

                <li role="presentation"><a href="ComicFan_news.php">资讯</a></li>


                <li role="presentation"><a href="#">
                    <span class="badge badge-info pull-right" style="background-color: #46b8da">1</span>通知</a>
                </li>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" autocomplete="on"
                               placeholder="名侦探柯南《Time after Time》">
                    </div>
                    <button type="button" class="btn btn-default">
                        <span aria-hidden="true"><img src="images/btn_search.png" alt="btn_search"
                                                      style="width: 25px;"/></span>
                    </button>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        Vin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">我的MV</a></li>
                        <li><a href="#">我的漫友</a></li>
                        <li><a href="#">我的漫单</a></li>
                        <li><a href="#">我的漫粉</a></li>
                        <li><a href="#">个人设置</a></li>
                        <li><a href="#" class="">退出</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--END NAVBAR-->
<br><br>

<div class="container">
    <!-- 选项卡组件（菜单项nav-tabs）-->

    <div class="col-sm-8 col-xs-8 col-md-8">
        <div class="pannel panel-default">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li><a href="#mainpage" role="tab" data-toggle="tab">主页</a></li>
                <li class="active"><a href="#mv" role="tab" data-toggle="tab">mv</a></li>
                <li><a href="#mlist" role="tab" data-toggle="tab">漫单</a></li>
                <li><a href="#mfriend" role="tab" data-toggle="tab">漫友</a></li>
            </ul>
            <!-- 选项卡面板 -->
            <div id="myTabContent" class="tab-content">
                <!--用户主页-->
                <div class="tab-pane fade in active" id="mainpage">
                    <br><br>
                    主页内容
                </div>

                <!--用户mv-->
                <div class="tab-pane fade" id="mv">
                    <!-- 选项卡组件（菜单项nav-pills）-->
                    <ul id="myMv" class="nav nav-pills" role="tablist">
                        <br><br>
                        <li class="active"><a href="#collect" role="tab" data-toggle="pill">收藏的MV</a></li>
                        <li><a href="#tuijian" role="tab" data-toggle="pill">推荐的MV</a></li>
                        <li><a href="#upload" role="tab" data-toggle="pill">上传的MV</a></li>
                        <li><a href="#download" role="tab" data-toggle="pill">下载的MV</a></li>
                    </ul>
                    <!-- 选项卡面板 -->
                    <div id="myMvContent" class="tab-content">
                        <div class="tab-pane fade in active" id="collect">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共收藏4首
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object media-middle" src="images/logo.png" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/Beatles.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/468x273.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tuijian">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共推荐2首
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/4.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="upload">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共上传2首
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/3.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="download">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共下载2首
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">time after time</h4></a>

                                            <p>演唱者：<a href="#">仓木麻衣</a></p>

                                            <p>出自：<a href="#">名侦探柯南</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--用户漫单-->
                <div class="tab-pane fade" id="mlist">
                    <!-- 选项卡组件（菜单项nav-pills）-->
                    <ul id="myMList" class="nav nav-pills" role="tablist">
                        <br><br>
                        <li class="active"><a href="#mCollect" role="tab" data-toggle="pill">收藏过的漫单</a></li>
                        <li><a href="#mTuijian" role="tab" data-toggle="pill">推荐过的漫单</a></li>
                        <li><a href="#create" role="tab" data-toggle="pill">我创建的漫单</a></li>
                    </ul>
                    <!-- 选项卡面板 -->
                    <div id="myMListContent" class="tab-content">
                        <div class="tab-pane fade in active" id="mCollect">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共收藏4个漫单
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/5.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/220x125.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="mTuijian">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共推荐过2个漫单
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/8.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/7.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="create">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共创建过2个漫单
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media ">
                                        <div class="media-left">
                                            <a href="#">
                                                <div class="thumbnail" style="height: 100px; width:200px">
                                                    <img class="media-object media-middle" src="images/8.jpg"
                                                         alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <a href="#"><h4 class="media-heading">即生</h4></a>

                                            <p>创建者：<a href="#">who</a></p>

                                            <p>balabalabalabalabalbadfjaijfakdkjjjjdfadfadfadfadfafdafaf
                                                afafdadfafdafafadfaf</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--用户漫友-->
                <div class="tab-pane fade" id="mfriend">
                    <!-- 漫友选项卡组件（菜单项nav-pills）-->
                    <ul id="myMFriend" class="nav nav-pills" role="tablist">
                        <br><br>
                        <li class="active"><a href="#my" role="tab" data-toggle="pill">我关注的漫友</a></li>
                        <li><a href="#they" role="tab" data-toggle="pill">关注我的漫友</a></li>
                    </ul>

                    <!-- 选项卡面板 -->
                    <div id="myMFriendContent" class="tab-content">
                        <div class="tab-pane fade in active" id="my">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共关注1个漫友
                                </div>
                            </div>

                            <div class="media ">
                                <div class="media-left">
                                    <a href="#">
                                        <div class="thumbnail" style="height: 200px; width:200px">
                                            <img class="media-object media-middle" src="images/Origin.jpg"
                                                 alt="...">
                                        </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <br>

                                    <p><h4 class="media-heading"><a href="#">kisy</a></h4><a href="#">(设置备注)</a></p>

                                    <p>星座：水瓶座</p>

                                    <p>简介：最新、最快，好听、好看的动漫MV，就在这里！</p>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="they">
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    共有1个漫友关注你
                                </div>
                            </div>

                            <div class="media ">
                                <div class="media-left">
                                    <a href="#">
                                        <div class="thumbnail" style="height: 200px; width:200px">
                                            <img class="media-object media-middle" src="images/absolution.jpg"
                                                 alt="...">
                                        </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <br>

                                    <p><h4 class="media-heading"><a href="#">see</a></h4><a href="#">(设置备注)</a></p>

                                    <p>星座：射手</p>

                                    <p>简介：fajoerejfoapjfadjfaiofjaifd</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--选项卡结束-->
    </div>
    <!--右侧-->

    <div class="col-sm-4 col-xs-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media ">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object media-middle" src="images/people.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <br>
                        <a href="ComicFan_user.php"><h4 class="media-heading">Vin</h4></a>

                        <p>处女座 | 女</p>
                    </div>
                    <div class="media-bottom">
                        <br>

                        <p>关注 :<a href="#">4</a></p>

                        <p>粉丝：<a href="#">6</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>