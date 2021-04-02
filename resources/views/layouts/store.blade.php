<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Store Board</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('store', 'home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
z   
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Search Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('store', 'add') }}">
                    <i class="fa fa-qrcode" aria-hidden="true"></i>
                    <span>Add Inventories</span>
                </a>

            </li>

            <!-- Nav Item - Serach -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('store', 'view') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>View</span>
                </a>
            </li>
            <!-- Nav Item Stat-->
            <li class="nav-item">
            <a class="nav-link" href="{{url('store' , 'transfer')}}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Give</span>
                </a>
            </li>
            <!-- Nav Item Stat-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('store', 'addEmployee') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Add Employee</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <main class="py-4">
                @yield('content')
            </main>

            @include('layouts.footer')
