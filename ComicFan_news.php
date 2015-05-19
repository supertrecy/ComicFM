<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="mv page">
    <meta name="author" content="trecy">
    <title>漫FM-Comic 漫资讯</title>
    <!-- Bootstrap css-->
    <link href="css/site.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">
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

                <li class="active" role="presentation"><a href="ComicFan_news.php">资讯</a></li>


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
                <li role="presentation"><a>
                    <button type="button" data-toggle="modal" data-target="#LoginDialog"
                            style="background-color: transparent; border: 0;">
                        登陆
                    </button>
                </a></li>
                <li role="presentation"><a>
                    <button type="button" data-toggle="modal" data-target="#RegisterDialog"
                            style="background-color: transparent; border: 0;">
                        注册
                    </button>
                </a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        UserName
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

<div class="container" id="news">
    <div id="content_header" class="row" style="margin-top: 20px;">
        <div class="ourlogo">
            <img src="images/logo.png" alt="our logo">
        </div>
    </div>

    <div id="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                资讯
            </div>
            <div class="content_panel">
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div class="row"><!---->
                    <div class="news-item">
                        <img class="news-item-image" src="images/1.jpg">

                        <div class="item-text">
                            <h4 class="new-item-title">马天宇身穿不同材质的格子西装，与名车相伴，一展优雅绅士.</h4>

                            <p class="new-item-intro">
                                5月16-17日，由著名导演陈蔚执导、陕西演艺集团、陕西省歌舞剧院有限公司打造的歌剧《大汉苏武》将在走上国家大剧院的舞台，届时，这部集艺术性、思想性...</p>
                            <a href="#" class="button button-pill button-tiny">查看全文</a>
                        </div>
                    </div>
                </div>
                <div style="float:right">
                    <nav class="page">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span
                                    aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">... <span class="sr-only">(current)</span></a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ModalLogin -->
<div class="modal fade" id="LoginDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LoginLabel">漫FM账号登录</h4>
            </div>
            <div class="modal-body" style="background: url(images/29.jpg)">
                <center>
                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    </p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 65px;">
                        还没有漫FM帐户？<a href="#">立即注册!</a>
                    </span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">登陆</button>
            </div>
        </div>
    </div>
</div>
<!--ModelLogin END-->

<!-- ModalRegister -->
<div class="modal fade" id="RegisterDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="RegisterLabel">漫FM账号注册</h4>
            </div>
            <div class="modal-body">
                <center>
                    <p><input type="text" name="username" placeholder="您的邮箱地址或用户名" style="height: 30px; width: 230px;"/>
                    </p>

                    <p><input type="password" name="password" placeholder="请输入密码" style="height: 30px; width: 230px;"/>
                    </p>

                    <p>
                        <span style="margin-right: 80px;"><label><input type="checkbox"
                                                                        name="rememberMe"/>下次自动登录</label></span>
                        <span><label><a href="#">忘记密码</a></label></span>
                    </p>

                    <p>
                    <span style="margin-left: 60px;">
                        还没有漫FM帐户？<a href="#">立即注册!</a>
                    </span>
                    </p>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">注册</button>
            </div>
        </div>
    </div>
</div>
<!--ModelRegister END-->

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

<!--返回顶部-->
<a id="scrollUp" href="#news" style="position: fixed; z-index: 2147483647; display: block;">
    <i class="glyphicon glyphicon-menu-up"></i></a>
<!--END 返回顶部-->

<script>
    $("#navtab a").click(function (e) {
        $(this).tab("show");
    })
</script>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>