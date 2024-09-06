<!doctype html>
<html lang="en">
<?php
require 'constants/settings.php';
require 'constants/check-login.php';
require 'constants/db_config.php';

if (isset($_GET['ref'])) {

    $company_id = $_GET['ref'];



    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = :memberno AND role = 'employer'");
        $stmt->bindParam(':memberno', $company_id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $rec = count($result);

        if ($rec == "0") {
            header("location:./");
        } else {

            foreach ($result as $row) {

                $compname = $row['first_name'];
                $compesta = $row['byear'];
                $compmail = $row['email'];
                $comptype = $row['title'];
                $compphone = $row['phone'];
                $compcity = $row['city'];
                $compstreet = $row['street'];
                $compzip = $row['zip'];
                $compcountry = $row['country'];
                $compbout = $row['about'];
                $complogo = $row['avatar'];
                $compserv = $row['services'];
                $compexp = $row['expertise'];
                $compweb = $row['website'];
                $comppeopl = $row['people'];

            }

        }


    } catch (PDOException $e) {

    }

} else {
    header("location:./");
}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "" || $page == "1") {
        $page1 = 0;
        $page = 1;
    } else {
        $page1 = ($page * 5) - 5;
    }
} else {
    $page1 = 0;
    $page = 1;
}
?>

