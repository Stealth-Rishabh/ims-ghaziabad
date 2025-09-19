<!DOCTYPE html>
<html lang="en">
 <?php include 'admin/dbc.php'; ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hylimart">
  <meta name="keywords" content="Hylimart">
  <meta name="author" content="Hylimart">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>HYLIMART</title>
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/images/favicon.png">
  <meta name="theme-color" content="#ff4c3b">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Hylimart">
  <meta name="msapplication-TileImage" content="assets/images/favicon.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Google font-->
  <link href="css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css">

  <!-- slick css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">

  <!-- iconly css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconly.css">

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css">

</head>

<body>
  <!-- header start -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/side-menu.php'; ?>
  <!-- header end -->
  <!-- category start -->
  <br>
  <section class="category-section top-space">
    <ul class="category-slide">
        <?php  
            $sqlproducttype=mysqli_query($conn,"select * from tbl_producttype ORDER BY id desc")or die(mysqli_error());
            while($row=mysqli_fetch_assoc($sqlproducttype))
            {extract($row)
            ?>
             <li>
                <a href="" class="category-box">
                  <img src="media/producttype/<?php echo $image;?>" class="img-fluid" alt="">
                  <h4><?php echo $name;?></h4>
                </a>
              </li>
            <?php }?>   
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/41lcI5qrYlL.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Shirt</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/61Y+m0ij4nL._UL1500_.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Trouser</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/41o6KJTbNaS.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Kurta</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/613ZEHso5ML._UL1500_.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Shoes</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/61QV2vFHp4L._UL1500_.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Heels</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/81AuNlhWD1L._UL1500_.jpg" class="img-fluid" alt="">-->
      <!--    <h4>Jeans</h4>-->
      <!--  </a>-->
      <!--</li>-->
      <!-- <li>-->
      <!--  <a href="" class="category-box">-->
      <!--    <img src="assets/images/41zvKQWEeHL.jpg" class="img-fluid" alt="">-->
      <!--    <h4>T-Shirt</h4>-->
      <!--  </a>-->
      <!--</li>-->
    </ul>
  </section>
  <div class="divider t-12 b-20"></div>
  <!-- category end -->


  <!-- home slider start -->
  <section class="pt-0 home-section ratio_55">
    <div class="home-slider slick-default theme-dots">
      <div>
        <div class="slider-box">
          <img src="assets/images/banner/1.png" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/banner/2.png" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/banner/3.png" class="img-fluid bg-img" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- home slider end -->

    <!-- kids corner section start -->
  <section class="pt-0 product-slider-section overflow-hidden">
    <div class="title-section px-15">
      <h2>Men's Shirt ➤</h2>
    </div>
    <div class="product-slider slick-default pl-15">
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71u5lwLC0oL._UL1440_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Blue Shirt</h4>
            </a>
            <div class="price">
                <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/91rjFqNATsL._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Blue Denim Shirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/61-Z7JDfLaL._UL1440_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>White Shirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/719vxs12L8L._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Black Shirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kids corner section end -->
  <div class="divider"></div>
  <!-- home slider start -->
  <section class="pt-0 home-section ratio_55">
    <div class="home-slider slick-default theme-dots">
      <div>
        <div class="slider-box">
          <img src="assets/images/Printed-Graphic-T-shirt-Banner-For-Print-New-India-1-1024x441-1.png" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/Couple-t-shirt-Banner.png" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/All-TShirts-Banner-Men--2--1589356452.webp" class="img-fluid bg-img" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- home slider end -->

    <!-- kids corner section start -->
  <section class="pt-0 product-slider-section overflow-hidden">
    <div class="title-section px-15">
      <h2>Men's Trouser ➤</h2>
    </div>
    <div class="product-slider slick-default pl-15">
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71mPQJaw85L._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Trouser</h4>
            </a>
            <div class="price">
                <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71Takq8g4LL._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Trouser</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71rQD1ndKpL._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Trouser</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71Eqxc7aZeL._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Trouser</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kids corner section end -->
 <div class="divider"></div>
    <!-- kids corner section start -->
  <section class="pt-0 product-slider-section overflow-hidden">
    <div class="title-section px-15">
      <h2>Kurta Pajama ➤</h2>
    </div>
    <div class="product-slider slick-default pl-15">
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/51JLqUX9rpL.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Kurta Pajama</h4>
            </a>
            <div class="price">
                <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/51UbA-mz-RL.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Kurta Pajama</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/51EVJqWNDOL.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Kurta Pajma</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/5150NmSFlXL.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Kurta Pajma</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kids corner section end -->
 <div class="divider"></div>
  <!-- brands section start -->
  <section class="brand-section pl-15">
    <h2 class="title brandd">Shop by Brand</h2>
    <div class="brand-slider slick-default">
      <div>
        <a class="brand-box" href="">
          <img src="assets/images/Levi's_logo.svg.png" class="img-fluid" style="height: 43px;" alt="">
        </a>
      </div>
      <div>
        <a class="brand-box" href="">
          <img src="assets/images/Bata.svg.png" class="img-fluid" style="height: 43px;" alt="">
        </a>
      </div>
      <div>
        <a class="brand-box" href="">
          <img src="assets/images/Calvin-Klein-logo.png" style="height: 43px;" class="img-fluid" alt="">
        </a>
      </div>
      <div>
        <a class="brand-box" href="">
          <img src="assets/images/peter-england-logo-CAA89E9287-seeklogo.com.png" class="img-fluid" alt="" style="height: 43px;">
        </a>
      </div>
      <div>
        <a class="brand-box" href="">
          <img src="assets/images/Adidas_Logo.svg.webp" class="img-fluid" alt="" style="height: 43px;">
        </a>
      </div>
    </div>
  </section>
  <div class="divider"></div>
  <!-- brands section end -->


    <!-- kids corner section start -->
  <section class="pt-0 product-slider-section overflow-hidden">
    <div class="title-section px-15">
      <h2>Sport Shoes ➤</h2>
    </div>
    <div class="product-slider slick-default pl-15">
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/6138Uxu+hvL._UL1440_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Sport Shoes</h4>
            </a>
            <div class="price">
                <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/61x5GDMIp7L._UL1440_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Sport Shoes</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/71ZRQtpLBLL._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Sport Shoes</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/313YI0W94gL.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Sport Shoes</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kids corner section end -->
    <div class="divider"></div>
  <!-- home slider start -->
  <section class="pt-0 home-section ratio_55">
    <div class="home-slider slick-default theme-dots">
      <div>
        <div class="slider-box">
          <img src="assets/images/c852e508-8f12-4ecd-b591-e245cd2971f0.__CR0,0,970,600_PT0_SX970_V1___.jpg" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/pngtree-outdoor-hiking-shoes-banner-pictures-image_877424.jpg" class="img-fluid bg-img" alt="">
        </div>
      </div>
       <div>
        <div class="slider-box">
          <img src="assets/images/world-of-gaming-jeans-banners.jpg" class="img-fluid bg-img" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- home slider end -->
    <!-- kids corner section start -->
  <section class="pt-0 product-slider-section overflow-hidden">
    <div class="title-section px-15">
      <h2>T-Shirt ➤</h2>
    </div>
    <div class="product-slider slick-default pl-15">
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/51LHTm2xVVL._UL1100_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Tshirt</h4>
            </a>
            <div class="price">
                <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/61KQyNHOcyL._UL1284_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Tshirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/61tLl2n1t4L._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Tshirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="product-box ratio_square">
          <div class="img-part">
            <a href=""><img src="assets/images/91TxsKZ6f9L._UL1500_.jpg" alt="" class="img-fluid bg-img"></a>
            <div class="wishlist-btn">
              <i class="iconly-Heart icli"></i>
              <i class="iconly-Heart icbo"></i>
              <div class="effect-group">
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
                <span class="effect"></span>
              </div>
            </div>
          </div>
          <div class="product-content">
            <ul class="ratings">
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo"></i></li>
              <li><i class="iconly-Star icbo empty"></i></li>
            </ul>
            <a href="">
              <h4>Tshirt</h4>
            </a>
            <div class="price">
              <h4>₹ 400 <del>₹ 500</del><span>10%</span></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- kids corner section end -->
  <!-- panel space start -->
  <section class="panel-space"></section>
  <!-- panel space end -->


  <!-- bottom panel start -->
  <?php include 'includes/footer-menu.php'; ?>
  <!-- bottom panel end -->

  <!-- latest jquery-->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Slick js-->
  <script src="assets/js/slick.js"></script>

  <!-- Slick js-->
  <script src="assets/js/homescreen-popup.js"></script>

  <!-- timer js-->
  <script src="assets/js/timer.js"></script>

  <!-- offcanvas modal js -->
  <script src="assets/js/offcanvas-popup.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>

</body>

</html>