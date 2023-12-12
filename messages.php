<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
auth();
$title = "Messages";
$friendId = '';
if (!empty($_REQUEST['id'])) {
    $friendId = $_REQUEST['id'];
    checkValidUser($friendId);
    $getUser = userInfo($connect, $friendId);
    $title = $getUser['name'] . "'s Message";

    if (checkFriendFunction($loggerId, $friendId) !== 1) {
        $checkConversion = mysqli_query($connect, "SELECT * FROM `conversion` WHERE (`sender_id`='$loggerId' && `receiver_id`='$friendId') || (`sender_id`='$friendId' && `receiver_id`='$loggerId')");
        if(mysqli_num_rows($checkConversion) !== 1) {
            header("location: messages.php");
        }
    }

}

require_once('header.php');

// get friend info
function friendInfo()
{
    if (!empty($_REQUEST['id'])) {
        global $connect;
        global $friendId;
        $fiQuery = mysqli_query($connect, "SELECT * FROM `student_info` WHERE `id`='$friendId'");
        if (mysqli_num_rows($fiQuery) === 1) {
            $fiRow = mysqli_fetch_array($fiQuery);
            return $fiRow;
        }
    }
}

?>
<!-- chat header start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 border-bottom border-end">
            <div class="d-flex align-items-center h-100 py-3">
                <ul class="d-flex justify-content-between align-items-center list-unstyled w-100 mx-4 mb-0">
                    <!-- Title -->
                    <li>
                        <h3 class="mb-0">Chats</h3>
                    </li>
                    <!-- Title -->
                </ul>
            </div>
        </div>
        <!-- Chat Header -->
        <div class="chat-header d-flex align-items-center border-bottom px-2 col-md-8">
            <div class="container-fluid py-3">
                <div class="row align-items-center g-0">
                    <div class="col-8">
                        <div class="d-flex align-items-center">
                            <!-- Close Chat Button -->
                            <div class="d-block d-xl-none me-3">
                                <button class="chat-hide btn btn-icon btn-base btn-sm" type="button">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>
                            </div>
                            <!-- Close Chat Button -->

                            <?php if (!empty($friendId)) { ?>
                                <!-- Avatar -->
                                <div class="avatar avatar-online me-3 rounded-circle overflow-hidden">
                                    <img src="uploads/profile_picture/<?php echo $getUser['avatar']; ?>" alt="<?php echo $getUser['name']; ?>">
                                </div>
                                <!-- Avatar -->
                                <!-- Text -->
                                <div class="flex-grow-1 overflow-hidden">

                                    <h6 class="fw-medium fs-6 mb-0 fs-6 fw-medium"><?php echo $getUser['name']; ?></h6>
                                    <p class="fw-medium fs-6 text-success fs-6 mb-0"><?php echo $getUser['online_status']; ?></p>
                                </div>
                                <!-- Text -->
                            <?php } else { ?>
                                <h6>Please Select a friend to start conversation.</h6>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <ul class="list-inline text-end mb-0">
                            <!-- Dropdown -->
                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-base" type="button" title="Menu" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Archive <i class="fa-solid fa-box-archive"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Mute <i class="fa-solid fa-volume-xmark"></i></a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Block <i class="fa-brands fa-expeditedssl"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Dropdown -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat Header -->
    </div>
</div>
<!-- chat header end -->

<!-- Layout -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="sidebar border-end overflow-hidden col-md-4">
            <!-- Chats Tab -->
            <div class="h-100">
                <div class="d-flex flex-column h-100">
                    <!-- Search Input start -->
                    <div class="my-4 mx-2">
                        <div class="input-group">
                            <input id="id-4" type="text" class="form-control form-control-lg form-control-solid" placeholder="Search user" aria-label="Search user" aria-describedby="search-user-button">
                            <button class="btn btn-secondary btn-lg" type="button" id="search-user-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <!-- Search Input end -->
                    <!-- Tab Content -->
                    <div class="hide-scrollbar h-100">
                        <div class="tab-content my-4 mx-2 mt-1">
                            <!-- Direct Chats Tab -->
                            <div class="chat-left" id="direct-tab" role="tabpanel">
                                <ul class="list-unstyled js-contact-list mb-0">

                                    <?php
                                    // check conversion
                                    $getConversion = mysqli_query($connect, "SELECT * FROM `conversion` WHERE `sender_id`='$loggerId' || `receiver_id`='$loggerId' ORDER BY `last_update_time` DESC");

                                    if (mysqli_num_rows($getConversion) >= 1) {
                                        while ($gcRow = mysqli_fetch_array($getConversion)) :
                                            if ($loggerId === $gcRow['sender_id']) {
                                                $oppId = $gcRow['receiver_id'];
                                            } else {
                                                $oppId = $gcRow['sender_id'];
                                            }

                                            $friendInfo = userInfo($connect, $oppId);
                                    ?>
                                            <!-- Chat Link 1 -->
                                            <li class="card contact-item mb-3 <?php if ($friendId === $oppId) {
                                                                                    echo 'active';
                                                                                } ?>">
                                                <a href="index.html" class="contact-link"></a>
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-sm me-4">
                                                            <img src="uploads/profile_picture/<?php echo $friendInfo['avatar']; ?>" alt="<?php echo $friendInfo['name']; ?>">
                                                        </div>
                                                        <!-- Avatar -->
                                                        <!-- Content -->
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h5 class="fw-medium fs-6 mb-0 me-auto"><a class="fw-medium fs-6" href="messages.php?id=<?php echo $friendInfo['id']; ?>"><?php echo $friendInfo['name']; ?></a></h5>
                                                                <p class="small text-body-secondary text-nowrap ms-4 mb-0"><?php echo $gcRow['last_update_time']; ?></p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <?php
                                                                $getLastMessageQuery = mysqli_query($connect, "SELECT * FROM `messages` WHERE (`sender_id`='$loggerId' && `receiver_id`='$oppId') || (`sender_id`='$oppId' && `receiver_id`='$loggerId') ORDER BY `id` DESC LIMIT 1");
                                                                $lmRow = mysqli_fetch_array($getLastMessageQuery);
                                                                ?>
                                                                <div class="small me-auto"><?php echo $lmRow['message']; ?> </div>
                                                                <span class="badge rounded-pill bg-primary ms-2">0</span>
                                                            </div>
                                                        </div>
                                                        <!-- Content -->
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Chat Link 1 -->
                                    <?php endwhile;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- Direct Chats Tab -->
                        </div>
                    </div>
                    <!-- Tab Content -->
                </div>
            </div>
            <!-- Chats Tab -->
        </div>
        <!-- Sidebar -->
        <!-- Main Content -->
        <div class="col-md-8 pe-0 me-0">
            <div class="chat d-flex flex-row h-100">
                <!-- Chat -->
                <div class="chat-body h-100 w-100 d-flex flex-column">
                    <!-- Chat Content -->
                    <div class="chat-content scrollbar-custom">
                        <!-- Messages -->
                        <div class="message_wrapper h-100">
                            <div class="d-flex flex-column-reverse h-100 overflow-y-auto">
                                <?php
                                $getMessages = mysqli_query($connect, "SELECT * FROM `messages` WHERE (`sender_id`='$loggerId' && `receiver_id`='$friendId') || (`sender_id`='$friendId' && `receiver_id`='$loggerId') ORDER BY `id` DESC");
                                if (mysqli_num_rows($getMessages) >= 1) {
                                    while ($messageRow = mysqli_fetch_array($getMessages)) : 
                                        $bothInfo = userInfo($connect, $messageRow['sender_id']);
                                    ?>
                                        <!-- Message 2 -->
                                        <div class="message mt-4 <?php if($messageRow['sender_id'] === $loggerId) {echo "self"; } ?>">
                                            <div class="message-wrap">
                                                <!-- <div class="message-item">
                                                    <div class="message-content">
                                                        <span>Hi Ariel, it looks great except for a few things.</span>
                                                    </div>
                                                </div> -->
                                                <div class="message-item">
                                                    <div class="message-content">
                                                        <span><?php echo $messageRow['message']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-info">
                                                <div class="avatar avatar-sm">
                                                    <img src="uploads/profile_picture/<?php echo $bothInfo['avatar']; ?>" alt="<?php echo $bothInfo['name']; ?>">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fs-6 fw-medium"><?php echo $bothInfo['name']; ?></h6>
                                                    <small class="text-body-secondary"><?php echo $messageRow['send_date']; ?> <i class="fa-solid fa-check-double"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Message 2 -->

                                <?php endwhile;
                                }
                                ?>

                                <!-- Separator -->
                                <!-- <div class="separator">
                                    <span class="separator-title fs-7 ls-1">Today</span>
                                </div> -->
                                <!-- Separator -->
                                <!-- Message 3 -->
                                <!-- <div class="message">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Looks like I should do some more design work, thanks for the help.</span>
                                            </div>
                                        </div>
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Perhaps enough work for today, tell us how you spend time with your friends.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-08.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Ariel Martinez</h6>
                                            <small class="text-body-secondary">9:37 PM <i class="fa-solid fa-check-double"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Message 3 -->
                            </div>
                        </div>
                        <!-- Messages -->
                    </div>
                    <!-- Chat Content -->
                    <!-- Chat Footer -->
                    <div class="chat-footer d-flex align-items-center border-top px-2">
                        <div class="container-fluid">
                            <form action="include/send_message.php" method="post">
                                <div class="row align-items-center g-4">
                                    <!-- Input -->
                                    <div class="col">
                                        <div class="input-group">
                                            <?php
                                            if (!empty($friendId)) { ?>
                                                <input type="hidden" name="friendId" value="<?php echo $friendId; ?>" required>
                                            <?php }
                                            ?>
                                            <button class="btn btn-white btn-lg border" type="button"><i class="fa-solid fa-paperclip"></i></button>
                                            <input type="text" class="form-control form-control-lg" placeholder="Type message" name="message" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <!-- Button -->
                                    <div class="col-auto">
                                        <ul class="list-inline d-flex align-items-center mb-0">
                                            <li class="list-inline-item">
                                                <button type="submit" class="btn btn-icon btn-primary btn-lg rounded-circle <?php if (empty($friendId)) {
                                                                                                                                echo "disabled";
                                                                                                                            } ?>">
                                                    <i class="fa-regular fa-paper-plane"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Chat Footer -->
                </div>
                <!-- Chat -->
            </div>
        </div>
        <!-- Main Content -->
    </div>
</div>
<!-- Layout -->

<!-- Scripts -->
<?php
require_once('footer.php');
?>