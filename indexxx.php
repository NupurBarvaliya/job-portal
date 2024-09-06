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
    <meta name=csrf-token content="CFUqVZj7aXUvcV0EuoQIQLOnX5iFhTzrcFR9GgH4">
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

    <link href="" rel="shortcut icon">
    <script type=application/ld+json>
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "CareerPlus",
        }
    </script>
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">



    <script type=application/ld+json>
        {
            "@context": "https:\/\/schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Homepage 1",
            }]
        }
    </script>
    <script type=application/ld+json>
        {
            "@context": "https:\/\/schema.org",
            "@type": "Organization",
            "name": "JobBox - Laravel Job Board Script",
            "logo": {
                "@type": "ImageObject",
            }
        }
    </script>

    <style>
        .page_speed_1974690106 {
            display: none;
        }

        .page_speed_1249088768 {
            height: 16px
        }

        .page_speed_885187667 {
            background: url(indexx/storage/pages/bg-left-hiring.png) no-repeat 0 0
        }

        .page_speed_215232277 {
            background: url(indexx/storage/pages/bg-right-hiring.png) no-repeat 0 0
        }

        .page_speed_1658661178 {
            style-1
        }

        .page_speed_998426849 {
            background-image: url(indexx/storage/general/newsletter-background-image.png)
        }
    </style>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function () {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function (e) {
                        return function () {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function (e) {
                        t[e] = t.factory(e);
                    }), t.load = function (t) {
                        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('8zccgzpekpnz');
    </script>
    <!-- End of Async Drift Code -->
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
        <div class="main-content">
            <div class="page-content" id="app">
                <div class="ck-content">
                    <div>
                        <div class="bg-homepage1"></div>
                        <section class="section-box">
                            <div class="banner-hero hero-1">
                                <div class="banner-inner">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-12">
                                            <div class="block-banner">
                                                <h1 class="heading-banner wow animate__animated animate__fadeInUp"> The
                                                    <span class="color-brand-2">Easiest Way</span> to Get Your New Job
                                                </h1>
                                                <div class="banner-description mt-20 wow animate__animated animate__fadeInUp"
                                                    data-wow-delay=".1s"> Each month, more than 3 million job seekers
                                                    turn to website in their search for work, making over 140,000
                                                    applications every single day </div>
                                                <div class="form-find position-relative mt-40 wow animate__animated animate__fadeIn"
                                                    data-wow-delay=".2s">
                                                    <form method="GET" action="joblists.php" method="GET"
                                                        autocomplete="off">
                                                        <div class="col-xss-4 col-xs-4 col-sm-4">
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
                                                                    ?>

                                                                    <option style="color:black"
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
                                                        <div class="col-xss-4 col-xs-4 col-sm-4">
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
                                                                    ?>

                                                                    <option style="color:black"
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
                                                        <div class="search-btn-group"><button
                                                                class="btn btn-default btn-find font-sm" value="✓"
                                                                type=submit name="search">Search</button></div>
                                                    </form>
                                                </div>
                                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp"
                                                    data-wow-delay=".3s"><strong>Popular Searches:</strong><a
                                                        href="http://localhost/ojobp/joblists.php?category=Auditing&country=India&search=%E2%9C%93">Auditing</a>,
                                                    <a
                                                        href="http://localhost/ojobp/joblists.php?category=Legal&country=India&search=%E2%9C%93">Legel</a>,
                                                    <a
                                                        href="http://localhost/ojobp/joblists.php?category=IT+and+Telecoms&country=India&search=%E2%9C%93">It
                                                        And Telecoms</a>,
                                                    <a
                                                        href="http://localhost/ojobp/joblists.php?category=Manufacturing&country=India&search=%E2%9C%93">Manufacturing</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                                            <div class="banner-imgs">
                                                <div class="block-1 shape-1"><img class="img-responsive"
                                                        alt="pages/banner1.png" src=indexx\storage\pages\12st.png></div>
                                                <div class="block-2 shape-2"><img class="img-responsive"
                                                        alt="pages/banner2.png" src=indexx\storage\pages\13st.png></div>
                                                <div class="block-3 shape-3"><img class="img-responsive"
                                                        alt="pages/icon-top-banner.png"
                                                        src=indexx\storage\pages\icon-top-banner.png></div>
                                                <div class="block-4 shape-4"><img class="img-responsive"
                                                        alt="pages/icon-bottom-banner.png"
                                                        src=indexx\storage\pages\icon-bottom-banner.png></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div>
                        <section class="section-box mt-80">
                            <div class="section-box wow animate__animated animate__fadeIn">
                                <div class="text-center">
                                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp"> Browse
                                        by category </h2>
                                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">
                                        Find the job that’s perfect for you. about 800+ new jobs everyday </p>
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

                                                        <div class="swiper-slide hover-up"><a
                                                                href="joblists.php?id=<?php echo $row['id']; ?>">

                                                                <div class="item-logo">


                                                                    <div class="image-left"><img
                                                                            src=indexx/storage/general/content.png
                                                                            alt="Content Writer">
                                                                    </div>
                                                                    <div class="text-info-right">

                                                                        <h4>
                                                                            <?php echo $row['category']; ?>
                                                                        </h4>
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
                    <div>
                        <div class="section-box mb-30">
                            <div class="container">
                                <div class="box-we-hiring">
                                    <div class="box-we-hiring-before page_speed_885187667"></div>
                                    <div class="text-1"><span class="text-we-are">We are</span><span
                                            class="text-hiring">HIRING</span></div>
                                    <div class="text-2"> Let’s <span class="color-brand-1">Work</span> Together
                                        <br>&amp;<span class="color-brand-1"> Explore</span> Opportunities
                                    </div>
                                    <div class="text-3">
                                        <a href="#">
                                            <div class="btn btn-apply btn-apply-icon">Apply</div>
                                        </a>
                                    </div>
                                    <div class="box-we-hiring-after page_speed_215232277"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <section class="section-box mt-50 job-of-the-day">
                            <div class="container">
                                <div class="text-center">
                                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp"> Jobs of the
                                        day </h2>
                                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">
                                        Search and connect with the right candidates faster. </p>
                                    <div class="list-tabs mt-40">
                                        <div class="nav nav-tabs" role="tablist">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-70">
                                    <div class="tab-content" id="myTabContent-1">
                                        <div class="tab-pane fade show active" id="tab-job-1"
                                            aria-labelledby="tab-job-1">
                                            <div class="row job-of-the-day-list">
                                                <div class="loading-ring">
                                                    <div class="loading-ring-wrapper">
                                                    </div>
                                                </div>

                                                <?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                            <div class="card-grid-2 hover-up items">
                                                                <div class="card-grid-2-image-left job-item">
                                                                    <!--<div class="image-box"><img src=indexx\storage\companies\4.png alt="Name"></div>-->
                                                                    <div class="image-box">
							                                        <?php 
							                                            if ($complogo == null) {
							                                            print '<center><img alt="image"  src="images/blank.png"/></center>';
							                                            }else{
							                                            echo '<center><img alt="image" title="'.$thecompname.'" width="100" height="50" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							                                            }
							                                            ?>
							                                        </div>
                                                                    <div class="right-info"><h5><?php echo "$thecompname"; ?></h5><a class="name-job" title="Dailymotion" href="">
                                                                            
                                                                        </a>
                                                                        <h4><span class="location-small">City:
                                                                                <?php echo $row['city']; ?>,
                                                                                <?php echo $row['country']; ?>
                                                                            </span></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="card-block-info">
                                                                    <div class="h6 fw-bold text-truncate"><a href="nexplore-job.php?jobid=<?php echo $row['job_id']; ?>"
                                                                            title="<?php echo "$title"; ?>">
                                                                            <?php echo "$title"; ?>
                                                                        </a></div>
                                                                    <div class="mt-5"><span class="card-time">
                                                                            <?php echo $row['date_posted']; ?>
                                                                        </span></div>
                                                                    <p class="font-sm color-text-paragraph job-description mt-15"
                                                                        title="Magni itaque corrupti cupiditate. Quae fuga unde mollitia impedit. Minus error enim delectus repellendus harum accusamus autem. Neque repellat repellendus quis.">
                                                                        <?php echo $row['description']; ?>
                                                                    </p>
                                                                    <div class="mt-15"><a class="btn btn-grey-small mr-5 mb-2">
                                                                            <?php echo $row['type']; ?>
                                                                        </a></div>
                                                                    <div class="card-2-bottom mt-15">
                                                                        <div class="row">
                                                                            <div class="col-12 salary-information"><span
                                                                                    class="card-text-price" title="salary"> ₹
                                                                                    <?php echo $row['salary']; ?>
                                                                                </span><span class="text-muted">/Monthly</span>
                                                                            </div>
                                                                            <div class="col-12 mt-3">
                                                                                <div> <button class="btn btn-apply-now"><a href="nexplore-job.php?jobid=<?php echo $row['job_id']; ?>">Apply Now </a></button> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>
                                            </div>
                                        </div>
                                    </div>
                        </section>
                    </div>
                    <div>
                        <section class="section-box overflow-visible mt-100 mb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="box-image-job"><img class="img-job-1" alt="pages/img-chart.png"
                                                src=indexx\storage\pages\img-chart.png><img class="img-job-2"
                                                alt="pages/controlcard.png" src=indexx\storage\pages\controlcard.png>
                                            <figure class="wow animate__animated animate__fadeIn"><img
                                                    alt="pages/img1.png" src=indexx\storage\pages\img1.png></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="content-job-inner"><span class="color-text-mutted text-32">Millions
                                                Of Jobs.</span>
                                            <h2 class="text-52 wow animate__animated animate__fadeInUp">Find The One
                                                That’s Right For You</h2>
                                            <div
                                                class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">
                                                Search all the open positions on the web. Get your own personalized
                                                salary estimate. Read reviews on over 600,000 companies worldwide. The
                                                right job is out there.</div>
                                            <div class="mt-40">
                                                <div class="wow animate__animated animate__fadeInUp"><a
                                                        class="btn btn-default" href="joblists.php">Search jobs</a><a
                                                        class="btn btn-link" href="#">Learn more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div>
                        <section class="section-box mt-50 top-companies">
                            <div class="container">
                                <div class="text-center">

                                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top
                                        Recruiters</h2>
                                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">
                                        Discover your next career move, freelance gig, or internship</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="box-swiper mt-50">

                                    <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <?php
                                                require 'constants/db_config.php';
                                                try {
                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();

                                                    foreach ($result as $row) {
                                                        $complogo = $row['avatar'];
                                                        ?>
                                                        <div class="item-5 hover-up wow animate__animated animate__fadeIn">
                                                            <div class="item-logo">
                                                                <a href="companys.php?ref=<?php echo $row['member_no']; ?>">
                                                                    <div class="image">
                                                                        <?php
                                                                        if ($complogo == null) {
                                                                            print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
                                                                        } else {
                                                                            echo '<center><img class="autofit2" alt="image" width="100px" height="100px"  src="data:image/jpeg;base64,' . base64_encode($complogo) . '"/></center>';
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="text-info-right">
                                                                        <h4>
                                                                            <?php echo $row['first_name']; ?>
                                                                        </h4><img alt="star" class="rating-star"
                                                                            src=indexx\themes\jobbox\imgs\template\icons\star.svg><img
                                                                            alt="star" class="rating-star"
                                                                            src=indexx\themes\jobbox\imgs\template\icons\star.svg>
                                                                        <img alt="star" class="rating-star"
                                                                            src=indexx\themes\jobbox\imgs\template\icons\star.svg><img
                                                                            alt="star" class="rating-star"
                                                                            src=indexx\themes\jobbox\imgs\template\icons\star.svg><img
                                                                            alt="star" class="rating-star"
                                                                            src=indexx/themes/jobbox/imgs/template/icons/gray-star.svg>
                                                                        <span class="font-xs color-text-mutted ml-10"><span>
                                                                                (</span><span>2</span><span>) </span></span>
                                                                    </div>
                                                                </a>
                                                                <div class="text-info-bottom mt-5"><span
                                                                        class="font-xs color-text-mutted icon-location location-label"
                                                                        title="New York, US">
                                                                        <?php echo $row['city']; ?>,
                                                                        <?php echo $row['country']; ?>
                                                                    </span><span
                                                                        class="font-xs color-text-mutted float-end mt-5"> 2
                                                                        Opening Jobs </span></div>
                                                            </div>
                                                        </div>
                                                        <?php {

                                                        }

                                                    }
                                                } catch (PDOException $e) {

                                                }

                                                ?>
                                            </div>
                                        </div>
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
                                                                    <a href="blog.php">
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
                                                                                    <div class="info-right-img"><span
                                                                                            class="font-sm font-bold color-brand-1 op-70"><?php echo $row['name']; ?></span><br></div>
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
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
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
    <script>
        window.currencies = {
            "display_big_money": null,
            "billion": "billion",
            "million": "million",
            "is_prefix_symbol": 1,
            "symbol": "$",
            "title": "USD",
            "decimal_separator": ".",
            "thousands_separator": ",",
            "number_after_dot": 0,
            "show_symbol_or_title": true
        };
    </script>
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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-R7X6YBEYYT');
    </script>
</body>

</html>