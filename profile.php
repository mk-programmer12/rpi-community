<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
auth();
$title = $loggerName . "'s Profile";
require_once('header.php');
?>
<!-- profile area start -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow">
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" role="tab" tabindex="-1">Change Password</button>
                        </li>
                    </ul>

                    <!-- profile tabs description area -->
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                            <img class="rounded-circle mb-2" style="max-width:140px;max-height:140px;background:#f3f3f3" src="uploads/profile_picture/<?php echo $loggerAvatar; ?>" alt="<?php echo $loggerName; ?>">
                            <p class="small fst-italic"><?php echo $loggerAbout; ?></p>

                            <h5 class="card-title mb-3">Profile Details</h5>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Name</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerName; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Roll</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerRoll; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Registration</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerRegistration; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Department</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerDepartment; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Semester</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerSemester; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Group</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerGroup; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Session</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerSession; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Shift</div>
                                <div class="col-lg-9 col-md-8"><?php echo $loggerShift; ?></div>
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
                            <form action="include/update_profile_picture.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-4 col-lg-3 col-form-label">Profile Image</div>
                                    <div class="col-md-8 col-lg-9">
                                        <img style="max-width:300px;max-height:400px" src="uploads/profile_picture/<?php echo $loggerAvatar; ?>" alt="<?php echo $loggerName; ?>">
                                        <div class="pt-2">
                                            <label for="profilePicture" class="btn btn-primary btn-sm text-white" title="Upload new profile image"><i class="icofont-upload"></i></label>
                                            <input class="d-none" type="file" name="profilePicture" id="profilePicture" required>
                                            <a onclick="return confirm('This action will delete your profile picture.');" href="include/delete_picture.php" class="btn btn-danger btn-sm" title="Remove my profile picture"><i class="icofont-trash"></i></a>
                                            <button title="Recommended file size is 1:1" type="submit" class="btn btn-primary btn-sm">Change</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="include/update_profile.php" method="post">
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_name" type="text" class="form-control" id="fullName" value="<?php echo $loggerName; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="roll" class="col-md-4 col-lg-3 col-form-label">Roll</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div id="roll" class="border px-2 py-1"><?php echo $loggerRoll; ?></div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="designation" class="col-md-4 col-lg-3 col-form-label">Designation</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_designation" type="text" class="form-control" id="designation" value="<?php echo $loggerDesignation; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="registration" class="col-md-4 col-lg-3 col-form-label">Registration</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_registration" type="text" class="form-control" id="registration" value="<?php echo $loggerRegistration; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="u_about" class="form-control" id="about" style="height: 100px"><?php echo $loggerAbout; ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_email" type="text" class="form-control" id="email" value="<?php echo $loggerEmail; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_phone" type="text" class="form-control" id="Phone" value="<?php echo $loggerPhone; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="department" class="col-md-4 col-lg-3 col-form-label">Department</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_department" type="text" class="form-control" id="department" value="<?php echo $loggerDepartment; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="semester" class="col-md-4 col-lg-3 col-form-label">Semester</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_semester" type="text" class="form-control" id="semester" value="<?php echo $loggerSemester; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="shift" class="col-md-4 col-lg-3 col-form-label">Shift</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_shift" type="text" class="form-control" id="shift" value="<?php echo $loggerShift; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Group" class="col-md-4 col-lg-3 col-form-label">Group</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_group" type="text" class="form-control" id="Group" value="<?php echo $loggerGroup; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="session" class="col-md-4 col-lg-3 col-form-label">Session</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_session" type="text" class="form-control" id="session" value="<?php echo $loggerSession; ?>" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="u_gender" id="gender" class="form-select">
                                            <option value="">Select Gender</option>
                                            <option <?php if ($loggerGender == 'Male') {
                                                        echo 'selected';
                                                    } ?> value="Male">Male</option>
                                            <option <?php if ($loggerGender == 'Female') {
                                                        echo 'selected';
                                                    } ?> value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="present_address" class="col-md-4 col-lg-3 col-form-label">Present Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_present_address" type="text" class="form-control" id="present_address" value="<?php echo $loggerPresentAddress; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="permanent_address" class="col-md-4 col-lg-3 col-form-label">Permanent Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_permanent_address" type="text" class="form-control" id="permanent_address" value="<?php echo $loggerPermanentAddress; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_facebook" type="text" class="form-control" id="Facebook" value="<?php echo $loggerFbLink; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_twitter" type="text" class="form-control" id="Twitter" value="<?php echo $loggerTwitterLink; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_instagram" type="text" class="form-control" id="Instagram" value="<?php echo $loggerInstagramLink; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="u_linkedin" type="text" class="form-control" id="Linkedin" value="<?php echo $loggerLinkedinLink; ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="update_profile" value="update">

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                            <!-- Change Password Form -->
                            <form action="include/change_password.php" method="post">

                                <div class="row mb-3">
                                    <label for="oldPassword" class="col-md-4 col-lg-3 col-form-label">Old Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="oldPassword" type="password" class="form-control" id="oldPassword" autocomplete="off" required="">
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
                                    <button type="submit" class="btn btn-warning">Change Password</button>
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
<?php
require_once('footer.php');
?>