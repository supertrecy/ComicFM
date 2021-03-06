<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head lang="en-zh">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="漫FM,动漫音乐MV,音乐,动漫,动漫MV,在线动漫MV,音乐MV,动漫视频,音乐视频,动漫音乐"/>
    <meta name="description" content="专为动漫迷打造的音乐盛会，仅供学习使用。"/>
    <title>漫FM-Comic Fan</title>
    <link rel="stylesheet" href="css/site.min.css">
    <!--<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/comicfm.ico">

    <style>
        #MyCarousel {
            top: 1.7rem;
        }
    </style>
</head>
<body>

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
                <li class="active">
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
                        <li><a href="#">全部漫单</a></li>
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
                <?php
				    if (empty ( $_SESSION["username"] )) {
                ?>
                <li role="presentation">
                    <a href="ComicFan_login.php">登陆</a>
                </li>
                <li role="presentation">
                    <a href="ComicFan_register.php">注册</a>
                </li>
                <?php
				}
				    else
				    {
				?>
                <li>
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown" role="button"> <?php echo $_SESSION["username"] ?>
                       <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="ComicFan_user.php">我的主页</a></li>
                        <li><a href="#">个人设置</a></li>
                        <li><a href="php/logout.php" class="">退出</a></li>
                    </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>
<!--END NAVBAR-->

<!--Carousel-->
<div id="MyCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#MyCarousel" data-slide-to="1"></li>
        <li data-target="#MyCarousel" data-slide-to="2"></li>
        <li data-target="#MyCarousel" data-slide-to="3"></li>
        <li data-target="#MyCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">

        <div class="active item">
            <img src="images/29.jpg" alt="29"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>This is a test</h2>

                    <p class="lead">ohoohohooohohohasdfhaslfnkksla,asdjfl;fjsdal
                        asdklfjalsfjla;skdjksal;fjlsdakfj.</p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="images/30.jpg" alt="30"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>This is a test</h2>

                    <p class="lead">ohoohohooohohohasdfhaslfnkksla,asdjfl;fjsdal
                        asdklfjalsfjla;skdjksal;fjlsdakfj.</p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="images/31.jpg" alt="31"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>This is a test</h2>

                    <p class="lead">ohoohohooohohohasdfhaslfnkksla,asdjfl;fjsdal
                        asdklfjalsfjla;skdjksal;fjlsdakfj.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/32.jpg" alt="32"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>This is a test</h2>

                    <p class="lead">ohoohohooohohohasdfhaslfnkksla,asdjfl;fjsdal
                        asdklfjalsfjla;skdjksal;fjlsdakfj.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/33.jpg" alt="33"/>

            <div class="container">
                <div class="carousel-caption">
                    <h2>This is a test</h2>

                    <p class="lead">ohoohohooohohohasdfhaslfnkksla,asdjfl;fjsdal
                        asdklfjalsfjla;skdjksal;fjlsdakfj.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#MyCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>‹</a>
    <a class="carousel-control right" href="#MyCarousel" data-slide="next">›
        <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!--END CAROUSEL-->

<br>
<br>
<br>
<br>
<br>

<div class="container">
    <!--首播MV-->
    <div class="container shouboEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="shouboTab">
                <li role="presentation" style="top: -1rem"><h1>MV首播</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" class="navbar-right" style="top: 1.6rem"><a href="#">
                    其他</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li class="navbar-right" style="top: 2.4rem"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="#" class="thumbnail" style="height: 24.5rem"><img src="images/37.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

        </div>
    </div>
    <!--END SHOUBO-->

    <br>
    <br>
    <br>

    <!--M榜-->
    <div class="container mBangEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="mBangTab">
                <li role="presentation" style="top: -1rem"><h1>漫M榜</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" class="navbar-right" style="top: 1.6rem"><a href="#">
                    其他</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <a href="#" class="thumbnail" style="height: 24rem;">
                <img src="images/30.jpg" alt="#" style="height: 23rem"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/34.jpg" alt="#"></a>
            </div>

        </div>
    </div>
    <!--END MBANG-->

    <br>
    <br>
    <br>

    <!--热门推荐-->
    <div class="container hotEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="hotTab">
                <li role="presentation" style="top: -1rem"><h1>热门推荐</h1></li>
                <li class="navbar-right"></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    其他</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.5rem" class="navbar-right"><a href="#">
                    欧美</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    日本</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="navbar-right"><a href="#">
                    中国</a></li>
                <li style="top: 2.4rem" class="navbar-right"><span
                        class="glyphicon glyphicon glyphicon-option-vertical"></span></li>
                <li role="presentation" style="top: 1.6rem" class="active navbar-right"><a href="#">
                    全部</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"
                                                                            style="height: 23rem"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/220x125.jpg" alt="#"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail"><img src="images/220x125.jpg" alt="#"></a>
                <!--<div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br><small>xxx</small></a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;nkndskla;hvd;oeihrk.
                    </p>
                </div>-->
            </div>

        </div>
    </div>
    <!--END 热门推荐-->

    <br>
    <br>
    <br>

    <!--漫M资讯-->
    <div class="container infoEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="infoTab">
                <li role="presentation" style="top: -1rem"><h1>漫M资讯</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.7rem" class="navbar-right"><a href="#" role="presentation">
                    更多...</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="#" class="thumbnail" style="height: 23.9rem;">
                    <img src="images/30.jpg" alt="#" style="height: 23rem">
                </a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/30.jpg" alt="#"></a>

                    <div class="caption">
                        <h3>
                            <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                                <small>xxx</small>
                            </a>
                        </h3>
                        <p>
                            yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>

                <div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                            <small>xxx</small>
                        </a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                    </p>
                </div>

            </div>

        </div>
    </div>
    <!--END 漫M资讯-->

    <br>
    <br>
    <br>

    <!--精品漫单-->
    <div class="container delicateEntries">

        <div class="navbar navbar-default" style="width: 86rem;">
            <ul class="nav nav-pills" id="delicateTab">
                <li role="presentation" style="top: -1rem"><h1>精品漫单</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.7rem" class="navbar-right"><a href="#" role="presentation">
                    更多...</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>

                <div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                            <small>xxx</small>
                        </a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>

                <div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                            <small>xxx</small>
                        </a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>

                <div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                            <small>xxx</small>
                        </a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>

                <div class="caption">
                    <h3>
                        <a href="#" title="This is a test" target="_blank" onclick="">This is a test.<br>
                            <small>xxx</small>
                        </a>
                    </h3>
                    <p>
                        yoyodsfhahfskdhfal;hfiewohfla;<br>nkndskla;hvd;oeihrk.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--END 精品漫单-->

    <br>
    <br>
    <br>

    <!--猜你喜欢-->
    <div class="container likeEntries">
        <div class="navbar" style="width: 86rem;">
            <ul class="nav nav-pills" id="likeTab">
                <li role="presentation"><h1>猜你喜欢</h1></li>
                <li class="navbar-right"></li>
                <li style="top: 1.3rem" class="navbar-right"><a href="#" role="presentation">
                    <span class="glyphicon glyphicon-refresh"></span>
                    换一换</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="#" class="thumbnail" style="height: 23.9rem;"><img src="images/30.jpg" alt="#"></a>
            </div>
        </div>
    </div>
    <!--END 猜你喜欢-->
</div>

<!-- ModalLogin -->
<div class="modal fade" id="LoginDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content" id="LoginDialogContent">
            <form action="php/login.php" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LoginLabel">漫FM账号登录</h4>
            </div>
            <div class="modal-body" style="background: url(images/29.jpg)">
                <center>
                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p>
                        <span style="margin-right: 60px;"><label><input type="checkbox" name="rememberMe"/>
                            下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 10px;">
                        还没有漫FM帐户？
                        <a>
                            <button type="button" data-toggle="modal" data-target="#RegisterDialog"
                                    name="instantRegister"
                                    style="background-color: transparent; border: 0;" onclick="closeLogin(this)">
                                立即注册!
                            </button>
                        </a>
                    </span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <input value="登陆" type="submit" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
<!--ModelLogin END-->

<!-- ModalRegister -->
<div class="modal fade" id="RegisterDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content" id="RegisterDialogContent">
        <form action="php/register.php" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="RegisterLabel">漫FM账号注册</h4>
            </div>
            <div class="modal-body" style="background: url(images/29.jpg)">
                <center>
                    <p><input type="text" name="nickname" placeholder="昵称" style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p><input type="password" name="checkpwd" placeholder="请再次输入密码"
                              style="height: 30px; width: 230px;"/>
                    <span class="error">* </span></p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <input type="submit" value="注册" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
<!--ModelRegister END-->

<!--FOOTER-->
<footer class="footer">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <h4>
                    <img src="images/29.jpg" style="width: 10rem">
                </h4>

                <p>sfdgsgsdgsdgsdgfsdgfsfsdgfsd<a href="#">linklinklink</a>asdfagar.</p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">
                <div class="row about">
                    <div class="col-xs-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">友情链接</a></li>
                            <li><a href="#">招聘</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" title="JCT" target="_blank">JCT</a></li>
                            <li><a href="#">电子邮件</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>其他</h4>
                    </div>
                    <div class="col-xs-3">
                        <h4>其他</h4>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><a href="#" target="_blank">xxx</a></li>
                <li>xxx</li>
            </ul>
        </div>
    </div>
</footer>
<!--END FOOTER-->

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
    $("#shouboTab a").click(function (e) {
        $(this).tab("show");
    })
    $("#mBangTab a").click(function (e) {
        $(this).tab("show");
    })
    $("#hotTab a").click(function (e) {
        $(this).tab("show");
    })
</script>

<script>
    !function ($) {
        $(function () {
            $('#MyCarousel').carousel()
        })
    }(window.jQuery)
</script>

<!--返回顶部-->
<a id="scrollUp" href="#MyCarousel" style="position: fixed; z-index: 2147483647; display: block;">
    <img src="images/btn_uptotop.png" alt="btn_UpToTop"/></a>
<!--END 返回顶部-->
</body>
</html>