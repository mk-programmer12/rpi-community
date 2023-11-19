<?php
session_start();
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">Monir Khan</span>
                        </a>
                        <!-- End Profile Iamge Icon -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>Monir Khan</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="profile.php">
                                    <i class="bi bi-person"></i><span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-gear"></i><span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-question-circle"></i><span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                    <i class="bi bi-box-arrow-right"></i><span>Log Out</span>
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

    <!-- slider area start -->
    <div class="slider_area">
        <div class="slider_wrapper no-gap">
            <div class="single_slider single_image"><img decoding="async" src="assets/img/slider.jpg" alt="Slider" loading="lazy"></div>
            <div class="single_slider single_image"><img decoding="async" src="assets/img/slider.jpg" alt="Slider" loading="lazy"></div>
            <div class="single_slider single_image"><img decoding="async" src="assets/img/slider.jpg" alt="Slider" loading="lazy"></div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- about area start -->
    <div class="about_area pt-110">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img single_image">
                        <img src="assets/img/about.jpg" decoding="async" alt="About Image" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <div class="section_title">
                        <div class="section_title_inner full">
                            <h2 class="mb-3">ABOUT US</h2>
                            <h3>We are students of </h3>
                            <h3>Rangpur Polytechnic Institute</h3>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique fugit quos, dicta assumenda harum obcaecati illo, magni neque cumque ex eius adipisci impedit corporis? Ea eius deserunt, quia distinctio delectus labore tempora architecto commodi, sequi iusto eveniet voluptates inventore, quo ut eligendi consectetur quae? Quis maxime commodi hic amet tempora.</p>
                        </div>
                    </div>
                    <div class="about_btn pt-4">
                        <a href="#" class="mkp_btn mt-3">About More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- teacher area start -->
    <div class="teacher_area pt-110">
        <!-- title -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title pb-30">
                        <div class="section_title_inner text-center">
                            <h2>OUR TEACHER</h2>
                            <h3>Meet Our Beautiful Teacher</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <!-- teacher -->
        <div class="container">
            <div class="row teacher_wrapper slick_btn_center">
                <!-- single teacher -->
                <div class="col-md-6 col-lg-4">
                    <div class="single_teacher">
                        <div class="teacher_pic single_image">
                            <img class="htn" decoding="async" loading="lazy" src="assets/img/teacher.png" alt="Teacher Image">
                        </div>
                        <div class="teacher_socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="teacher_content">
                            <h2>TEACHER NAME</h2>
                            <div class="bars">
                                <div class="circle"></div>
                            </div>
                            <span>Chief Instructor</span>
                        </div>
                    </div>
                </div>
                <!-- single teacher -->
                <div class="col-md-6 col-lg-4">
                    <div class="single_teacher">
                        <div class="teacher_pic single_image">
                            <img class="htn" decoding="async" loading="lazy" src="assets/img/teacher.png" alt="Teacher Image">
                        </div>
                        <div class="teacher_socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="teacher_content">
                            <h2>TEACHER NAME</h2>
                            <div class="bars">
                                <div class="circle"></div>
                            </div>
                            <span>Chief Instructor</span>
                        </div>
                    </div>
                </div>
                <!-- single teacher -->
                <div class="col-md-6 col-lg-4">
                    <div class="single_teacher">
                        <div class="teacher_pic single_image">
                            <img class="htn" decoding="async" loading="lazy" src="assets/img/teacher.png" alt="Teacher Image">
                        </div>
                        <div class="teacher_socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="teacher_content">
                            <h2>TEACHER NAME</h2>
                            <div class="bars">
                                <div class="circle"></div>
                            </div>
                            <span>Chief Instructor</span>
                        </div>
                    </div>
                </div>
                <!-- single teacher -->
                <div class="col-md-6 col-lg-4">
                    <div class="single_teacher">
                        <div class="teacher_pic single_image">
                            <img class="htn" decoding="async" loading="lazy" src="assets/img/teacher.png" alt="Teacher Image">
                        </div>
                        <div class="teacher_socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="teacher_content">
                            <h2>TEACHER NAME</h2>
                            <div class="bars">
                                <div class="circle"></div>
                            </div>
                            <span>Chief Instructor</span>
                        </div>
                    </div>
                </div>
                <!-- single teacher -->
            </div>
        </div>
        <!-- teacher -->
    </div>
    <!-- teacher area end -->

    <!-- gallery area start -->
    <div class="gallery_area py-90">
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-md-12">
                    <div class="section_title pb-30">
                        <div class="section_title_inner text-center">
                            <h2>GALLERY</h2>
                            <h3>Our Best Gallery</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit veritatis nesciunt tempora et tempore dicta nulla ipsa. Ratione, voluptate! Deserunt quia similique temporibus dolorem doloribus!</p>
                        </div>
                    </div>
                </div>
                <!-- title -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery_nav gl_filter_menu">
                                <ul id="filter" class="filter_menu ">
                                    <li class="current_menu_item" data-filter="*">Show All </li>
                                    <li data-filter=".category1" class="">Category 1</li>
                                    <li data-filter=".category2" class="">Category 2</li>
                                    <li data-filter=".category3" class="">Category 3</li>
                                    <li data-filter=".category4" class="">Category 4</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row gallery_active">
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category1 category3">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 1</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category2 category4">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 2</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category2 category3">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 3</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category1 category4">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 4</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category1 category2">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 5</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single gallery -->
                        <div class="col-md-6 col-lg-4 grid-item category3 category4">
                            <div class="single_gallery">
                                <div class="gallery_inner">
                                    <div class="prot_thumb single_image">
                                        <img decoding="async" loading="lazy" src="assets/img/gallery.jpg" alt="Portfolio Image">
                                        <div class="prot_content">
                                            <div class="prot_content_inner">
                                                <div class="port_icon">
                                                    <a class="gallery-icon venobox vbox-item" data-gall="mygallery" href="assets/img/gallery.jpg"><i class="icofont-image"></i></a>
                                                </div>
                                                <h3><a href="#">Gallery Title 6</a></h3>
                                                <p>
                                                    <span class="category-item-p">Category</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area end -->

    <!-- event area start -->
    <div class="event_area pb-100">
        <!-- title start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <div class="section_title_inner text-center pb-30">
                            <h2>EVENTS</h2>
                            <h3>Yearly Events And <span>Program</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- title end -->
        <div class="container event_active">
            <!-- single event -->
            <div class="single_event">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="single_image">
                            <a class="blog_img-link">
                                <img src="assets/img/event.jpg" alt="Event">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="event_cont_box">
                            <div class="event_meta d-flex gap-3 mb-2">
                                <span><i class="far fa-calendar-alt"></i>21 Nov 23</span>
                                <span><i class="fas fa-user-alt"></i>RPIC</span>
                            </div>
                            <h2><a href="#" class="text-white">Event Title</a></h2>
                            <p class="text-white mt-3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aperiam esse natus ipsum aspernatur blanditiis optio? Harum aut numquam reprehenderit amet placeat similique quas tempore recusandae repellat iure fugiat, corporis at accusamus optio provident enim nostrum, voluptatum totam aliquam, ut rem quos! Eum obcaecati beatae....</p>
                            <div class="event_btn">
                                <a class="btn btn-lg">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single event -->
            <div class="single_event">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="single_image">
                            <a class="blog_img-link">
                                <img src="assets/img/event.jpg" alt="Event">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="event_cont_box">
                            <div class="event_meta d-flex gap-3 mb-2">
                                <span><i class="far fa-calendar-alt"></i>21 Nov 23</span>
                                <span><i class="fas fa-user-alt"></i>RPIC</span>
                            </div>
                            <h2><a href="#" class="text-white">Event Title</a></h2>
                            <p class="text-white mt-3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aperiam esse natus ipsum aspernatur blanditiis optio? Harum aut numquam reprehenderit amet placeat similique quas tempore recusandae repellat iure fugiat, corporis at accusamus optio provident enim nostrum, voluptatum totam aliquam, ut rem quos! Eum obcaecati beatae....</p>
                            <div class="event_btn">
                                <a class="btn btn-lg">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single event -->
            <div class="single_event">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="single_image">
                            <a class="blog_img-link">
                                <img src="assets/img/event.jpg" alt="Event">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="event_cont_box">
                            <div class="event_meta d-flex gap-3 mb-2">
                                <span><i class="far fa-calendar-alt"></i>21 Nov 23</span>
                                <span><i class="fas fa-user-alt"></i>RPIC</span>
                            </div>
                            <h2><a href="#" class="text-white">Event Title</a></h2>
                            <p class="text-white mt-3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aperiam esse natus ipsum aspernatur blanditiis optio? Harum aut numquam reprehenderit amet placeat similique quas tempore recusandae repellat iure fugiat, corporis at accusamus optio provident enim nostrum, voluptatum totam aliquam, ut rem quos! Eum obcaecati beatae....</p>
                            <div class="event_btn">
                                <a class="btn btn-lg">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single event -->
        </div>
    </div>
    <!-- event area end -->

    <!-- blog area start -->
    <div class="blog_area py-90">
        <!-- title -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title pb-30">
                        <div class="section_title_inner text-center">
                            <h2>OUR BLOG POSTS</h2>
                            <h3>Latest News Update</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <!-- blogs -->
        <div class="container">
            <div class="row blog_active pb-30">
                <!-- single blog -->
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image-area">
                            <div class="blog-image">
                                <img decoding="async" loading="lazy" src="assets/img/blog.jpg" alt="Blog Image">
                            </div>
                        </div>
                        <div class="blog-desc-area">
                            <div class="blogger-name-time d-flex mb-2 align-items-center">
                                <a href="#" class="me-2"><i class="icofont-user-alt-3"></i><span>Author</span> </a>
                                <i class="icofont-ui-clock"></i><span>08 Jun 2023</span>
                            </div>
                            <h2><a href="#">Wood Work Adds Value to Your Property</a></h2>
                            <p>Our printable are a fun and easy way to learn about multiplication, sight ors, animal</p>
                            <div class="readmore-btn">
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="blog-bottom-btn">
                            <a href="#" class="btn"><i class="icofont-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image-area">
                            <div class="blog-image">
                                <img decoding="async" loading="lazy" src="assets/img/blog.jpg" alt="Blog Image">
                            </div>
                        </div>
                        <div class="blog-desc-area">
                            <div class="blogger-name-time d-flex mb-2 align-items-center">
                                <a href="#" class="me-2"><i class="icofont-user-alt-3"></i><span>Author</span> </a>
                                <i class="icofont-ui-clock"></i><span>08 Jun 2023</span>
                            </div>
                            <h2><a href="#">Wood Work Adds Value to Your Property</a></h2>
                            <p>Our printable are a fun and easy way to learn about multiplication, sight ors, animal</p>

                            <div class="readmore-btn">
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="blog-bottom-btn">
                            <a href="#" class="btn"><i class="icofont-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image-area">
                            <div class="blog-image">
                                <img decoding="async" loading="lazy" src="assets/img/blog.jpg" alt="Blog Image">
                            </div>
                        </div>
                        <div class="blog-desc-area">
                            <div class="blogger-name-time d-flex mb-2 align-items-center">
                                <a href="#" class="me-2"><i class="icofont-user-alt-3"></i><span>Author</span> </a>
                                <i class="icofont-ui-clock"></i><span>08 Jun 2023</span>
                            </div>
                            <h2><a href="#">Wood Work Adds Value to Your Property</a></h2>
                            <p>Our printable are a fun and easy way to learn about multiplication, sight ors, animal</p>

                            <div class="readmore-btn">
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="blog-bottom-btn">
                            <a href="#" class="btn"><i class="icofont-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-image-area">
                            <div class="blog-image">
                                <img decoding="async" loading="lazy" src="assets/img/blog.jpg" alt="Blog Image">
                            </div>
                        </div>
                        <div class="blog-desc-area">
                            <div class="blogger-name-time d-flex mb-2 align-items-center">
                                <a href="#" class="me-2"><i class="icofont-user-alt-3"></i><span>Author</span> </a>
                                <i class="icofont-ui-clock"></i><span>08 Jun 2023</span>
                            </div>
                            <h2><a href="#">Wood Work Adds Value to Your Property</a></h2>
                            <p>Our printable are a fun and easy way to learn about multiplication, sight ors, animal</p>

                            <div class="readmore-btn">
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="blog-bottom-btn">
                            <a href="#" class="btn"><i class="icofont-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
            </div>
        </div>
        <!-- blogs -->
    </div>
    <!-- blog area end -->

    <!-- google map area start -->
    <div class="gma">
        <div class="maps">
            <!-- <iframe src="" frameborder="0"></iframe> -->
        </div>
    </div>
    <!-- google map area end -->

    <!-- footer area start -->
    <footer class="footer_area">
        <!-- footer middle -->
        <div class="footer_middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="single_footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer middle -->
        <!-- footer copyright -->
        <div class="footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">Copyright © <a href="index.html">rpi-community</a> all rights reserved.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <!-- footer copyright -->
    </footer>
    <!-- footer area end -->




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