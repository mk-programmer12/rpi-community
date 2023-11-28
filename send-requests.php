<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
auth();
$title = "Find Friends";
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
                    <a href="send-requests.php" class="nav-link active">Sent Requests</a>
                </li>
                <li class="nav-item">
                    <a href="find-friends.php" class="nav-link">Find Friends</a>
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
                    // show canceled message
                    if (!empty($_REQUEST['status'])) :
                        if ($_REQUEST['status'] == 'canceled') : ?>
                            <div class="alert alert-warning">Requested Canceled!</div>
                    <?php endif;
                    endif;
                    ?>
                    
                    <?php
                    // find sent request
                    $findRequest = mysqli_query($connect, "SELECT * FROM `friends` WHERE `sender_id`='$loggerId' && `status`='pending' ORDER BY id DESC");
                    if (mysqli_num_rows($findRequest) >= 1) {
                        while ($row = mysqli_fetch_array($findRequest)) :
                            // get user info from userInfo function
                            $getUser = userInfo($connect, $row['receiver_id']);
                    ?>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar avatar-sm text-center"><img src="uploads/profile_picture/<?php echo $getUser['avatar']; ?>" alt="Profile Image"></div>
                                </td>
                                <td class="text-center"><?php echo $getUser['name']; ?></td>
                                <td><?php echo $getUser['roll']; ?></td>
                                <td><?php echo $getUser['s_department']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="include/cancel_request.php?id=<?php echo $row['id']; ?>">Cancel request</a>
                                </td>
                            </tr>
                        <?php endwhile;
                    } else { ?>
                        <tr>
                            <td colspan="5">No request found!</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- friend end -->

<?php
require_once('footer.php');
?>