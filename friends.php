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
                    <a href="friends.php" class="nav-link active" aria-selected="true">Friends</a>
                </li>
                <li class="nav-item">
                    <a href="friend-requests.php" class="nav-link">Friend Requests</a>
                </li>
                <li class="nav-item">
                    <a href="send-requests.php" class="nav-link">Sent Requests</a>
                </li>
                <li class="nav-item">
                    <a href="find-friends.php" class="nav-link">Find Friends</a>
                </li>
            </ul>
            <!-- friends tab end -->
            <?php
            // show canceled message
            if (!empty($_REQUEST['status'])) {
                if ($_REQUEST['status'] == 'unfriend') { ?>
                    <div class="alert alert-info">Unfriend Successful!</div>
                <?php }
                if ($_REQUEST['status'] == 'error') { ?>
                    <div class="alert alert-danger">Something is wrong! Please try again.</div>
            <?php }
            }
            ?>

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
                    $friendsQuery = mysqli_query($connect, "SELECT * FROM `friends` WHERE (`sender_id`='$loggerId' || `receiver_id`='$loggerId') && `status`='accepted'");
                    if (mysqli_num_rows($friendsQuery) >= 1) {

                        while ($row = mysqli_fetch_array($friendsQuery)) :

                            if ($loggerId === $row['sender_id']) {
                                $getUser = userInfo($connect, $row['receiver_id']);
                            } else {
                                $getUser = userInfo($connect, $row['sender_id']);
                            }

                    ?>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar avatar-sm text-center"><img src="uploads/profile_picture/<?php echo $getUser['avatar'] ?>" alt="Profile Image"></div>
                                </td>
                                <td><?php echo $getUser['name']; ?></td>
                                <td><?php echo $getUser['roll']; ?></td>
                                <td><?php echo $getUser['s_department']; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="messages.php?id=<?php echo $getUser['id']; ?>">Message</a>
                                    <a class="btn btn-info btn-sm" href="friend_profile.php?id=<?php echo $getUser['id']; ?>">Details</a>
                                    <form class="d-inline-block" onsubmit="return confirm('Are you sure? You want to unfriend <?php echo $getUser['name']; ?>.')" action="include/unfriend.php" method="post">
                                        <input type="hidden" name="rid" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="uid" value="<?php echo $getUser['id']; ?>">
                                        <button class="btn btn-danger btn-sm" type="submit">Unfriend</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile;
                    } else { ?>
                        <tr>
                            <td colspan="5">You have no friends.</td>
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