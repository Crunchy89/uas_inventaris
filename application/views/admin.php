<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Site Properities -->
    <meta name="generator" content="Visual Studio 2015">
    <title><?= $title ?></title>
    <meta name="description" content="Golgi Admin Theme">
    <meta name="keywords" content="html5, ,semantic,ui, library, framework, javascript,jquery,admin,theme">
    <link href="<?= base_url() ?>assets/css/semantic.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/main.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/pace.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
</head>

<body class="admin  pushable pace-done" style="overflow: hidden;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!--sidebar mobile-->
    <div class="ui vertical push sidebar menu  thin left" id="toc">
        <a class="item" href="<?= site_url('inventaris') ?>">
            Dashboard
        </a>
        <a class="item">
            <b>Main</b>
        </a>
        <div class="content">
            <div class="title">
                <i class="dropdown icon"></i>
                Master
            </div>
            <div class="content">
                <a class="item" href="<?= site_url('jenis') ?>">
                    Jenis
                </a>
                <a class="item" href="<?= site_url('kondisi') ?>">
                    Kondisi
                </a>
                <a class="item" href="<?= site_url('ruang') ?>">
                    Ruang
                </a>
                <a class="item" href="<?= site_url('satuan') ?>">
                    Satuan
                </a>
                <a class="item" href="<?= site_url('sumber') ?>">
                    Sumber
                </a>
                <a class="item" href="<?= site_url('tahun') ?>">
                    Tahun
                </a>
            </div>

        </div>
        <a class="item">
            <b>Admin Menu</b>
        </a>
        <div class="content">
            <div class="title">
                <i class="dropdown icon"></i>
                Admin Profile
            </div>
            <div class="content">
                <a class="item" href="<?= site_url('admin') ?>">
                    User
                </a>
                <a class="item" href="<?= site_url('auth/logout') ?>">
                    Logout
                </a>

            </div>

        </div>
    </div>
    <!--sidebar mobile-->
    <!--navbar mobile-->
    <div class="mobilenavbar">
        <div class="ui fixed main menu push no-border no-radius sidemenu2 borderless">

            <a class="launch icon item" style="padding-top:20px">
                <i class="content icon"></i>
            </a>

            <div class="right menu">
                <img class="ui mini circular image" src="<?= base_url() ?>assets/img/user.png">

                <div class="menu" tabindex="-1">
                    <a href="<?= site_url('auth/logout') ?>" class="item">Sign Out</a>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!--navbar mobile-->

    <div class="pusher">
        <div class="full height">
            <!--Load Sidebar Menu In App.js loadhtml function-->
            <div class="toc">
                <div class="ui visible left vertical sidebar menu no-border sidemenu" tabindex="5000" style="overflow: hidden; outline: none;">
                    <a class="item" href="<?= site_url('inventaris') ?>">
                        Dashboard <i class="archive icon"></i>
                    </a>
                    <a class="item">
                        <b>Main</b>
                    </a>

                    <div class="ui accordion">
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Master
                        </div>
                        <div class="content">
                            <a class="item" href="<?= site_url('jenis') ?>">
                                Jenis <i class="clipboard icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('kondisi') ?>">
                                Kondisi <i class="eye icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('ruang') ?>">
                                Ruang <i class="building icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('satuan') ?>">
                                Satuan <i class="file icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('sumber') ?>">
                                Sumber <i class="tasks icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('tahun') ?>">
                                Tahun <i class="calendar icon"></i>
                            </a>
                        </div>
                    </div>
                    <a class="item">
                        <b>Admin Menu</b>
                    </a>
                    <div class="ui accordion">
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Admin Profile
                        </div>
                        <div class="content">
                            <a class="item" href="<?= site_url('admin') ?>">
                                User <i class="user icon"></i>
                            </a>
                            <a class="item" href="<?= site_url('auth/logout') ?>">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article">
                <div class="navbarmenu">
                    <div class="ui fixed top  menu no-border no-radius borderless navmenu">
                        <a class="item active no-padding logo" style="width:250px;" href="<?= site_url('admin') ?>">

                            <h3 class="ui image logoImg">Admin</h3>
                        </a>
                        <a class="item hamburger" data-name="show">
                            <i class="align justify icon"></i>
                        </a>
                        <div class="right menu">
                            <div class="ui dropdown item" tabindex="0">
                                <img class="ui mini circular image" src="<?= base_url() ?>assets/img/user.png">
                                <div class="menu" tabindex="-1">
                                    <a class="item" href="<?= site_url('auth/logout') ?>">Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerli">
                    <div class="ui equal width left aligned padded grid stackable">
                        <?= $view ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>assets/js/semantic.min.js"></script>
    <script data-pace-options="{ &quot;ajax&quot;: false }" src="<?= base_url() ?>assets/js/pace.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assets/js/custom-datatable.js"></script>
    <script src="<?= base_url() ?>assets/js/app.min.js"></script>