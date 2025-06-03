<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Dashboard | Your Company Name</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        /* Basic styling for dashboard items */
        .dashboard-item {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .dashboard-item:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .dashboard-item h4 {
            margin-top: 0;
            color: #333;
        }
        .dashboard-item p {
            color: #666;
        }
        .dashboard-item .ht-btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="main-wrapper">

    <header class="header-section section sticker">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Site Logo"></a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="has-dropdown"><a href="#">Hosting</a>
                                <ul class="sub-menu">
                                    <li><a href="hosting-shared.html">Shared Hosting</a></li>
                                    <li><a href="hosting-vps.html">VPS Hosting</a></li>
                                    </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Domains</a>
                                <ul class="sub-menu">
                                    <li><a href="domain-checker.html">Domain Checker</a></li>
                                    <li><a href="domain-transfer.html">Domain Transfer</a></li>
                                </ul>
                            </li>
                            <li><a href="data-center.html">Data Centers</a></li>
                            <li class="current"><a href="dashboard.html">My Dashboard</a></li>
                            <li><a href="index.html">Logout</a></li> </ul>
                    </nav>
                </div>
                <div class="col-auto d-flex d-lg-none">
                     <button class="mobile-menu-toggle"><span></span><span></span><span></span></button>
                </div>
                </div>
        </div>
    </header>
    <aside class="mobile-menu-wrapper">
        <nav class="mobile-menu">
             <ul>
                <li><a href="index.html">Home</a></li>
                <li class="has-children"><a href="#">Hosting</a>
                    <ul class="sub-menu">
                        <li><a href="hosting-shared.html">Shared Hosting</a></li>
                        <li><a href="hosting-vps.html">VPS Hosting</a></li>
                        </ul>
                </li>
                <li class="has-children"><a href="#">Domains</a>
                    <ul class="sub-menu">
                        <li><a href="domain-checker.html">Domain Checker</a></li>
                        <li><a href="domain-transfer.html">Domain Transfer</a></li>
                    </ul>
                </li>
                <li><a href="data-center.html">Data Centers</a></li>
                <li class="current"><a href="dashboard.html">My Dashboard</a></li>
                <li><a href="index.html">Logout</a></li> </ul>
        </nav>
    </aside>
    <div class="page-banner-section section" style="background-image: url(assets/img/bg/page-banner-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-banner text-center">
                        <h1>My Dashboard</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-40">Welcome back, User!</h3> {/* Dynamically set user name here */}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-server icon-4x mb-3 text-primary"></i>
                        <h4>Manage Services</h4>
                        <p>View and manage your active hosting plans and domains.</p>
                        <a href="#" class="ht-btn">Go to Services</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-wallet icon-4x mb-3 text-primary"></i>
                        <h4>Billing & Invoices</h4>
                        <p>Check your payment history and manage billing details.</p>
                        <a href="#" class="ht-btn">View Billing</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-user icon-4x mb-3 text-primary"></i>
                        <h4>My Profile</h4>
                        <p>Update your contact information and account settings.</p>
                        <a href="#" class="ht-btn">Edit Profile</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-help1 icon-4x mb-3 text-primary"></i>
                        <h4>Support Tickets</h4>
                        <p>Create new support tickets or view existing ones.</p>
                        <a href="#" class="ht-btn">Open Ticket</a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-settings icon-4x mb-3 text-primary"></i>
                        <h4>Account Settings</h4>
                        <p>Manage your security settings, preferences, and more.</p>
                        <a href="#" class="ht-btn">Go to Settings</a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="dashboard-item text-center">
                        <i class="pe-7s-bell icon-4x mb-3 text-primary"></i>
                        <h4>Notifications</h4>
                        <p>Check your latest account notifications and alerts.</p>
                        <a href="#" class="ht-btn">View Notifications</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-section section">
        <div class="footer-top-section section pt-100 pb-60 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo-footer.png" alt="Footer Logo"></a>
                            </div>
                            <p>Your reliable hosting partner.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget"><h4 class="widget-title">Services</h4><ul><li><a href="#">Shared Hosting</a></li><li><a href="#">VPS Hosting</a></li></ul></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget"><h4 class="widget-title">Support</h4><ul><li>