<!DOCTYPE html>
<html lang="en">
<?php
include 'constants/check-login.php';
?>
<head>
    <link rel="dns-prefetch" href="//schema.org">
    <link rel="dns-prefetch" href="//facebook.com">
    <link rel="dns-prefetch" href="//linkedin.com">
    <link rel="dns-prefetch" href="//twitter.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name=viewport>
    <meta name=csrf-token content="PyMgTQrWS63nf9ujd8K9pzwCzNctcjyxl2ibZQFQ">
    <style>
        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style>
        :root {
            --primary-color: #3C65F5;
            --primary-color-hover: #b4c0e0;
            --secondary-color: #05264E;
            --border-color-2: #E0E6F7;
            --primary-font: 'Plus Jakarta Sans', sans-serif;
            --primary-color-rgb: 60, 101, 245;
        }
    </style>
    <title>About us</title>
    
    <link href="indexx\storage\avatars\cp3.png" rel="shortcut icon">
    <script
        type=application/ld+json>{ "@context": "https://schema.org", "@type": "WebSite", "name": "careerplus - Laravel Job Board Script", "url": """}</script>
    <<link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">
    <style>
        .page_speed_1802647410 {
            display: none;
        }

        .page_speed_2071428746 {
            height: 16px
        }

        .page_speed_1042661193 {
            background-image: url(indexx/storage/general/background.jpg)
        }

        .page_speed_2126867478 {
            visibility: visible;
            animation-name: fadeInUp;
        }

        .page_speed_778515266 {
            background-image: url(indexx/storage/general/newsletter-background-image.png)
        }
        
    </style>
</head>

<body>
    <header class="header sticky-bar ">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="indexxx.php"><img
                                alt="JobBox - Laravel Job Board Script" src=indexx\storage\avatars\cp2.png></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div></a>
                            </li>
                            <li class=" has-children "><a href="joblists.php"> Find a Job <div class="arrow-down"></div>
                                </a>
                            </li>
                            <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down"></div>
                                </a></li>
                            <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down">
                                    </div></a></li>
                            <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down"></div>
                                </a></li>
                            <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down">
                                    </div></a></li>
                            <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                <ul class="sub-menu">
                                <li class=" "><a href="feedback.php"><i class="fi fi-rr-fingerprint"></i>
                                            Feedback </a></li>
                                    <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i> Cookie
                                            Policy </a></li>
                                    <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms &
                                            Conditions </a></li>
                                    <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <?php
                        if ($user_online == true) {
                            print '
						    <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="logout.php">Logout</a></li></ul>
							<a href="' . $myrole . '">Profile</a></li>';
                        } else {
                            print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="loginn.php">login</a></li></ul>
							<a data-toggle="modal" href="eregister.php">register</a></li>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#"><input type=text placeholder="Search..."><i class="fi-rr-search"></i></form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div>
                                    </a></li>
                                <li class=" has-children "><a href="joblists.php"> Find a Job <div class="arrow-down"></div>
                                    </a> </li>
                                <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down">
                                        </div></a></li>
                                <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down">
                                        </div></a></li>
                                <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down">
                                        </div></a></li>
                                <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down">
                                        </div></a></li>
                                <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                    <ul class="sub-menu">
                                    <li class=" "><a href="feedback.php"><i class="fi fi-rr-fingerprint"></i>
                                            Feedback </a></li>
                                        <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i>
                                                Cookie Policy </a></li>
                                        <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms &
                                                Conditions </a></li>
                                        <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <div class="block-signin">
                            <?php
                            if ($user_online == true) {
                                print '
						    <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="logout.php">Logout</a></li></ul>
							<a href="' . $myrole . '">Profile</a></li>';
                            } else {
                                print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="loginn.php">login</a></li></ul>
							<a data-toggle="modal" href="eregister.php">register</a></li>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <main class="main">
        <section class="section-box">
            <div class="breadcrumb-cover bg-img-about page_speed_1042661193">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="mb-10">About us</h2>
                            <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
                        </div>
                        <div class="col-lg-6 text-md-end">
                            <ul class="breadcrumbs mt-40 ">
                                <li><a href="indexxx.php"><span class="fi-rr-home icon-home"></span>
                                        Home </a></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ck-content">
            <div>
                <section class="section-box mt-50">
                    <div class="post-loop-grid">
                        <div class="container">
                            <div class="text-center">
                                <h6 class="f-18 color-text-mutted text-uppercase"></h6>
                                <h2
                                    class="section-title mb-10 wow animate__ animate__fadeInUp animated page_speed_2126867478">
                                    About Our Company </h2>
                                <p
                                    class="font-sm color-text-paragraph wow animate__ animate__fadeInUp w-lg-50 mx-auto animated page_speed_2126867478">
                                    Welcome to CareerPlus, your premier destination for connecting job seekers with employment opportunities and employers with qualified candidates. At CareerPlus, we are committed to helping individuals find their dream jobs and assisting companies in building their dream teams.</p>
                            </div>
                            <div class="row mt-70">
                                <div class="col-lg-6 col-md-12 col-sm-12"><img
                                        src=indexx\storage\general\aboutus.jpg alt="Company Image"></div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h3 class="mt-15">What we can do?</h3>
                                    <div class="mt-20">
                                        <p class="font-md color-text-paragraph mt-20">Connect Job Seekers and Employers: We bridge the gap between job seekers and employers, facilitating seamless connections and fostering mutually beneficial relationships.
                                        <p class="font-md color-text-paragraph mt-20">Comprehensive Job Listings: Explore a diverse range of job opportunities across various industries, tailored to match your skills, experience, and preferences.</p>
                                        <p class="font-md color-text-paragraph mt-20">User-Friendly Platform: Our intuitive platform makes job searching easy and efficient, with advanced search and filtering options to help you find the perfect job match.</p>
                                        <p class="font-md color-text-paragraph mt-20">Career Resources and Guidance: Access valuable resources, tips, and guidance to navigate the job market, improve your resume, excel in interviews, and advance your career.</p>
                                        <p class="font-md color-text-paragraph mt-20">Dedicated Customer Support: Our friendly customer support team is here to assist you with any inquiries, issues, or feedback, ensuring a positive and rewarding experience on our platform.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-70">
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                <h3 class="mt-15"><center>Our Mission & Our Vision</center></h3>
                                    <div class="mt-20"><center>Our mission at CareerPlus is to empower individuals to achieve their career aspirations by providing them with access to a comprehensive range of job opportunities, career resources, and professional development tools. We are dedicated to connecting job seekers with employment opportunities that align with their skills, interests, and aspirations, while also assisting employers in finding top talent to drive their organizations forward. Through our platform, we aim to democratize the job search process, making it accessible, efficient, and equitable for all users. We are committed to supporting our users at every stage of their career journey, from exploration and application to advancement and growth, thereby helping them realize their full potential and thrive in their chosen fields.</center></p>
                                    <div class="mt-20"><center>At CareerPlus, we envision becoming the premier online destination for job seekers and employers alike, revolutionizing the way people find and fill job positions. Our vision is to be recognized as a leading job portal known for its user-friendly interface, innovative features, and unparalleled commitment to customer satisfaction. We strive to create a dynamic and inclusive platform that fosters meaningful connections between candidates and employers, ultimately transforming the recruitment process into a seamless, transparent, and rewarding experience for all stakeholders.</center></p>
                                    
                                </div>
                                    
                                </div>
                            </div>
                            <div class="row mt-70">
                                <div class="col-lg-6 col-md-12 col-sm-6">
                                <h3 class="mt-15">Join With Us</h3>
                                    <div class="mt-20">
                                    <p class="font-md color-text-paragraph mt-20">Join the CareerPlus community and embark on a journey towards career success! Whether you're a job seeker or an employer, there are countless benefits to joining our platform:</p>
                                        <p class="font-md color-text-paragraph mt-20">Explore Diverse Opportunities: Access a vast array of job listings from various industries and sectors, all in one convenient location. Explore opportunities that match your skills, interests, and career goals.</p>
                                        <p class="font-md color-text-paragraph mt-20">Find Top Talent: Gain access to a pool of qualified candidates who are actively seeking employment opportunities. Post job listings, review applications, and connect with potential hires effortlessly.</p>
                                        <p class="font-md color-text-paragraph mt-20">Stay Connected: Join a vibrant community of job seekers and professionals. Connect with like-minded individuals, expand your network, and stay updated on the latest trends and opportunities in your field.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3"><img
                                        src=indexx\storage\general\teamwork.jpg alt="Company Image"></div>      
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <div>
            <section class="section-box mt-50 mb-50 news-or-blogs">
                            <div class="container">
                                <div class="text-center">
                                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and
                                        Blog</h2>
                                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">
                                        Get the latest news, updates and tips</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="mt-50">

                                    <div class="box-swiper style-nav-top">
                                        <div class="swiper-container swiper-group-3 swiper">
                                            <div class="swiper-wrapper pb-70 pt-5">
                                                <?php
                                                require 'admin\database\dbconfig.php';

                                                $query = "SELECT * FROM tbl_blog";
                                                $query_run = mysqli_query($connection, $query);
                                                $check_blog = mysqli_num_rows($query_run) > 0;

                                                if ($check_blog) {
                                                    while ($row = mysqli_fetch_array($query_run)) {

                                                        ?>
                                                        <div class="swiper-slide">
                                                            <div
                                                                class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                                                <div class="text-center card-grid-3-image">
                                                                    <a href="#">
                                                                        <figure><?php echo "<img src='admin/blog/.{$row['bimage']}'" ?></figure>
                                                                    </a>
                                                                </div>
                                                                <div class="card-block-info">
                                                                    <div class="tags mb-15"><a class="btn btn-tag"
                                                                            href="#">New</a>&nbsp; <a class="btn btn-tag"
                                                                            href="#">Event</a>&nbsp; </div>
                                                                    <h5><a href="blogdetail.php?id=<?php echo $row['id']; ?>">
                                                                            <?php echo $row['title']; ?>
                                                                        </a></h5>
                                                                    <p
                                                                        class="mt-10 color-text-paragraph font-sm post-description">
                                                                        <?php echo $row['content']; ?>
                                                                    </p>
                                                                    <div class="card-2-bottom mt-20">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-6">
                                                                                <div class="d-flex">
                                                                                    <div class="info-right-img"><h4><span
                                                                                            class="font-sm font-bold color-brand-1 op-70"><?php echo $row['name']; ?></span></h4><br></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 text-md-end col-6 pt-15"><span
                                                                                    class="color-text-paragraph-2 font-xs"> 12
                                                                                    mins to read </span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <?php
                                                    }
                                                } else {
                                                    echo "no record found";
                                                }
                                                ?>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div>
            <section class="section mt-50">
                    <div class="container">

                        <div class="row justify-content-center">

                            <div class="col-lg-6">


                                <div class="section-title text-center mb-4 pb-2">

                                    <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp"> Our Happy
                                        Customer </h2>
                                    <div
                                        class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">
                                        When it comes to choosing the right web hosting provider, we know how easy it is
                                        to get overwhelmed with the number. </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-50 justify-content-center">
                            
                                    <div class="col-lg-12">

                                        <div class="swiper pb-5" id="testimonial-slider">
                                            
                                            <div class="swiper-wrapper pb-70 pt-5">
                                            <?php
                            require 'admin\database\dbconfig.php';

                            $query = "SELECT * FROM tbl_feedback";
                            $query_run = mysqli_query($connection, $query);
                            $check_blog = mysqli_num_rows($query_run) > 0;

                            if ($check_blog) {
                                while ($row = mysqli_fetch_array($query_run)) {

                                    ?>
                                                <div class="swiper-slide swiper-group-3">
                                                    
                                                    <div class="card-grid-6 hover-up">
                                                    
                                                        <div class="card-text-desc mt-10">
                                                            
                                                            <p class="font-md color-text-paragraph"><?php echo $row['feedback']; ?></p>
                                                        </div>
                                                        <div class="card-image">
                                                            <div class="image">
                                                                <figure><?php echo "<img src='admin/upload/.{$row['fimage']}'" ?></figure>
                                                            </div>
                                                            <div class="card-profile">
                                                                <h6><?php echo $row['name']; ?></h6><span><?php echo $row['profession']; ?></span>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <?php
                                }
                            } else {
                                echo "no record found";
                            }
                            ?>
                                            </div>
                                            
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
    </main>
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href="indexxx.php"
                        aria-label="careerplus - Laravel Job Board Script"><img alt="" src=""></a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2"> CareerPlus is the heart of the design
                        community
                        and the best resource to discover and connect with designers and jobs worldwide. </div>
                    <div class="footer-social"><a class="icon-socials" title="Facebook" href="https://facebook.com"
                            target="_blank"><img src=indexx\storage\socials\facebook.png alt="Facebook"></a><a
                            class="icon-socials" title="Linkedin" href="https://linkedin.com" target="_blank"><img
                                src=indexx\storage\socials\linkedin.png alt="Linkedin"></a><a class="icon-socials"
                            title="Twitter" href="https://twitter.com" target="_blank"><img
                                src=indexx\storage\socials\twitter.png alt="Twitter"></a></div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Resources</div>
                    <ul class="menu-footer">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Community</div>
                    <ul class="menu-footer">
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="faqs.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">More</div>
                    <ul class="menu-footer">
                        <li><a href="cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="terms.php">Terms</a></li>
                        <li><a href="faqs.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-6 col-md-3 col-sm-12">
                    <div class="h6 mb-20">Download App</div>
                    <p class="color-text-paragraph-2 font-xs"></p>
                    <div class="mt-15"><a class="mr-5" href="#"><img src=indexx\storage\general\app-store.png
                                alt="App Store"></a><a class="mr-5" href="#"><img src=indexx\storage\general\android.png
                                alt="Google Play"></a></div>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph"> ©Careerplus.com, Inc. All rights
                            reserved.</span></div>

                </div>
            </div>
        </div>
    </footer>
    <script> window.currencies = { "display_big_money": null, "billion": "billion", "million": "million", "is_prefix_symbol": 0, "symbol": "\u20ac", "title": "EUR", "decimal_separator": ".", "thousands_separator": ",", "number_after_dot": 2, "show_symbol_or_title": true }; </script>
    <script src=indexx\themes\jobbox\plugins\wow.js></script>
    <script src=indexx\themes\jobbox\plugins\modernizr-3.6.0.min.js></script>
    <script src=indexx\themes\jobbox\plugins\jquery-3.6.3.min.js></script>
    <script src=indexx\themes\jobbox\plugins\jquery-migrate-3.3.0.min.js></script>
    <script src=indexx\themes\jobbox\plugins\bootstrap\bootstrap.bundle.min.js></script>
    <script src=indexx\themes\jobbox\plugins\waypoints.js></script>
    <script src=indexx\themes\jobbox\plugins\magnific-popup.js></script>
    <script src=indexx\themes\jobbox\plugins\perfect-scrollbar.min.js></script>
    <script src=indexx\themes\jobbox\plugins\select2.min.js></script>
    <script src=indexx\themes\jobbox\plugins\isotope.js></script>
    <script src=indexx\themes\jobbox\plugins\scrollup.js></script>
    <script src=indexx\themes\jobbox\plugins\swiper-bundle.min.js></script>
    <script src=indexx\themes\jobbox\plugins\counterup.js></script>
    <script src=indexx\themes\jobbox\js\main.js?v=1.11.1></script>
    <script src=indexx\themes\jobbox\js\script.js?v=1.11.1></script>
    <script src=indexx\themes\jobbox\js\backend.js?v=1.11.1></script>
    <script src=indexx\vendor\core\plugins\language\js\language-public.js?v=2.2.0></script>
    <script async defer src=https://www.googletagmanager.com/gtag/js?id=G-R7X6YBEYYT></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-R7X6YBEYYT');</script>
</body>

</html>