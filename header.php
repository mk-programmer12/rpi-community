<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - RPI Community</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/venobox.min.css" media="all">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/chat.css" media="all"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <!-- jquery link -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container px-2">
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/rpi-logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <?php
                    if (isset($_SESSION['userPassword'])) { ?>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>
                        <li class="nav-item"><a class="nav-link" href="friends.php">Friends</a></li>
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="uploads/profile_picture/<?php echo $loggerAvatar; ?>" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $loggerName; ?></span>
                            </a>
                            <!-- End Profile Image Icon -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6><?php echo $loggerName; ?></h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="profile.php">
                                        <i class="bi bi-person"></i><span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-gear"></i><span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                        <i class="bi bi-box-arrow-right"></i><span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Profile Dropdown Items -->
                        </li>
                    <?php }
                     ?>
                    <?php
                    if (!isset($_SESSION['userPassword'])) { ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                    <?php }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->