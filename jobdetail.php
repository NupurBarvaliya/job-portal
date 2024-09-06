<?php
    require 'admin\database\dbconfig.php';
include 'constants/check-login.php';


    $id = "";
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
    }

    $sql_query = "SELECT * FROM tbl_jobs WHERE enc_id = $id";
    $result=$connection->query($sql_query);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
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
    <title>CareerPlus</title>
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">
</head>

<body>
    
<header class="header sticky-bar ">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="indexxx.php"><img alt="" src=indexx\storage\avatars\cp2.png></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div></a> </li>
                            <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                <ul class="sub-menu">
                                    <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i> Cookie Policy </a></li>
                                    <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms & Conditions </a></li>
                                    <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <<div class="header-right">
                    <div class="block-signin">
                        <?php
						if ($user_online == true) {
						print '
						    <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="logout.php">Logout</a></li></ul>
							<a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="login.php">login</a></li></ul>
							<a data-toggle="modal" href="#registerModal">register</a></li>';						
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
                                <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div></a> </li>
                                <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                <ul class="sub-menu">
                                    <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i> Cookie Policy </a></li>
                                    <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms & Conditions </a></li>
                                    <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a></li>
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
							<a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="login.php">login</a></li></ul>
							<a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
        
    <main class="main">
        <section class="section-box-2">
            <div class="container">
            <?php
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {

                                ?>
                            <div class="banner-hero banner-image-single">
                                <div class="wrap-cover-image"><img src=indexx\storage\general\jobdetailbk.jpg
                                        alt="Dailymotion"></div>
                            </div>
                            <div class="mt-10 d-flex align-items-center job-header-content">
                            
                                <div>
                                    <h3><?php echo $row['title']; ?></h3>
                                    <div class="mt-0 mb-15"><span class="card-briefcase"><?php echo $row['type']; ?></span><span class="card-time"><?php echo $row['date_posted']; ?></span></div>
                                </div>
                                
                            <div class="border-bottom pt-10 pb-10"></div>
            </div>
        </section>
        <section class="section-box mt-50 job-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 col-lg-8">

                    

                                
                        <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Employment Information</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/industry.svg
                                            alt="Industry"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description industry-icon mb-10">Industry</span><span
                                            class="small-heading"><?php echo $row['category']; ?>
                                        </span></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/job-level.svg
                                            alt="Job level"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description joblevel-icon mb-10">Job level</span><strong
                                            class="small-heading"><?php echo $row['title']; ?></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/salary.svg
                                            alt="Salary"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description salary-icon mb-10">Salary</span><strong
                                            class="small-heading text-primary fw-bold">$9,500 - $11,900 /yearly</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/experience.svg
                                            alt="Experience"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description experience-icon mb-10">Experience</span><strong
                                            class="small-heading"><?php echo $row['experience']; ?></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/job-type.svg
                                            alt="Job type"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description jobtype-icon mb-10">Job type</span><strong
                                            class="small-heading"><?php echo $row['type']; ?></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/location.svg
                                            alt="Location"></div>
                                    <div class="sidebar-text-info ml-10"><span
                                            class="text-description mb-10">Location</span><strong class="small-heading">
                                            <?php echo $row['city']; ?> <?php echo $row['country']; ?></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                            <div class="ck-content">
                                <h5>Description</h5>
                                <div>
                                    <ul>
                                        <li> <?php echo $row['description']; ?> </li>
                                    </ul>
                                </div>
                                <h5>Responsibilities</h5>
                                <div>
                                    <ul>
                                        <li> <?php echo $row['responsibility']; ?> </li>
                                    </ul>
                                </div>
                                <h5>Requirements </h5>
                                <div>
                                    <ul>
                                        <li> <?php echo $row['requirements']; ?> </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-3">Posted Date</h5>
                            <div class="job-details-desc">
                                <div class="mt-4"><span class="badge bg-primary me-1"><?php echo $row['date_posted']; ?></span></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-3">Closing Date</h5>
                            <div class="job-details-desc">
                                <div class="mt-4"><span
                                            class="badge bg-primary me-1"><?php echo $row['closing_date']; ?></span></a></div>
                            </div>
                        </div>
                        <div class="single-apply-jobs">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class=""><button class="btn btn-default mr-15"
                                            data-job-name="Senior Enterprise Advocate, EMEA" data-job-id="23"
                                            data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm"> Apply Now
                                        </button></div>
                                </div>
                                
                            </div>
                        </div>
                        
                            
                        
                        

                        <?php

                                }
                            }
                        ?>


                        
                    </div>
                    
                </div>
            </div>
        </section>
        
    </main>
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href="indexxx.php"
                        aria-label="careerplus - Laravel Job Board Script"><img alt="" src=""></a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2"> CareerPlus is the heart of the design community
                        and the best resource to discover and connect with designers and jobs worldwide. </div>
                    <div class="footer-social"><a class="icon-socials" title="Facebook" href="https://facebook.com"
                            target="_blank"><img src=indexx\storage\socials\facebook.png
                                alt="Facebook"></a><a class="icon-socials" title="Linkedin" href="https://linkedin.com"
                            target="_blank"><img src=indexx\storage\socials\linkedin.png
                                alt="Linkedin"></a><a class="icon-socials" title="Twitter" href="https://twitter.com"
                            target="_blank"><img src=indexx\storage\socials\twitter.png
                                alt="Twitter"></a></div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Resources</div>
                    <ul class="menu-footer">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Community</div>
                    <ul class="menu-footer">
                        <li><a href="aboutus.php">Feature</a></li>
                        <li><a href="#">Credit</a></li>
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
                    <div class="mt-15"><a class="mr-5" href="#"><img
                                src=indexx\storage\general\app-store.png alt="App Store"></a><a
                            class="mr-5" href="#"><img src=indexx\storage\general\android.png
                                alt="Google Play"></a></div>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph"> ©2023 Archi Elite JSC. All right
                            reserved. </span></div>
                    
                </div>
            </div>
        </div>
    </footer>
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