<!DOCTYPE html>
<html lang="en">
    <?php
    include 'constants/settings.php';
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
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name=viewport>
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
        <script type="text/javascript">
		function update(str) {

			if (document.getElementById('mymail').value == "") {
				alert("Please enter your email");

			} else {
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

				xmlhttp.open("GET", "app/reset-pw.php?opt=" + str, true);
				xmlhttp.send();
			}

		}

		function reset_text() {
			document.getElementById('mymail').value = "";
			document.getElementById("data").innerHTML = "";
		}

	</script>
    <style>
        .page_speed_1733466346 {
            display: none;
        }

        .page_speed_1387840576 {
            height: 16px
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
        <section class="pt-100 login-register">
            <div class="container">
                <div class="row login-register-cover">
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="text-center">
                            <p class="font-sm text-brand-2">Welcome Back!</p>
                            <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                            <p class="font-sm text-muted mb-30">Sign in to continue.</p>
                        </div>
                        
                        <form name="frm" action="app/auth.php" method="POST" autocomplete="off"><input type=hidden name=_token
                                value="3BXDSptAGif8nRK1twdvWrXLBNHychKcTFDuLATu" autocomplete="off">
                                <?php
								include 'constants/check_reply.php';	
								?>
                            <div class="form-group"> 
                                <label>Email Address</label>
                                <input class="form-control" placeholder="Enter your email address" name="email" required type="text"> 
                                </div></br>
                                <div class="form-group"> 
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter your password" name="password" required type="password"> 
                                </div></br>
                                
                            <div class="mb-3"><button class="btn btn-brand-1 hover-up w-100" type=submit> Login
                                </button>
                            </div>
                            <div class="text-muted text-center"> Don&#039;t have an account? <a
                                    href="eregister.php">Sign Up</a></div>
                        </form>
                        
                        <div class="text-center text-muted"></div>
                    </div>
                    <div class="img-1 d-none d-lg-block"><img class="shape-1"
                            src=indexx\storage\autho\img-1.png alt=""></div>
                    <div class="img-2"><img src=indexx\storage\autho\img-2.png alt="">
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
    <script> jQuery(document).ready(function () { 'use strict'; $("form").each(function () { $(this).validate({ errorElement: 'div', errorClass: 'invalid-feedback', errorPlacement: function (error, element) { if (element.closest('[data-bb-toggle="tree-checkboxes"]').length) { error.insertAfter(element.closest('[data-bb-toggle="tree-checkboxes"]')); } else if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') { error.insertAfter(element.parent()); } else { error.insertAfter(element); } }, highlight: function (element) { $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid'); }, unhighlight: function (element) { $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid'); }, success: function (element) { $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid'); }, focusInvalid: false, rules: JSON.parse('{\u0022email\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The email field is required.\u0022,true],[\u0022String\u0022,[],\u0022The email must be a string.\u0022,false],[\u0022Email\u0022,[],\u0022The email must be a valid email address.\u0022,false]]},\u0022password\u0022:{\u0022laravelValidation\u0022:[[\u0022Required\u0022,[],\u0022The password field is required.\u0022,true],[\u0022String\u0022,[],\u0022The password must be a string.\u0022,false]]}}') }); }); });</script>
    <script async defer src=https://www.googletagmanager.com/gtag/js?id=G-R7X6YBEYYT></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-R7X6YBEYYT');</script>
</body>

</html>