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
                    <a href="friend-requests.php" class="nav-link">Requests</a>
                </li>
                <li class="nav-item">
                    <a href="send-requests.php" class="nav-link active">Send Requests</a>
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
                    <tr>
                        <td class="text-center">
                            <div class="avatar avatar-sm text-center"><img src="assets/img/profile-img.jpg" alt="Profile Image"></div>
                        </td>
                        <td class="text-center">Monir Khan</td>
                        <td>406034</td>
                        <td>Computer</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Accept</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="avatar avatar-sm text-center"><img src="assets/img/profile-img.jpg" alt="Profile Image"></div>
                        </td>
                        <td class="text-center">Monir Khan</td>
                        <td>406034</td>
                        <td>Computer</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Accept</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="avatar avatar-sm text-center"><img src="assets/img/profile-img.jpg" alt="Profile Image"></div>
                        </td>
                        <td class="text-center">Monir Khan</td>
                        <td>406034</td>
                        <td>Computer</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Accept</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <div class="avatar avatar-sm text-center"><img src="assets/img/profile-img.jpg" alt="Profile Image"></div>
                        </td>
                        <td class="text-center">Monir Khan</td>
                        <td>406034</td>
                        <td>Computer</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Accept</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- friend end -->

<?php
require_once('footer.php');
?>