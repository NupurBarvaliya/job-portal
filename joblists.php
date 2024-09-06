<!doctype html>
<html lang="en">
<?php
require 'constants/settings.php';
require 'constants/check-login.php';
$fromsearch = false;

if (isset($_GET['search']) && $_GET['search'] == "✓") {

} else {

}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "" || $page == "1") {
        $page1 = 0;
        $page = 1;
    } else {
        $page1 = ($page * 16) - 16;
    }
} else {
    $page1 = 0;
    $page = 1;
}

if (isset($_GET['country']) && ($_GET['category'])) {
    $cate = $_GET['category'];
    $country = $_GET['country'];
    $query1 = "SELECT * FROM tbl_jobs WHERE category = :cate AND country = :country ORDER BY enc_id DESC LIMIT $page1,12";
    $query2 = "SELECT * FROM tbl_jobs WHERE category = :cate AND country = :country ORDER BY enc_id DESC";
    $fromsearch = true;

    $slc_country = "$country";
    $slc_category = "$cate";
    $title = "$slc_category jobs in $slc_country";
} else {
    $query1 = "SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT $page1,12";
    $query2 = "SELECT * FROM tbl_jobs ORDER BY enc_id DESC";
    $slc_country = "NULL";
    $slc_category = "NULL";
    $title = "Job List";
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
    <title>CareerPlus</title>



    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="employee\main.css" rel="stylesheet">

    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/style.css?v=1.11.7">
    <link media="all" type=text/css rel="stylesheet" href="indexx/css/animate-min.css?v=1.11.7">
    <link rel="stylesheet" type="text/css" href="employee\bootstrap.min.css" media="screen">
    <link href="css/component.css" rel="stylesheet">



    <link href="css/animate.css" rel="stylesheet">



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
    <div class="clear"></div>
    <div>
        <section class="section-box">
            <div class="banner-hero hero-2 hero-3">
                <div class="banner-inner">
                    <div class="block-banner">
                        <h1 class="text-42 color-white wow animate__animated animate__fadeInUp"> The official
                            <span class="color-green"> Jobs</span> site
                        </h1>
                        <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s"> “CareerPlus is our first stop whenever we're hiring a PHP role.
                            We've hired 10 PHP developers in the last few years, all thanks to CareerPlus.” </div>
                        <div class="form-find position-relative mt-40 wow animate__animated animate__fadeIn"
                            data-wow-delay=".2s">
                            <form action="joblists.php" method="GET" autocomplete="off">
                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group form-lg">
                                        <select class="form-control" name="category" required />
                                        <option value="">-Select category-</option>
                                        <?php
                                        require 'constants/db_config.php';
                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                            $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            foreach ($result as $row) {
                                                $cat = $row['category'];
                                                ?>
                                                <option <?php if ($slc_category == "$cat") {
                                                    print ' selected ';
                                                } ?>
                                                    value="<?php echo $row['category']; ?>">
                                                    <?php echo $row['category']; ?>
                                                </option>
                                                <?php
                                            }
                                            $stmt->execute();

                                        } catch (PDOException $e) {

                                        }

                                        ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group form-lg">
                                        <select class="form-control" name="country" required />
                                        <option value="">-Select country-</option>
                                        <?php
                                        require 'constants/db_config.php';
                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                            $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            foreach ($result as $row) {
                                                $cnt = $row['country_name'];
                                                ?>

                                                <option <?php if ($slc_country == "$cnt") {
                                                    print ' selected ';
                                                } ?>
                                                    value="<?php echo $row['country_name']; ?>">
                                                    <?php echo $row['country_name']; ?>
                                                </option>
                                                <?php
                                            }
                                            $stmt->execute();

                                        } catch (PDOException $e) {

                                        }

                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-btn-group"><button name="search" value="✓" type="submit"
                                        class="btn btn-default btn-find font-sm">Search</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container mt-60">

                    <div class="box-swiper mt-50">

                        <div class="swiper-container swiper-group-5 swiper">

                            <div class="swiper-wrapper pb-25 pt-5">
                                <?php
                                require 'admin\database\dbconfig.php';

                                $query = "SELECT * FROM tbl_categories";
                                $query_run = mysqli_query($connection, $query);
                                $check_job = mysqli_num_rows($query_run) > 0;

                                if ($check_job) {
                                    while ($row = mysqli_fetch_array($query_run)) {

                                        ?>

                                        <div class="swiper-slide hover-up"><a href="joblists.php?id=<?php echo $row['id']; ?>">

                                                <div class="item-logo">


                                                    <div class="image-left"><img src=indexx/storage/general/content.png
                                                            alt="Content Writer">
                                                    </div>
                                                    <div class="text-info-right">

                                                        <h4><?php echo $row['category']; ?></h4>
                                                        <p class="font-xs"> <span>Jobs Available</span></p>
                                                        
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                    }
                                } else {
                                    echo "no record found";
                                }
                                ?>
                            </div>
                            <div class="swiper-pagination swiper-pagination-style-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="main-wrapper">

        <div class="breadcrumb-wrapper">

            <div class="container">

                <ol class="breadcrumb-list booking-step">
                    <li><a href="./">Home</a></li>
                    <li><span>
                            <?php echo "$title"; ?>
                        </span></li>
                </ol>

            </div>

        </div></br></br>


        <div class="section sm">

            <div class="container">

                <div class="sorting-wrappper">

                    <div class="sorting-header">
                        <h3 class="sorting-title">
                            <?php echo "$title"; ?>
                        </h3>
                    </div>


                </div>

                <div class="col-12 col-lg-12 jobs-listing">
                    <div class="content-page job-content-section">
                        <div class="box-filters-job">
                            <div class="row">

                            </div>
                            <div class="row showing-of-results">
                                <div class="loading-ring">
                                    <div class="loading-ring-wrapper">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>



                                <div class="result-list-wrapper">
                                    <?php
                                    require 'constants/db_config.php';

                                    try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $stmt = $conn->prepare($query1);
                                        if ($fromsearch == true) {
                                            $stmt->bindParam(':cate', $slc_category);
                                            $stmt->bindParam(':country', $slc_country);
                                        }
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
                                        foreach ($result as $row) {
                                            $post_date = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'd');
                                            $post_month = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'F');
                                            $post_year = date_format(date_create_from_format('d/m/Y', $row['closing_date']), 'Y');
                                            $type = $row['type'];
                                            $compid = $row['company'];

                                            $stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$compid' and role = 'employer'");
                                            $stmtb->execute();
                                            $resultb = $stmtb->fetchAll();
                                            foreach ($resultb as $rowb) {
                                                $complogo = $rowb['avatar'];
                                                $thecompname = $rowb['first_name'];

                                            }
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


                                        </div>


                                        <div class="col-xl-12 col-12 job-items">

                                            <div class="card-grid-2 hover-up featured-job-item "><span class="flash"></span>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-10 col-sm-12">
                                                        <div class="card-grid-2-image-left">
                                                            <div class="image">
                                                                <?php
                                                                if ($complogo == null) {
                                                                    print '<center><img class="autofit3" alt="image"  src="images/blank.png"/></center>';
                                                                } else {
                                                                    echo '<center><img class="autofit3" alt="image" title="' . $thecompname . '" width="70" height="100" src="data:image/jpeg;base64,' . base64_encode($complogo) . '"/></center>';
                                                                }
                                                                ?>
                                                            </div>&nbsp;&nbsp;
                                                            <div class="right-info"><span>
                                                                    <h5>at&nbsp;&nbsp;<a
                                                                            href="companys.php?ref=<?php echo "$compid"; ?>">
                                                                            <?php echo "$thecompname"; ?>
                                                                        </a></h5>
                                                                </span>
                                                                <span class="location-small">
                                                                    <?php echo $row['city']; ?>,
                                                                    <?php echo $row['country']; ?>
                                                                </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?php echo "$sta"; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                        <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5 mb-2">
                                                                <?php echo $row['experience']; ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-block-info">
                                                    <h4><a href="nexplore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                                            <?php echo $row['title']; ?>
                                                        </a></h4>
                                                    <div class="mt-5"><span class="card-briefcase">Deadline</span><span
                                                            class="card-time"><span>
                                                                <?php echo "$post_month"; ?>
                                                                <?php echo "$post_date"; ?>,
                                                                <?php echo "$post_year"; ?>
                                                            </span></span>
                                                    </div>
                                                    <p class="font-sm color-text-paragraph mt-10">
                                                    <h6>
                                                        <?php echo $row['description']; ?>
                                                    </h6>
                                                    </p></br>
                                                    <div class="sub-category">
                                                        <a>
                                                            <?php echo $row['category']; ?>
                                                        </a>
                                                    </div>
                                                    <div class="card-2-bottom mt-20">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-7"><span class="card-text-price"
                                                                    title="$7,100 - $11,100">₹
                                                                    <?php echo $row['salary']; ?>
                                                                </span><span class="text-muted"> / Monthly</span></div>
                                                            <div class="col-lg-5 col-5 text-end">
                                                                <div class=""><button class="btn btn-apply-now"><a href="nexplore-job.php?jobid=<?php echo $row['job_id']; ?>">Apply Now </a></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                        }


                                    } catch (PDOException $e) {

                                    } ?>
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