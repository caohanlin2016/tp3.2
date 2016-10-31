<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Blank Page - Ace Admin</title>

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace-fonts.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace.min.css"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace-part2.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace-rtl.min.css"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/tp3.2/Public/backend/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/tp3.2/Public/backend/assets/js/html5shiv.js"></script>
    <script src="/tp3.2/Public/backend/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    微信商城管理后台
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <!--<li class="grey">-->
                    <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                        <!--<i class="ace-icon fa fa-tasks"></i>-->
                        <!--<span class="badge badge-grey">4</span>-->
                    <!--</a>-->

                    <!--<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">-->
                        <!--<li class="dropdown-header">-->
                            <!--<i class="ace-icon fa fa-check"></i>-->
                            <!--4 Tasks to complete-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
                                    <!--<span class="pull-left">Software Update</span>-->
                                    <!--<span class="pull-right">65%</span>-->
                                <!--</div>-->

                                <!--<div class="progress progress-mini">-->
                                    <!--<div style="width:65%" class="progress-bar"></div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
                                    <!--<span class="pull-left">Hardware Upgrade</span>-->
                                    <!--<span class="pull-right">35%</span>-->
                                <!--</div>-->

                                <!--<div class="progress progress-mini">-->
                                    <!--<div style="width:35%" class="progress-bar progress-bar-danger"></div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
                                    <!--<span class="pull-left">Unit Testing</span>-->
                                    <!--<span class="pull-right">15%</span>-->
                                <!--</div>-->

                                <!--<div class="progress progress-mini">-->
                                    <!--<div style="width:15%" class="progress-bar progress-bar-warning"></div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
                                    <!--<span class="pull-left">Bug Fixes</span>-->
                                    <!--<span class="pull-right">90%</span>-->
                                <!--</div>-->

                                <!--<div class="progress progress-mini progress-striped active">-->
                                    <!--<div style="width:90%" class="progress-bar progress-bar-success"></div>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li class="dropdown-footer">-->
                            <!--<a href="#">-->
                                <!--See tasks with details-->
                                <!--<i class="ace-icon fa fa-arrow-right"></i>-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li class="purple">-->
                    <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                        <!--<i class="ace-icon fa fa-bell icon-animated-bell"></i>-->
                        <!--<span class="badge badge-important">8</span>-->
                    <!--</a>-->

                    <!--<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">-->
                        <!--<li class="dropdown-header">-->
                            <!--<i class="ace-icon fa fa-exclamation-triangle"></i>-->
                            <!--8 Notifications-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
											<!--<span class="pull-left">-->
												<!--<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>-->
												<!--New Comments-->
											<!--</span>-->
                                    <!--<span class="pull-right badge badge-info">+12</span>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<i class="btn btn-xs btn-primary fa fa-user"></i>-->
                                <!--Bob just signed up as an editor ...-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
											<!--<span class="pull-left">-->
												<!--<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>-->
												<!--New Orders-->
											<!--</span>-->
                                    <!--<span class="pull-right badge badge-success">+8</span>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="#">-->
                                <!--<div class="clearfix">-->
											<!--<span class="pull-left">-->
												<!--<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>-->
												<!--Followers-->
											<!--</span>-->
                                    <!--<span class="pull-right badge badge-info">+11</span>-->
                                <!--</div>-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li class="dropdown-footer">-->
                            <!--<a href="#">-->
                                <!--See all notifications-->
                                <!--<i class="ace-icon fa fa-arrow-right"></i>-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li class="green">-->
                    <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                        <!--<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>-->
                        <!--<span class="badge badge-success">5</span>-->
                    <!--</a>-->

                    <!--<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">-->
                        <!--<li class="dropdown-header">-->
                            <!--<i class="ace-icon fa fa-envelope-o"></i>-->
                            <!--5 Messages-->
                        <!--</li>-->

                        <!--<li class="dropdown-content">-->
                            <!--<ul class="dropdown-menu dropdown-navbar">-->
                                <!--<li>-->
                                    <!--<a href="#">-->
                                        <!--<img src="/tp3.2/Public/backend/assets/avatars/avatar.png" class="msg-photo"-->
                                             <!--alt="Alex's Avatar"/>-->
												<!--<span class="msg-body">-->
													<!--<span class="msg-title">-->
														<!--<span class="blue">Alex:</span>-->
														<!--Ciao sociis natoque penatibus et auctor ...-->
													<!--</span>-->

													<!--<span class="msg-time">-->
														<!--<i class="ace-icon fa fa-clock-o"></i>-->
														<!--<span>a moment ago</span>-->
													<!--</span>-->
												<!--</span>-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="#">-->
                                        <!--<img src="/tp3.2/Public/backend/assets/avatars/avatar3.png" class="msg-photo"-->
                                             <!--alt="Susan's Avatar"/>-->
												<!--<span class="msg-body">-->
													<!--<span class="msg-title">-->
														<!--<span class="blue">Susan:</span>-->
														<!--Vestibulum id ligula porta felis euismod ...-->
													<!--</span>-->

													<!--<span class="msg-time">-->
														<!--<i class="ace-icon fa fa-clock-o"></i>-->
														<!--<span>20 minutes ago</span>-->
													<!--</span>-->
												<!--</span>-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="#">-->
                                        <!--<img src="/tp3.2/Public/backend/assets/avatars/avatar4.png" class="msg-photo"-->
                                             <!--alt="Bob's Avatar"/>-->
												<!--<span class="msg-body">-->
													<!--<span class="msg-title">-->
														<!--<span class="blue">Bob:</span>-->
														<!--Nullam quis risus eget urna mollis ornare ...-->
													<!--</span>-->

													<!--<span class="msg-time">-->
														<!--<i class="ace-icon fa fa-clock-o"></i>-->
														<!--<span>3:15 pm</span>-->
													<!--</span>-->
												<!--</span>-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="#">-->
                                        <!--<img src="/tp3.2/Public/backend/assets/avatars/avatar2.png" class="msg-photo"-->
                                             <!--alt="Kate's Avatar"/>-->
												<!--<span class="msg-body">-->
													<!--<span class="msg-title">-->
														<!--<span class="blue">Kate:</span>-->
														<!--Ciao sociis natoque eget urna mollis ornare ...-->
													<!--</span>-->

													<!--<span class="msg-time">-->
														<!--<i class="ace-icon fa fa-clock-o"></i>-->
														<!--<span>1:33 pm</span>-->
													<!--</span>-->
												<!--</span>-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="#">-->
                                        <!--<img src="/tp3.2/Public/backend/assets/avatars/avatar5.png" class="msg-photo"-->
                                             <!--alt="Fred's Avatar"/>-->
												<!--<span class="msg-body">-->
													<!--<span class="msg-title">-->
														<!--<span class="blue">Fred:</span>-->
														<!--Vestibulum id penatibus et auctor  ...-->
													<!--</span>-->

													<!--<span class="msg-time">-->
														<!--<i class="ace-icon fa fa-clock-o"></i>-->
														<!--<span>10:09 am</span>-->
													<!--</span>-->
												<!--</span>-->
                                    <!--</a>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</li>-->

                        <!--<li class="dropdown-footer">-->
                            <!--<a href="inbox.html">-->
                                <!--See all messages-->
                                <!--<i class="ace-icon fa fa-arrow-right"></i>-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/tp3.2/Public/backend/assets/avatars/user.jpg"
                             alt="Jason's Photo"/>
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar                  responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active open">
                <a href="index.html">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> 数据概览 </span>
                </a>

                <b class="arrow"></b>
            </li>



            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 产品管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo U('Breakfast/breakfastList');?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            早餐管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            早餐服务时间管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="wysiwyg.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            堂吃管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            烘焙管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            优品管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            送水管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            洗衣管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            体验套餐管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            体验套餐兑换码管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            分类管理
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 订单管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(早餐)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(烘焙)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(优品)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(水果)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(美食)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(生鲜)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(晚餐)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(鲜花)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(送水)
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            订单统计(洗衣)
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 水果管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            水果列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            水果详情
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 生鲜管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            生鲜列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            生鲜详情
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 晚餐管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            晚餐列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            晚餐详情
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 鲜花管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            鲜花列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            鲜花详情
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 美食管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            美食列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            美食详情
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 服务管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            洗车服务管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            家电维修服务管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            服务时间管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            服务说明管理
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 活动管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            往期回顾
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            活动预告
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            活动报名
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 小区管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            小区列表
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 用户管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            用户列表
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>
        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {
                }
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">主页</a>
                </li>

                <li class="active">
                    数据概览
                </li>
            </ul><!-- /.breadcrumb -->

            <!-- #section:basics/content.searchbox -->
            <div class="nav-search" id="nav-search">
                <form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input"
                                       id="nav-search-input" autocomplete="off"/>
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
                </form>
            </div><!-- /.nav-search -->

            <!-- /section:basics/content.searchbox -->
        </div>

        <!-- /section:basics/content.breadcrumbs -->
        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">lr</span>
							河马部落 &copy; 2016-2017
						</span>

                &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
						</span>
            </div>

            <!-- /section:basics/footer -->
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/tp3.2/Public/backend/assets/js/jquery.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/tp3.2/Public/backend/assets/js/jquery1x.min.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/tp3.2/Public/backend/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="/tp3.2/Public/backend/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="/tp3.2/Public/backend/assets/js/ace-elements.min.js"></script>
<script src="/tp3.2/Public/backend/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<link rel="stylesheet" href="/tp3.2/Public/backend/assets/css/ace.onpage-help.css"/>
<link rel="stylesheet" href="/tp3.2/Public/backend/assets/js/themes/sunburst.css"/>

<script type="text/javascript"> ace.vars['base'] = '..'; </script>
<script src="/tp3.2/Public/backend/assets/js/ace/ace.onpage-help.js"></script>
<script src="/tp3.2/Public/backend/assets/js/rainbow.js"></script>
<script src="/tp3.2/Public/backend/assets/js/language/generic.js"></script>
<script src="/tp3.2/Public/backend/assets/js/language/html.js"></script>
<script src="/tp3.2/Public/backend/assets/js/language/css.js"></script>
<script src="/tp3.2/Public/backend/assets/js/language/javascript.js"></script>
</body>
</html>