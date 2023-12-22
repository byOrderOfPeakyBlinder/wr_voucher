<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $title; ?> </title>

    <!-- Custom fonts for this template-->
    <link href="<?=  base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=  base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/DataTables-1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/Buttons-2.2.3/css/buttons.dataTables.min.css" />
    <script src="<?= base_url('assets') ?>/DataTables/jQuery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/DateTime-1.1.2/css/dataTables.dateTime.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/FixedColumns-4.1.0/css/fixedColumns.dataTables.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/Responsive-2.3.0/css/responsive.dataTables.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets') ?>/DataTables/Scroller-2.0.6/css/scroller.dataTables.css" />
    <!--sweetalert-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin');?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-car"></i> -->
                    <img height="50px" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Wahyu Redjo </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-6">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/voucher'); ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span>Voucher</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/data_customer'); ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span>Data Customer</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/data_transaksi'); ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span>Data Transaksi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?> ">
                    <i style="font-size:20px" class="fas fa-running text "></i>

                    <span>Log out</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['username'];?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/')?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout');?> " data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!--Notif-->
                <div class="er-data" data-erdata="<?php echo $this->session->flashdata('msgeror'); ?>"></div>
                <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>