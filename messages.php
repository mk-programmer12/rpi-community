<?php
session_start();
require_once('include/connect.php');
require_once('include/logger_info.php');
auth();
$title = "Messages";
$friendId = '';
if (!empty($_REQUEST['id'])) {
    $friendId = $_REQUEST['id'];
    if (checkFriendFunction($loggerId, $friendId) === 1) {
        $getUser = userInfo($connect, $friendId);
        $title = $getUser['name'] . "'s Message";
    } else {
        header("location: messages.php");
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
                                <img src="assets/img/avatars/avatar-08.png" alt="Avatar">
                            </div>
                            <!-- Avatar -->
                            <!-- Text -->
                            <div class="flex-grow-1 overflow-hidden">
                                 
                                <h6 class="fw-medium fs-6 mb-0 fs-6 fw-medium"><?php echo $getUser['name']; ?></h6>
                                <p class="fw-medium fs-6 text-success fs-6 mb-0"><?php echo $getUser['online_status']; ?></p>
                            </div>
                            <!-- Text -->
                            <?php }else { ?>
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
                                    <!-- Chat Link 1 -->
                                    <li class="card contact-item active mb-3">
                                        <a href="index.html" class="contact-link"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="assets/img/avatars/avatar-06.png" alt="Avatar">
                                                </div>
                                                <!-- Avatar -->
                                                <!-- Content -->
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h5 class="fw-medium fs-6 mb-0 me-auto">Ariel Martinez</h5>
                                                        <p class="small text-body-secondary text-nowrap ms-4 mb-0">8:12 AM</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="small me-auto">Yes, I want to participate in the project. </div>
                                                        <span class="badge rounded-pill bg-primary ms-2">2</span>
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Chat Link 1 -->
                                    <!-- Chat Link 2 -->
                                    <li class="card contact-item mb-3">
                                        <a href="#" class="contact-link"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm me-4">
                                                    <img src="assets/img/avatars/avatar-07.png" alt="Avatar">
                                                </div>
                                                <!-- Avatar -->
                                                <!-- Content -->
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h5 class="fw-medium fs-6 mb-0 me-auto">Chris Solomon</h5>
                                                        <p class="small text-body-secondary text-nowrap ms-4 mb-0">9:36 AM</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="small me-auto">Okay, I'll try to help.</div>
                                                        <span class="badge rounded-pill bg-primary ms-2">2</span>
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Chat Link 2 -->
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
                        <div class="message_wrapper">
                            <div class="d-flex flex-column-reverse">
                                <!-- Message 1 -->
                                <div class="message">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Hi John, please take a look at the result of my work, this is a project that I am currently working on.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-08.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Ariel Martinez</h6>
                                            <small class="text-body-secondary">9:15 PM <i class="fa-solid fa-check-double"></i></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 1 -->
                                <!-- Message 2 -->
                                <div class="message self">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Hi Ariel, it looks great except for a few things.</span>
                                            </div>
                                        </div>
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Now I will try to explain, the primari color is strongly out of the general composition, try to use flatter colors.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-01.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Davis</h6>
                                            <small class="text-body-secondary">9:26 PM <i class="fa-solid fa-check-double"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 2 -->
                                <!-- Separator -->
                                <div class="separator">
                                    <span class="separator-title fs-7 ls-1">Today</span>
                                </div>
                                <!-- Separator -->
                                <!-- Message 3 -->
                                <div class="message">
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
                                </div>
                                <!-- Message 3 -->
                                <!-- Message 4 -->
                                <div class="message self">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>We combine recreation and sports, there are many ways to relax, you can join us at any time.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-01.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Davis</h6>
                                            <small class="text-body-secondary">9:42 PM <i class="fa-solid fa-check-double"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 4 -->
                                <!-- Message 5 -->
                                <div class="message">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Great, I love outdoor activities, invite me for a company next time.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-08.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Ariel Martinez</h6>
                                            <small class="text-body-secondary">9:46 PM <i class="fa-solid fa-check-double"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 5 -->
                                <!-- Message 6 -->
                                <div class="message self">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <span>Of course, Ariel, I will. Here is a photo report from the last meeting.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-01.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Davis</h6>
                                            <small class="text-body-secondary">9:53 PM <i class="fa-solid fa-check-double"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 6 -->
                                <!-- Message 7 -->
                                <div class="message">
                                    <div class="message-wrap">
                                        <div class="message-item">
                                            <div class="message-content">
                                                <div>Writing <div class="type-indicator">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <div class="avatar avatar-sm">
                                            <img src="assets/img/avatars/avatar-08.png" alt="Avatar">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Ariel Martinez</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message 7 -->
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