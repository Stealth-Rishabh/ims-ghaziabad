<?php include "admin/dbc.php";
$geturl = $_GET["url"];
($sqlblog = mysqli_query($conn, "select * from tbl_blog where url='$geturl'")) or
    die(mysqli_error());
$rowblog = mysqli_fetch_assoc($sqlblog);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/baseurl.php' ?>
    <meta charset="utf-8">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $rowblog['meta_title']; ?></title>
      <meta name="description" content="<?php echo $rowblog['meta_description']; ?>">
      <meta name="keywords" content="<?php echo $rowblog['meta_keyword']; ?>">
      <meta name="author" content="IMS Ghaziabad - Institute of Management Studies Ghaziabad">
    <link rel="canonical" href="https://www.ims-ghaziabad.ac.in/blog/<?php echo $geturl; ?>" />
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
        
        .checkNow tr td a {
                color: orangered;
                    font-size: 14px;
                    font-weight: 400;
        }
        .table-bordered {
    border-collapse: collapse;
    width: 100%;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #000; /* black border */
    padding: 12px;
    text-align: left;
}
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
        { "@context": "https://schema.org", "@type": "CollegeOrUniversity", "name": "IMS Ghaziabad", "alternateName": "Institute of Management Studies Ghaziabad", "url": "", "logo": "public/frontend/images/IMS-logo.webp", "contactPoint": { "@type": "ContactPoint",
        "telephone": "1800-102-4170", "contactType": "customer service", "areaServed": "IN", "availableLanguage": ["en","Hindi"] }, "sameAs": [ "https://www.facebook.com/imsghzb", "https://twitter.com/IMSGhaziabad", "https://www.instagram.com/imsghaziabad/",
        "https://www.youtube.com/user/TheIMSGhaziabad", "https://www.linkedin.com/school/imsghaziabad/" ] }
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
    .blog-three-column .news-block .news-inner-box {
    position: relative;
    display: block;
    margin-bottom: 2rem;
    padding: 10px;
    border: 1px solid #002147;
}
.blog-three-column .news-block .news-inner-box .lower-content {
    padding: 1rem;
}
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
        <section class="position-relative breadcumb-wrapper" style="background-image: url(public/images/aboutcumbBnr.jpg)">
            <div class="container">
                <div class="breadcumb-content position-relative zindex2 text-center wow fadeInUp">
                    <h1 class="breadcumb-title text-white font-weight-700 position-relative"></h1>
                </div>
            </div>
        </section>


        <!-- Hero section end (Slider) -->
<section class="position-relative blog-three-column py-5">
    <div class="container">
        <div class="row">
               <div class="widget-title position-relative mb-4">    
                     <h1 class="font-weight-500"><?php echo $rowblog['title']; ?></h1>
                     <hr class="hr">
                </div>
                <div><?php echo $rowblog['description']; ?></div>
        </div>
    </div>    
</section>              
        <?php include "include/footer.php"; ?>
</body>

</html>