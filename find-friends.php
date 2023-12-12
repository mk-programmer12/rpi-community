<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
$title = "Friends";
require_once('header.php');

?>

<!-- friends tab start -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-bordered mb-3" role="tablist">
                <li class="nav-item">
                    <a href="friends.php" class="nav-link" aria-selected="true">Friends</a>
                </li>
                <li class="nav-item">
                    <a href="friend-requests.php" class="nav-link">Friend Requests</a>
                </li>
                <li class="nav-item">
                    <a href="send-requests.php" class="nav-link">Sent Requests</a>
                </li>
                <li class="nav-item">
                    <a href="find-friends.php" class="nav-link active">Find Friends</a>
                </li>
            </ul>
            <!-- friends tab end -->

            <!-- friend start -->
            <table class="table table-bordered table-striped table-hover table-responsive-md">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $order = array('id', 'name', 'designation', 'present_address', 'permanent_address', 'is_online', 'fb_link', 'about', 's_shift', 's_session', 's_semester', 's_group', 'email', 'phone', 'avatar', 's_department');

                    shuffle($order);

                    $finalOrder = $order[0];

                    $query = mysqli_query($connect, "SELECT * FROM `student_info` WHERE `permanent_address`='$loggerPresentAddress' || `present_address`='$loggerPermanentAddress' || `gender`='$loggerGender' || `designation`='$loggerDesignation' || `about`='$loggerAbout' || `s_department`='$loggerDepartment' || `s_semester`='$loggerSemester' || `s_group`='$loggerGroup' || `s_session`='$loggerSession' || `s_shift`='$loggerShift' || `avatar`='$loggerAvatar' ORDER BY $finalOrder ASC LIMIT 30");
                    while ($row = mysqli_fetch_array($query)) {

                        // ignore if already friends query
                        $receiverId = $row['id'];
                        $checkAlreadyFriend = mysqli_query($connect, "SELECT * FROM `friends` WHERE (`sender_id`='$loggerId' && `receiver_id`='$receiverId') || (`sender_id`='$receiverId' && `receiver_id`='$loggerId')");
                        if ($loggerId === $receiverId) {
                            continue;
                        }
                        if (mysqli_num_rows($checkAlreadyFriend) === 0) { ?>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar avatar-sm text-center"><img src="uploads/profile_picture/<?php echo $row['avatar']; ?>" alt="Profile Image"></div>
                                </td>
                                <td class="text-center"><?php echo $row['name']; ?></td>
                                <td><?php echo $row['roll']; ?></td>
                                <td><?php echo $row['s_department']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="include/add_friend.php?id=<?php echo $row['id']; ?>">Add friend</a>
                                    <a class="btn btn-info btn-sm" href="user_profile.php?id=<?php echo $row['id']; ?>">Profile</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- friend end -->

<?php
require_once('footer.php');
?>