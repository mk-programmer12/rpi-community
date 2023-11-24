<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
$title = "Friend Requests";
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
                    <a href="friend-requests.php" class="nav-link active">Friend Requests</a>
                </li>
                <li class="nav-item">
                    <a href="send-requests.php" class="nav-link">Sent Requests</a>
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
                    $checkFriendRequests = mysqli_query($connect, "SELECT * FROM `friends` WHERE (`receiver_id`='$loggerId' && `status`='pending')");
                    if (mysqli_num_rows($checkFriendRequests) >= 1) {
                        while ($row = mysqli_fetch_array($checkFriendRequests)) :
                            $getUser = userInfo($connect, $row['sender_id']);
                    ?>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar avatar-sm text-center"><img src="uploads/profile_picture/<?php echo $getUser['avatar']; ?>" alt="Profile Image"></div>
                                </td>
                                <td class="text-center"><?php echo $getUser['name']; ?></td>
                                <td><?php echo $getUser['roll']; ?></td>
                                <td><?php echo $getUser['s_department']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="include/accept_request.php?id=<?php echo $row['id']; ?>">Accept</a>
                                    <a class="btn btn-danger btn-sm" href="include/delete_request.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                        endwhile;
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