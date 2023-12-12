<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
auth();
$userId = $_REQUEST['id'];
$getUser = userInfo($connect, $userId);

$title = $getUser['name'] . "'s Profile";

if(empty($_REQUEST['id'])) {
    header("location: profile.php");
}
require_once('header.php');
?>

<!-- user profile area start -->
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
                            <img class="rounded-circle mb-2" style="max-width:140px;max-height:140px;background:#f3f3f3" src="uploads/profile_picture/<?php echo $getUser['avatar']; ?>" alt="<?php echo $loggerName; ?>">
                            <p class="small fst-italic"><?php echo $getUser['about']; ?></p>

                            <h5 class="card-title mb-3">Profile Details</h5>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Name</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['name']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Roll</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['roll']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Registration</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_registration']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Department</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_department']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Semester</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_semester']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Group</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_group']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Session</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_session']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Shift</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['s_shift']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Designation</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['designation']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['email']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['phone']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Gender</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['gender']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Present Address</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['present_address']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Permanent Address</div>
                                <div class="col-lg-9 col-md-8"><?php echo $getUser['permanent_address']; ?></div>
                            </div>

                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Facebook Link</div>
                                <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $getUser['fb_link']; ?>"><?php echo $getUser['fb_link']; ?></a></div>
                            </div>
                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Twitter Link</div>
                                <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $getUser['twitter_link']; ?>"><?php echo $getUser['twitter_link']; ?></a></div>
                            </div>
                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Instagram Link</div>
                                <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $getUser['instagram_link']; ?>"><?php echo $getUser['instagram_link']; ?></a></div>
                            </div>
                            <div class="row pb-20">
                                <div class="col-lg-3 col-md-4 label">Linkedin Link</div>
                                <div class="col-lg-9 col-md-8"><a target="_blank" href="<?php echo $getUser['linkedin_link']; ?>"><?php echo $getUser['linkedin_link']; ?></a></div>
                            </div>
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