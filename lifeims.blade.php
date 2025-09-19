<!DOCTYPE html>
<html lang="en">
<head>
@include('frontend.include.head')

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K799Q2K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH23NBCN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X7H5RL"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- header div start -->
@include('frontend.include.header')
@yield('headerInclude')
<!-- header div end -->


<?php 
 if($lifeimsdata){
          
          $about_page=array();
          foreach($lifeimsdata as $about){
            $about_page[]=array(
                      "bannerImage"=>asset('public/images/' . $about->photos),
                      "pageTitle"=>$about->texttype,
                      "subTitle"=>$about->subtitle,
                      "pageUrl"=>$about->pageurl,
                      "textContent"=>$about->textcontent,
                      "aboutContent"=>$about->about,
                      "createdDate"=>$about->created,
                      "modifiedDate"=>$about->modified         
            );
          }     
  }
?>
<!-- video section start (Slider)--> 

<?php if($about_page[0]['pageUrl']=="event-melange"){ ?>
<section class="position-relative melangeBnr mb-4">
<img class="img-fluid" src="<?php echo $about_page[0]['bannerImage']; ?>" alt=""/>
</section>
<?php }else{ ?>	
<section class="position-relative breadcumb-wrapper">
  <div class="container">
    <div class="breadcumb-content position-relative zindex2 text-center wow fadeInUp">
      <h1 class="breadcumb-title text-white font-weight-700 position-relative">Life @ IMS</h1>
    </div>
  </div>
</section>
<?php } ?>

<!-- Hero section end (Slider) -->
<section class="position-relative placement__section py-4">
<div class="container">
<div class="row">

  <div class="col-lg-8 col-md-8 col-sm-12 rankings_accordion">
    <div class="widget-title position-relative mb-4">
    <h2 class="font-weight-500"><?php echo $about_page[0]['pageTitle']; ?> <span class="d-block text-yellow fs-5 mt-1"><?php echo $about_page[0]['subTitle']; ?> </span></h2>
    <hr class="hr">
    </div>

    
     @if($about_page[0]['textContent'])
       
        {!! $about_page[0]['textContent'] !!}
     
      @else

       <h2 class="font-weight-500">Data not found!</h2>

      @endif
  </div>
  
  
 <?php if($about_page[0]['pageUrl']=="event-melange"){ ?>
 
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="sidebar" id="sidebar">
<nav class="sidebar-nav">
<div class="sidebar-listing">
<h4 class="text-blue pb-4">List of Events</h4>
<ul class="metismenu" id="metismenu1">
<li><a href="#headingOne" class="js-scroll-trigger">Group-Fashion Show-Vogue</a></li>
<li><a href="#headingTwo" class="js-scroll-trigger">Group-Battle of Bands</a></li>
<li><a href="#headingThree" class="js-scroll-trigger">Solo-Poetry Competition-Abhivyakti</a></li>
<li><a href="#headingFour" class="js-scroll-trigger">Solo Dance-Soul Rocker </a></li>
<li><a href="#headingFive" class="js-scroll-trigger">Group Dance-Dance Maniacs</a></li>
<li><a href="#headingSix" class="js-scroll-trigger">Solo Singing-Swara</a></li>
<li><a href="#headingSeven" class="js-scroll-trigger">Duet Singing-Sur Sangam</a></li>
<li><a href="#headingEight" class="js-scroll-trigger">Group-Graffiti Art</a></li>
<li><a href="#headingNine" class="js-scroll-trigger">Team of Two-Collage Making-Sangrah</a></li>
<li><a href="#headingTen" class="js-scroll-trigger">Solo-T-Shirt</a></li>
<li><a href="#heading11" class="js-scroll-trigger">Team of Two-Face Painting-Mosaic</a></li>
<li><a href="#heading12" class="js-scroll-trigger">Team of Two-Best out of Waste</a></li>
<li><a href="#heading13" class="js-scroll-trigger">Solo-Rangoli</a></li>
<li><a href="#heading14" class="js-scroll-trigger">Solo-Mehndi</a></li>
<li><a href="#heading15" class="js-scroll-trigger">Solo-Videomaking Competition</a></li>
<li><a href="#heading16" class="js-scroll-trigger">Solo-Beat Boxing</a></li>
<li><a href="#heading17" class="js-scroll-trigger">Solo-Mimicry</a></li>
<li><a href="#heading18" class="js-scroll-trigger">Solo-Stand-up Comedy</a></li>
</ul>
</div>
</nav>
</div>
</div>

<?php }else{ ?>	
  
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="sidebar" id="sidebar">
      <nav class="sidebar-nav">
      <div class="sidebar-listing">
        <h4 class="text-blue pb-4">Life @ IMS</h4>
        <ul class="metismenu" id="metismenu1">
         @if($lifeims_sub)
        @foreach($lifeims_sub as $rows)

<li><a href="{{$rows->pageurl}}">{{$rows->subcategory}}</a></li>

@endforeach
@endif
        </ul>
      </div>
      </nav>
    </div>
  </div>
  <?php } ?>
  
</div>
</div>


</section>







 @include('frontend.include.footer')
 @yield('footerInclude')
 
 <script>
$(function() {
  $("a.js-scroll-trigger").on("click", function() {
    var target = $(this).attr("href");

    $(target).find("button").trigger("click");
  });
});
</script>

 </body>
</html>