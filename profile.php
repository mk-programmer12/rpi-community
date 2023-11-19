<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RPI Community</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/venobox.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <!-- jquery link -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require_once('include/logger_info.php');
    ?>

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container px-2">
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/rpi-logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="chat.php">Chat</a></li>
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $loggerName; ?></span>
                        </a>
                        <!-- End Profile Iamge Icon -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo $loggerName; ?></h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="profile.php">
                                    <i class="icofont-user"></i><span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <i class="icofont-settings"></i><span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <i class="icofont-question-circle"></i><span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="logout.php">
                                    <i class="icofont-logout"></i><span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Profile Dropdown Items -->
                    </li>
                    <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
						data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="index.html">All Products</a></li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li><a class="dropdown-item" href="single-product.html">Single Product</a></li>
					</ul>
				</li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

    <!-- profile area start -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Profile tabs area -->
                        <ul class="nav nav-tabs nav-tabs-bordered mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" role="tab" tabindex="-1">Edit Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings" aria-selected="false" role="tab" tabindex="-1">Settings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" role="tab" tabindex="-1">Change Password</button>
                            </li>
                        </ul>

                        <!-- profile tabs description area -->
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                                <img class="rounded-circle mb-2" style="max-width:140px;max-height:140px;background:#f3f3f3" src="assets/img/profile-img.png" alt="Monir">
                                <p class="small fst-italic"><?php echo $loggerAbout; ?></p>

                                <h5 class="card-title mb-3">Profile Details</h5>
                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label ">Name</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerName; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Designation</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerDesignation; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerEmail; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerPhone; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Gender</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerGender; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Present Address</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerPresentAddress; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Permanent Address</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $loggerPermanentAddress; ?></div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Facebook Link</div>
                                    <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $loggerFbLink; ?>"><?php echo $loggerFbLink; ?></a></div>
                                </div>
                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Twitter Link</div>
                                    <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $loggerTwitterLink; ?>"><?php echo $loggerTwitterLink; ?></a></div>
                                </div>
                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Instagram Link</div>
                                    <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $loggerInstagramLink; ?>"><?php echo $loggerInstagramLink; ?></a></div>
                                </div>
                                <div class="row pb-20">
                                    <div class="col-lg-3 col-md-4 label">Linkedin Link</div>
                                    <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $loggerLinkedinLink; ?>"><?php echo $loggerLinkedinLink; ?></a></div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                <!-- Profile Edit Form -->
                                <form action="includes/update_profile_picture.php" method="post" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-lg-3 col-form-label">Profile Image</div>
                                        <div class="col-md-8 col-lg-9">
                                            <img style="max-width:300px;max-height:400px;background:#f3f3f3" src="assets/img/profile-img.png" alt="Monir Khan's Profile Picture">
                                            <div class="pt-2">
                                                <label for="profilePicture" class="btn btn-primary btn-sm text-white" title="Upload new profile image"><i class="icofont-upload"></i></label>
                                                <input class="d-none" type="file" name="profilePicture" id="profilePicture">
                                                <a onclick="return confirm('This action will delete your profile picture.');" href="#" class="btn btn-danger btn-sm" title="Remove my profile picture"><i class="icofont-trash"></i></a>
                                                <button type="submit" class="btn btn-primary btn-sm">Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form action="includes/update_profile.php" method="post">
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="fullName" type="text" class="form-control" id="fullName" value="Monir Khan">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="designation" class="col-md-4 col-lg-3 col-form-label">Designation</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="designation" type="text" class="form-control" id="designation" value="Web Developer" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="about" class="form-control" id="about" style="height: 100px">I'm Monir Khan. I am a full stack web developer</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" class="form-control" id="email" value="monirkhan@gmail.com" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone" value="01772883484" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="gender" id="gender" class="form-select">
                                                <option value="">Select Gender</option>
                                                <option selected="" value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="present_adderss" class="col-md-4 col-lg-3 col-form-label">Present Adderss</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="present_adderss" type="text" class="form-control" id="present_adderss" value="Mohammadpur, Rangpur">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="permanent_address" class="col-md-4 col-lg-3 col-form-label">Permanent Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="permanent_address" type="text" class="form-control" id="permanent_address" value="Mohammadpur, Rangpur">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                                <!-- End Profile Edit Form -->
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">
                                <!-- Settings Form -->
                                <form action="includes/deactivate_deletion.php" method="post">
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-lg-4 col-form-label">Account Deactive or Delete</div>
                                        <div class="col-md-8 col-lg-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Deactivate" name="setting" id="deactivation" required="">
                                                <label class="form-check-label" for="deactivation">Deactive Account</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Deleted" name="setting" id="delete" required="">
                                                <label class="form-check-label" for="delete">Delete Account</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                                <!-- End settings Form -->
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                <!-- Change Password Form -->
                                <form action="change_password.php" method="post">

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="currentPassword" type="password" class="form-control" id="currentPassword" autocomplete="off" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newPassword" type="password" minlength="6" class="form-control" id="newPassword" autocomplete="off" required="">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-type New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewPassword" type="password" class="form-control" id="renewPassword" minlength="6" autocomplete="off" required="">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>
                                <!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- profile area start -->

    <!-- include js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>