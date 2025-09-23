<!DOCTYPE html>
<html lang="en">
<?php include 'admin/dbc.php'; ?>

<head>
    <?php include 'include/baseurl.php' ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs | IMS Ghaziabad</title>
    <meta name="keywords" content="Blogs | IMS Ghaziabad" />
    <meta name="description" content="Blogs | IMS Ghaziabad" />

    <link rel="canonical" href="https://www.ims-ghaziabad.ac.in/blog" />
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
        .wsmenu-list ul.sub-menu li.active {
            background-color: #e9b320;
        }

        .wsmenu-list ul.sub-menu li.active a {
            color: #fff !important;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5X7H5RL');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Ads: 866013942 -->
    <script src="https://www.googletagmanager.com/gtag/js?id=AW-866013942" async></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-866013942');
    </script>

    <!-- Google tag (gtag.js) -->
    <script src="https://www.googletagmanager.com/gtag/js?id=G-27YDXX2STH" async></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-27YDXX2STH');
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollegeOrUniversity",
            "name": "IMS Ghaziabad",
            "alternateName": "Institute of Management Studies Ghaziabad",
            "url": "",
            "logo": "public/frontend/images/IMS-logo.webp",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "1800-102-4170",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": ["en", "Hindi"]
            },
            "sameAs": ["https://www.facebook.com/imsghzb", "https://twitter.com/IMSGhaziabad", "https://www.instagram.com/imsghaziabad/",
                "https://www.youtube.com/user/TheIMSGhaziabad", "https://www.linkedin.com/school/imsghaziabad/"
            ]
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PH23NBCN');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5K799Q2K');
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
            height: 100%; /* Make cards equal height */
        }

        .blog-three-column .news-block .news-inner-box .lower-content {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            height: 100%; /* Use full height of card */
            justify-content: space-between; /* Distribute content evenly */
        }

        /* Title styling - limit to 3 lines */
        .blog-three-column .news-block .news-inner-box .lower-content h1 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.4;
            min-height: 4.2em; /* 3 lines * 1.4 line-height */
            margin-bottom: 1rem;
            flex-shrink: 0; /* Don't shrink the title */
        }

        /* Fallback for browsers that don't support line-clamp */
        @supports not (-webkit-line-clamp: 3) {
            .blog-three-column .news-block .news-inner-box .lower-content h1 {
                max-height: 4.2em;
                overflow: hidden;
                position: relative;
            }
            .blog-three-column .news-block .news-inner-box .lower-content h1:after {
                content: "...";
                position: absolute;
                bottom: 0;
                right: 0;
                background: white;
                padding-left: 5px;
            }
        }

        .blog-three-column .news-block .news-inner-box .lower-content h1 a {
            color: #002147;
            text-decoration: none;
            font-weight: 600;
        }

        .blog-three-column .news-block .news-inner-box .lower-content h1 a:hover {
            color: #e9b320;
        }

        /* Description styling - fixed height, no extra margin */
        .blog-three-column .news-block .news-inner-box .lower-content p {
            flex-grow: 1;
            margin-bottom: 0; /* Remove bottom margin */
            display: flex;
            flex-direction: column;
        }

        .blog-three-column .news-block .news-inner-box .lower-content p div {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.5;
            min-height: 6em; /* 4 lines * 1.5 line-height */
            color: #666;
            flex-grow: 1; /* Take available space */
        }

        /* Fallback for browsers that don't support line-clamp */
        @supports not (-webkit-line-clamp: 4) {
            .blog-three-column .news-block .news-inner-box .lower-content p div {
                max-height: 6em;
                overflow: hidden;
                position: relative;
            }
            .blog-three-column .news-block .news-inner-box .lower-content p div:after {
                content: "...";
                position: absolute;
                bottom: 0;
                right: 0;
                background: white;
                padding-left: 5px;
            }
        }

        /* Button styling - always at bottom, no extra spacing */
        .blog-three-column .news-block .news-inner-box .lower-content .common_btn-box {
            margin-top: 1rem; /* Consistent spacing from description */
            padding-top: 0; /* Remove extra padding */
            flex-shrink: 0; /* Don't shrink the button */
        }

        .page-item.active .page-link {
            background-color: #002147 !important;
            border-color: #002147 !important;
        }

        .page-link {
            color: #002147;
            font-weight: 400;
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
    <?php include 'include/header.php' ?>
    <!-- header div end -->

    <!-- Hero section end (Slider) -->
    <section class="position-relative breadcumb-wrapper" style="background-image: url(public/images/aboutcumbBnr.jpg)">
        <div class="container">
            <div class="breadcumb-content position-relative zindex2 text-center wow fadeInUp">
                <h1 class="breadcumb-title text-white font-weight-700 position-relative">Blogs</h1>
            </div>
        </div>
    </section>


    <!-- Hero section end (Slider) -->
    <?php
// Define how many results you want per page
$results_per_page = 6;

// Find out the number of results stored in database
$result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM tbl_blog WHERE status='1'");
$row = mysqli_fetch_assoc($result);
$total_results = $row['total'];

// Determine number of total pages available
$total_pages = ceil($total_results / $results_per_page);

// Determine which page number visitor is currently on
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// Determine the SQL LIMIT starting number
$starting_limit = ($page - 1) * $results_per_page;

// Fetch the selected results from database
$sql = mysqli_query($conn, "SELECT * FROM tbl_blog WHERE status='1' ORDER BY id DESC LIMIT $starting_limit, $results_per_page") or die(mysqli_error());
?>

<section class="position-relative blog-three-column py-5">
    <div class="container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($sql)) {
                extract($row);
                $dec = substr($row['description'], 0, 190);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 news-block translateY">
                    <div class="news-inner-box">
                        <div class="blog__image-box">
                            <figure class="image">
                                <a href="blog/<?php echo $url; ?>">
                                    <div class="shapes__blob-Mask position-relative">
                                        <div class="blob__Mask position-relative">
                                            <img class="img-fluid" src="media/blog/<?php echo $image; ?>" title="Best PGDM Placements in Delhi NCR at IMS Ghaziabad" alt="<?php echo $title; ?>">
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h1 class="mb-2 fs-5"><a class="text-blue" href="blog/<?php echo $url; ?>"><?php echo $title; ?></a></h1>
                            <p>
                            <div> <?php echo $dec; ?> ... </div>
                            </p>
                            <div class="common_btn-box mt-4">
                                <center><a class="common_btn" style="width: 100%;" href="blog/<?php echo $url; ?>"><span>Read More &gt;&gt;</span></a></center>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Pagination links -->
       <!-- Pagination links -->
<div class="row mt-4">
    <div class="col-12 text-center">
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="/blog/page/<?php echo $page - 1; ?>">&laquo; Prev</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                        <a class="page-link" href="/blog/page/<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $total_pages): ?>
                    <li class="page-item">
                        <a class="page-link" href="/blog/page/<?php echo $page + 1; ?>">Next &raquo;</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>


    </div>
</section>

    <?php include 'include/footer.php' ?>
</body>

</html>