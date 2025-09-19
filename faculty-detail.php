<!DOCTYPE html>
<html lang="en">
<?php
include "admin/dbc.php";
$geturl = $_GET["url"];

$sqlfaqmember=mysqli_query($conn,"select * from tbl_faculty_member where url='$geturl'")or die(mysqli_error());
    $rowfaqmember=mysqli_fetch_assoc($sqlfaqmember);
    $titleid=$rowfaqmember['faculty_id'];
    $memberid=$rowfaqmember["id"];
 
$sqlfaqtitle=mysqli_query($conn,"select * from tbl_faculty_title where id='$titleid'")or die(mysqli_error());
    $rowfaqtitle=mysqli_fetch_assoc($sqlfaqtitle);
?>

    <head>
        <?php include 'include/baseurl.php' ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php echo $rowfaqmember["name"]; ?> - <?php echo $rowfaqtitle['title'] ?> | IMS Ghaziabad</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="canonical" href="https://ims-ghaziabad.ac.in/faculty/marketing" />
        <meta name="google-site-verification" content="B7GMgmL214oZmqNA26aHwQ2k8z-24IblhbDd0xOWns0" />
        <link rel="shortcut icon" type="image/x-icon" href="public/frontend/images/favicon.png" defer>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <link href="public/frontend/css/style.css" rel="stylesheet" defer>
        <script src="public/frontend/js/jquery.min.js" async></script>
        <!-- put jquery before owl carousel -->
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- owl carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            .wsmenu-list ul.sub-menu li.active{background-color: #e9b320;}
            .wsmenu-list ul.sub-menu li.active a{color: #fff !important;}
        </style>

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5X7H5RL');
        </script>
        <!-- End Google Tag Manager -->

        <!-- Global site tag (gtag.js) - Google Ads: 866013942 -->
        <script src="https://www.googletagmanager.com/gtag/js?id=AW-866013942" async></script>
        <script>
            window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'AW-866013942');
        </script>

        <!-- Google tag (gtag.js) -->
        <script src="https://www.googletagmanager.com/gtag/js?id=G-27YDXX2STH" async></script>
        <script>
            window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'G-27YDXX2STH');
        </script>

        <script type="application/ld+json">
            { "@context": "https://schema.org", "@type": "CollegeOrUniversity", "name": "IMS Ghaziabad", "alternateName": "Institute of Management Studies Ghaziabad", "url": "https://www.ims-ghaziabad.ac.in/", "logo": "https://www.ims-ghaziabad.ac.in/public/frontend/images/IMS-logo.webp",
            "contactPoint": { "@type": "ContactPoint", "telephone": "1800-102-4170", "contactType": "customer service", "areaServed": "IN", "availableLanguage": ["en","Hindi"] }, "sameAs": [ "https://www.facebook.com/imsghzb", "https://twitter.com/IMSGhaziabad",
            "https://www.instagram.com/imsghaziabad/", "https://www.youtube.com/user/TheIMSGhaziabad", "https://www.linkedin.com/school/imsghaziabad/" ] }
        </script>

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PH23NBCN');
        </script>
        <!-- End Google Tag Manager -->

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5K799Q2K');
        </script>
        <!-- End Google Tag Manager -->
        <style>
            .more {
            display: block !important;
        }
        .post .read_btn-box {
            display: none;
        }
        .viewBtn{   padding: 10px !important;   font-size: 14px !important;   float: right !important;   }
        </style>
    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K799Q2K" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH23NBCN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X7H5RL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- header div start -->
        <?php include "include/header.php"; ?>
            <!-- header div end -->

            <!-- Hero section end (Slider) -->
            <section class="position-relative breadcumb-wrapper" style="background-image: url(public/images/staff-banner.png)">
                <div class="container">
                    <div class="breadcumb-content position-relative zindex2 text-center wow fadeInUp">
                        <h1 class="breadcumb-title text-white font-weight-700 position-relative"><?php echo $rowfaqtitle['title'] ?> Faculty</h1>
                    </div>
                </div>
            </section>


            <!-- Hero section end (Slider) -->
            <section class="position-relative placement__section py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-title position-relative mb-4">
                                <h2 class="font-weight-500 text-capitalize"><?php echo $rowfaqtitle['title'] ?></h2>
                                <hr class="hr">
                            </div>

                            <div class="faculty-box facultie-details">
                                <div class="row mt-5">
                                    <div class="col-lg-4 col-md-4 text-center">
                                        <div class="sidebar" id="sidebar">
                                            <div class="faculty_item position-relative py-5 px-3 ">
                                                <div class="faculty-img bdr-ripple">
                                                    <img class="img-fluid" src="media/faculty/<?php echo $rowfaqmember["image"]; ?>" alt="<?php echo $rowfaqmember["name"]; ?>" />
                                                </div>

                                                <div class="faculty-content mt-4">
                                                    <h4 class="font-weight-500 mb-1 text-yellow fs-4"><?php echo $rowfaqmember["name"]; ?></h4>
                                                    <p><?php echo $rowfaqmember["designation"]; ?></p>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-8 col-md-12">
                                        <div class="content-block-extra">
                                            <article class="post">


                                                <h6>Profile</h6>
                                                <p><?php echo $rowfaqmember["description"]; ?></p>

                                            </article>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <h4 class="fs-4 mt-3">Quick links of <?php echo $rowfaqmember["name"]; ?> Research Papers published</h4><br><br>
                            
                <?php  
                $sql=mysqli_query($conn,"select * from tbl_research_paper WHERE FIND_IN_SET('$memberid', faculty_id) ORDER BY year desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {extract($row);
                $facultyid=$row['faculty_id'];
                $facultyidAry = explode(',',$facultyid);
                ?>  
                            <section class="position-relative post__section py-4">
                                <div class="container position-relative zindex2">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                                            <div>
                                                <p><b style="color:#01152c">
                                                    <?php
                                                            $isFirst = true; // Initialize a flag to track the first iteration
                        
                                                            // Assuming $degreeididAry is an array containing degree IDs (2, 3, 4)
                                                            foreach ($facultyidAry as $facultyid) {
                                                                $facultyid = mysqli_real_escape_string($conn, $facultyid);
                                                                $sqlfaculty = mysqli_query($conn, "SELECT * FROM tbl_faculty_member WHERE id='$facultyid'") or die(mysqli_error($conn));
                        
                                                                if ($rowfaculty = mysqli_fetch_assoc($sqlfaculty)) {
                                                                    if (!$isFirst) {
                                                                        echo ', ';
                                                                    } else {
                                                                        $isFirst = false; 
                                                                    }
                                                                    echo '<span>' . htmlspecialchars($rowfaculty['name']) . '</span>';
                                                                }
                                                            }
                                                    ?>
                                                </b></p><hr><br>
                                                <p><b><?php echo $other_faculty; ?></b></p>
                                                <p><b>Year : <?php echo $year; ?> , Category : <?php echo $indexing; ?></b></p>
                                                <p><b><?php echo $name_paper; ?></b></p>
                                                <a class="common_btn viewBtn" href="<?php echo $link; ?>" target="_blank"><span>Visit Now</span></a>
                                                <p><?php echo $name_journal; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> <br>
                            
                <?php }?>             
                            
                        </div>
                    </div>
                </div>
            </section>
            <?php include "include/footer.php"; ?>
    </body>

</html>