<head>

    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name=viewport>
    <meta name=csrf-token content="CClL2DGUzIbxbgVZNx2aWzbA9NJ6sek0VQwcGTLB">
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
    <title>Candidates</title>



    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="employee\main.css" rel="stylesheet">

    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/style.css?v=1.11.7">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/animate-min.css?v=1.11.7">
    <link rel="stylesheet" type="text/css" href="employee\bootstrap.min.css" media="screen">
    <link href="css/component.css" rel="stylesheet">


    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link href="css/animate.css" rel="stylesheet">


    <script type="text/javascript">
        function update(str) {

            var txt;
            var r = confirm("Are you sure you want to apply this job , you can not UNDO");
            if (r == true) {
                document.getElementById("data").innerHTML = "Please wait...";
                var xmlhttp;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("data").innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open("GET", "app/apply-job.php?opt=" + str, true);
                xmlhttp.send();
            } else {

            }

        }
    </script>

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
                            <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div></a>
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
							<a href="employee\indexx.php"' . $myrole . '">Profile</a></li>';
                        } else {
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
                                <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div>
                                        </a></li>
                                <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div>
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
    </div>
    </div>
    <div class="clear"></div>

    <div class="main-wrapper">

        <div class="breadcrumb-wrapper">

            <div class="container">

                <ol class="breadcrumb-list booking-step">
                    <li><a href="companies.php">Employers</a></li>
                    <li><span>
                            <?php echo "$compname"; ?>
                        </span></li>
                </ol>

            </div>

        </div></br>

        <div class="banner-hero banner-image-single">
                    <div class="wrap-cover-image">
                        <img src=indexx\storage\general\cover-image.png  alt="">
                    </div>
        <div class="section sm">

            <div class="container">

                <div class="row">

                    <div class="col-md-10 col-md-offset-1">

                        <div class="company-detail-wrapper">

                            <div class="company-detail-header text-center">

                                <div class="image">
                                    <?php
                                    if ($complogo == null) {
                                        print '<center>Company Logo Here</center>';
                                    } else {
                                        echo '<center><img alt="image" title="' . $compname . '" width="10%" height="10%" src="data:image/jpeg;base64,' . base64_encode($complogo) . '"/></center>';
                                    }
                                    ?>
                                </div>

                                <h2 class="heading mb-15">
                                    <?php echo "$compname"; ?>
                                </h2>

                                <p class="location"><i class="fa fa-map-marker"></i>
                                    <?php echo "$compzip"; ?>
                                    <?php echo "$compcity"; ?>.
                                    <?php echo "$compstreet"; ?>,
                                    <?php echo "$compcountry"; ?> <span class="mh-5">|</span> <i
                                        class="fa fa-phone"></i>
                                    <?php echo "$compphone"; ?>
                                </p></br>

                                <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Company Information</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/industry.svg
                                            alt="Industry"></div>
                                    <div class="sidebar-text-info ml-1"><span
                                            class="text-description industry-icon mb-10">Industry :</span><span
                                            class="small-heading"><?php echo "$comptype"; ?>
                                        </span></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/job-level.svg
                                            alt="Job level"></div>
                                    <div class="sidebar-text-info ml-1"><span
                                            class="text-description joblevel-icon mb-10"><h6>Employees:</h6></span><strong
                                            class="small-heading"><?php echo "$comppeopl"; ?></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/website.svg
                                            alt="Salary"></div>
                                    <div class="sidebar-text-info ml-1"><span
                                            class="text-description salary-icon mb-10">Website :</span>
                                            <strong class="small-heading text-primary fw-bold"><a target="_blank" href="https://<?php echo "$compweb"; ?>">
                                            <?php echo "$compweb"; ?>
                                        </a></strong>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/email2.svg
                                            alt="Experience"></div>
                                    <div class="sidebar-text-info ml-1"><span
                                            class="text-description experience-icon mb-10">Email :</span>
                                            <strong class="small-heading text-primary fw-bold"><a target="_blank" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSGKnRCnRdGJnhHZmFkCgTCQpVLFRTkffRFBQwkgsDZDFjWBwhvqgxRrbmtXVktfSTWVrXvh">
                                            <?php echo "$compmail"; ?>
                                        </a></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/deadline1.svg
                                            alt="Job type"></div>
                                    <div class="sidebar-text-info ml-20"><span
                                            class="text-description jobtype-icon mb-10"><h6>Established In:</h6></span><strong
                                            class="small-heading"><?php echo "$compesta"; ?></strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-15">
                                    <div class="sidebar-icon-item"><img
                                            src=indexx/themes/jobbox/imgs/page/job-single/location.svg
                                            alt="Location"></div>
                                    <div class="sidebar-text-info ml-1"><span
                                            class="text-description mb-10">Location :</span><strong class="small-heading">
                                            <?php echo "$compcity"; ?>, <?php echo "$compcountry"; ?></strong></div>
                                </div>
                            </div>
                        </div>

                                
                            </div>

                            <div class="company-detail-company-overview clearfix">

                                <h3>Company background</h3>

                                <p>
                                    <?php echo "$compbout"; ?></br></br>
                                </p>


                                <h3>Services</h3>

                                <p>
                                    <?php echo "$compserv"; ?></br></br>
                                </p>

                                <h3>Expertise</h3>

                                <p>
                                    <?php echo "$compexp"; ?></br></br>
                                </p>

                            </div></br></br></br>


                            <div class="box-related-job content-page box-list-jobs">
                                <h5 class="text-left">jobs offered at
                                    <?php echo "$compname"; ?>
                                </h5></br></br>
                                <div class="display-list">
                                    <?php
                                    require 'constants/db_config.php';

                                    try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                        $stmt = $conn->prepare("SELECT * FROM tbl_jobs WHERE company = :compid ORDER BY enc_id DESC LIMIT 5");
                                        $stmt->bindParam(':compid', $company_id);
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();

                                        foreach ($result as $row) {
                                            $post_date = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'd');
                                            $post_month = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'F');
                                            $post_year = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'Y');
                                            $type = $row['type'];
                                            if ($type == "Freelance") {
                                                $sta = '<span class="job-label label label-success">Freelance</span>';

                                            }
                                            if ($type == "Part-time") {
                                                $sta = '<span class="job-label label label-danger">Part-time</span>';

                                            }
                                            if ($type == "Full-time") {
                                                $sta = '<span class="job-label label label-warning">Full-time</span>';

                                            }

                                            ?>
                                            <div class="col-12 jobs-listing">
                                                <div class="card-grid-2 hover-up">

                                                    <span class="flash"></span>
                                                    <div class="row">
                                                        <div class=" col-lg-6 col-md-6 col-sm-12">
                                                            <div class="card-grid-2-image-left">
                                                                <div class="image">
                                                                
										                        <?php 
										                            if ($complogo == null) {
                                                                    print '<center><img class="autofit3" alt="image"  src="images/blank.png"/></center>';
                                                                    }else{
                                                                    echo '<center><img class="autofit3" alt="image" title="'.$compname.'" width="10%" height="20%" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
                                                                    }
                                                                    ?>
											                    </div>&nbsp;&nbsp;
                                                                <div class="right-info"><a class="name-job" href="nexplore-job.php?jobid=<?php echo $row['job_id']; ?>"><?php echo $row['title']; ?></a>
															<span>at <a href="company.php?ref=<?php echo "$company_id"; ?>"><?php echo "$compname"; ?></a></span>
                                                                <span class="location-small">Location: <?php echo $row['city']; ?>, <?php echo $row['country']; ?></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                            <div class="pl-15 mb-15 mt-30"><a
                                                                    class="btn btn-grey-small mr-5 mb-2" href=""><?php echo $row['category']; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block-info">
                                                        <div class="mt-5"><span class="card-briefcase"><?php echo "$sta"; ?></span><span
                                                                class="card-time"><span><?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span></span></div>
                                                        <p class="font-sm color-text-paragraph mt-10"><?php echo $row['description']; ?></p>
                                                        <div class="card-2-bottom mt-20">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-7"><span class="card-text-price"
                                                                        title="$7,900 - $9,200"> $7,900 - $9,200 </span><span
                                                                        class="text-muted">/Weekly</span></div>
                                                                <div class="col-lg-5 col-5 text-end">
                                                                    <div class="">
                                                                        <button class="btn btn-apply-now"  data-job-name="<?php echo $row['title']; ?>" data-job-id="<?php echo $row['job_id']; ?>"> Apply Now </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <?php


                                        }


                                    } catch (PDOException $e) {

                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

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
                <div class="footer-col-2 col-md-2 col-sm-3">
                    <div class="h6 mb-20">Download App</div>
                    <p class="color-text-paragraph-2 font-xs"></p>
                    <div class="mt-15"><a class="mr-5" href="#"><img src=indexx\storage\general\app-store.png width="10" height="10px" alt="App Store"></a><a class="mr-5" href="#"><img src=indexx\storage\general\android.png alt="Google Play"></a></div>
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

            <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
            <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
            <script type="text/javascript" src="../js/bootstrap-modal.js"></script>
            <script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
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