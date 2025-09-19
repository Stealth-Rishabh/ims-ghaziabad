

<?php

error_reporting(E_STRICT);

if(isset($_POST["submit"]))

{

include("../admin/includes/connection.php");

//error_reporting(E_ALL & ~E_NOTICE);



extract($_POST);





	



if($submit)

  {

	



  $sql = "INSERT INTO `IntConf2017` (`name`, `affiliation`, `address`, `email`, `mobile`, `category`, `title_paper`, `amt_paid`, `mode_payment`, `bank_name`, `payment_ref_no`, `payment_date`, `coauthors1`, `coauthors2`, `paper_presenter`, `paper_code`) VALUES ('$name', '$affiliation', '$address', '$email', '$mobile', '$category', '$title_paper', '$amt_paid', '$mode_payment', '$bank_name', '$payment_ref_no', '$payment_date', '$coauthors1', '$coauthors2', '$paper_presenter', '$paper_code')"; 

 $rs = mysql_query($sql);

  

 $content = 

	"Name: ".$name. "\r\n". 

	"Affiliation: ".$affiliation."\r\n".

	"Address: ".$address."\r\n".

	"email : ".$email."\r\n".

	"Mobile: ".$mobile."\r\n".

	"Category: ".$category."\r\n".

	"Title Paper: ".$title_paper."\r\n".

	"Amt Paid: ".$amt_paid."\r\n".

	"Category: ".$mode_payment."\r\n".

	"Title Paper: ".$bank_name."\r\n".

	"Amt Paid: ".$payment_ref_no."\r\n".

	"Category: ".$payment_date."\r\n".

	"Co-Authors1: ".$coauthors1."\r\n".

	"Co-Authors2: ".$coauthors2."\r\n".

	"Paper Presenter: ".$paper_presenter."\r\n".

	"Paper Coder: ".$paper_code."\r\n\r\n"; /*."\r\n\r\n".

	

	 

	

	$headers = "From: <support@ims-ghaziabad.ac.in>"."\r\n"."Reply-To: <support@ims-ghaziabad.ac.in>";

	 @mail($to, $subject, $content, $headers, "-support@ims-ghaziabad.ac.in");*/

	 

	 require_once('../class.phpmailer.php');

$email = new PHPMailer();

$email->AddAddress("conf2017@imsgzb.com");

$email->AddCC("sk.dube@imsgzb.com", "pankaj.kumar@imsgzb.com");

//$email->cc("pankaj.kumar@imsgzb.com");

$email->SetFrom("support@ims-ghaziabad.ac.in");

$email->Subject = " IntConf2017 Application Form";

$email->Body = $content;

$email->AddAttachment($path);

$isEmailSent = $email->Send();



  echo "<script>document.location.href='https://www.ims-ghaziabad.ac.in/IntConf2017/thank-you.html';</script>";

}





 



else{

   

    echo "<script>document.location.href='https://www.ims-ghaziabad.ac.in/IntConf2017/registration.php';</script>";

}

}





?>



<!DOCTYPE html>



<html lang="">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>The  International Conference on Industry 4.0: Current Perspectives and Future Directions</title>



<!-- Bootstrap CSS -->



<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/css.css">



  

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->



<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->



<!--[if lt IE 9]>







	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>







	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>







<![endif]-->



<!-- start google analytic -->

<script type="text/javascript">

var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-11398280-9']);

_gaq.push(['_trackPageview']);

(function() {

 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';

 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();

</script>

<!-- Start Alexa Certify Javascript -->

<script type="text/javascript">

_atrk_opts = { atrk_acct:"HbCWg1aAQ700Mu", domain:"ims-ghaziabad.ac.in",dynamic: true};

(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();

</script>

<noscript>

<img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=HbCWg1aAQ700Mu" style="display:none" height="1" width="1" alt="" />

</noscript>

<!-- End Alexa Certify Javascript -->

</head>



<body>

<div id="main"> 

  

  <!-- start header -->

  

  <header>

    <div class="logo"> <img src="images/ims-logo.png"> </div>

    <div class="clr"></div>

  </header>

  

  <!-- end header -->

  

  <div class="banner"> <img src="images/NCICPFD-20-banner.jpg">

    <div class="clr"></div>

  </div>

  

  <!-- start navigation -->

  

  <div class="navigation">

    <nav class="navbar navbar-default" role="navigation"> 

      

      <!-- Brand and toggle get grouped for better mobile display -->

      

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#">Menu</a> </div>

      

      <!-- Collect the nav links, forms, and other content for toggling -->

      

      <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav" style="font-size: 14px;">

          <li><a href="index.html">About The Conference</a></li>

          <li><a href="IMS-ICCG-2017-CFP.pdf" target="_blank">Call For Papers</a></li>

          <li><a href="programme-schedule.html">Programme Schedule</a></li>

          <li><a href="conference-publications.html">Conference Publications</a></li>

          <li><a href="committee.html">Committee</a></li>

          <li><a href="submission-guidelines.html">Submission Guidelines</a></li>

          <li><a href="contact-us.html">Contact Us</a></li>

        </ul>

      </div>

      <!-- /.navbar-collapse --> 

      

    </nav>

    <div class="clr"></div>

  </div>

  

  <!-- end navigation --> 

  

  <!-- start main content -->

  

  <div class="main-content">

    <div class="row">

      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

        <h2>Registration</h2>

        <form name="form" action="" method="post" enctype="multipart/form-data" >

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Name</label>

              <input type="text" name="name" id="name" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $name;?>">

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Affiliation</label>

              <input type="text" name="affiliation" id="affiliation" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $affiliation;?>">

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Address</label>

              <input type="text"  name="address" id="address" class="form-control"  required>

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Email Id</label>

              <input type="email" name="email" class="form-control">

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Mobile No</label>

              <input  type="text" name="mobile" id="mobile"  value= "<?php echo $mobile;?>" onKeyPress="return isNumeric(event)" class="form-control" pattern="\d{10}" title="only 10 digit mobile no" required>

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Category</label>

              <select name="category" class="form-control"  id="position" required>

                <option value="Select">-- Select Category --</option>

                <option value="Academicians">Academicians (India)</option>

                <option value="Research_Scholars">Research Scholars (India)</option>

                <option value="Corporate_Delegates">Corporate Delegates (India)</option>

                <option value="International_Afro_Asian_Countries">International (Afro-Asian Countries)</option>

                <option value="International_Rest_World">International (Rest of the World)</option>

               

              </select>

            </div>

          </div>

           

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <hr style="margin-top:5px;">

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="row">

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <fieldset class="question">

                  <h3 style="text-align:left;">Are You Paper Presenter? &nbsp;&nbsp;<input id="coupon_question" type="radio" name="paper_presenter" value="Yes" />

                  <span class="item-text">Yes</span></h3>

                </fieldset>

              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <h3 style="text-align:left;">Are You Observer/Delegate? &nbsp;&nbsp;<input id="coupon_question1" type="radio" name="paper_presenter" value="1" /> <span>Yes</span></h3>

              </div>

            </div>

            <div class="row">

              <fieldset class="answer">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="form-group">

                      <label>Paper Code</label>

                      <input type="text" name="paper_code" id="paper_code" class="form-control" required pattern="[a-zA-Z ]+" value="<?php echo $coauthors2;?>">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="form-group">

                    <label>Title of the Paper</label>

                    <input  type="text" name="title_paper" id="title_paper" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $title_paper;?>">

                  </div>

                </div>

              </fieldset>

            </div>

          </div>

              

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               <div class="form-group">

                <label>Amount Paid<span class="redColorNew">*</span></label>

                    

               <div class="my">

                 <option value=""> --- Select Discipline --- </option>

               <input type="" name="" placeholder="Amount Paid" class="form-control Select" readonly>

                   <input  type="text" name="amt_paid"  value="INR 2500" class="form-control Academicians" <?php if (isset($discipline)&& $discipline=="Academicians") echo "INR 2500";?> readonly>  

                

              

               

                   <input type="text" name="amt_paid" value="INR 1500" class="form-control Research_Scholars"  <?php if (isset($discipline)&& $discipline=="Research_Scholars") echo "INR 1500";?> readonly>  

                   <input  type="text" name="amt_paid"  value="INR 5000" class="form-control Corporate_Delegates" <?php if (isset($discipline)&& $discipline=="Corporate_Delegates") echo "INR 5000";?>  readonly>  

                    <input  type="text" name="amt_paid" value="USD 100" class="form-control International_Afro_Asian_Countries" <?php if (isset($discipline)&& $discipline=="International_Afro_Asian_Countries") echo "USD 100";?>  readonly>  

                

                   <input type="text" name="amt_paid" value="USD 300" class="form-control International_Rest_World" <?php if (isset($discipline)&& $discipline=="International_Rest_World") echo "USD 300";?> readonly>   

              

              

                    </div>

                    

                  </div>

              </div>

          

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Mode of Payment</label>

              <select name="mode_payment" class="form-control">

                <option value="">-- Select Mode of Payment --</option>

                <option value="NEFT / Other Online Mode">NEFT / Other Online Mode</option>

                <option value="DD">DD</option>

              </select>

            </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <hr style="margin-top:5px;">

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <h3 style="text-align:left;">Bank Details</h3>

            <div class="row">

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group">

                  <label>Bank Name</label>

                 <input type="text" name="bank_name" id="bank_name" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $bank_name;?>">

                </div>

              </div>

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group">

                  <label>DD No / Transaction No</label>

                  <input type="text" name="payment_ref_no" id="payment_ref_no" class="form-control"  value="<?php echo $payment_ref_no;?>" required>

                </div>

              </div>

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group input-group date">

                  <label>Date of Payment</label>

                  <input   type="text" name="payment_date" id="payment_date" class="form-control" value="<?php echo $payment_date;?>" required>

                </div>

              </div>

            </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <hr style="margin-top:5px;">

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <h3 style="text-align:left;">Two Coauthors - Names (if any)</h3>

            <div class="row">

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="form-group">

                  <label> Coauthors - Names</label>

                <input type="text" name="coauthors1" id="coauthors1" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $coauthors1;?>">

                </div>

              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="form-group">

                  <label>Coauthors - Names</label>

                  <input type="text" name="coauthors2" id="coauthors2" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $coauthors2;?>">

                </div>

              </div>

            </div>

          </div>

          



          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="form-group">

              <button class="btn btn btn-success" value="submit" name="submit" id="submit" type="submit"><b><i class="fa fa-send"></i> Send</b></button>

              <button class="btn btn btn-success" value="submit" type="submit"><b><i class="fa fa-refresh"></i> Reset</b></button>

            </div>

          </div>



        </div>

         </form>

      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

        <ul class="sideNav">

          <li><a href="conference-themes.html"><i class="fa fa-picture-o"></i> Conference Themes</a></li>

          <li><a href="important-dates.html"><i class="fa fa-calendar"></i>Important Dates</a></li>

          <li><a href="fee-registration.html"><i class="fa fa-money"></i> Fee &amp; Registration</a></li>

          <li><a href="best-paper-awards.html"><i class="fa fa-trophy"></i> Best Paper Awards</a></li>

          <li><a href="travel-accommodation.html"><i class="fa fa-plane"></i> Travel &amp; Accommodation </a></li>

          <li><a href="conference-faq.html"><i class="fa fa-question-circle"></i> Conference FAQs</a></li>

          <li><a href="sponsors.html"><i class="fa fa-handshake-o"></i> Sponsors</a></li>

          <li><a href="about-ims-ghaziabad.html"><i class="fa fa-user"></i> About IMS Ghaziabad</a></li>

          <li><a href="about-ghaziabad.html"><i class="fa fa-map-marker"></i> About Ghaziabad (Delhi-NCR)</a></li>

        </ul>

        <h2 class="margin-top30">Message from Conference Chair</h2>

        <p>Dear Academicians/Researchers</p>

        <img src="images/jpsharma.jpg" style="width:100%; max-width:80px; float:right; margin-left:10px;">

        <p>Greetings!</p>

        <p>We look forward to your participation with a quality research paper. We do hope that you will find this conference an enriching platform to share your research and receive invaluable inputs from renowned experts and erudite peers.</p>

        <p>With Regards<br>

          <strong>Prof. J. P. Sharma</strong><br>

          Conference Chair<br>

          Director, IMS Ghaziabad</p>

      </div>

    </div>

    <div class="clr"></div>

  </div>

  

  <!-- end main content -->

  

  <div class="incredible-india">

    <h4>Incredible India</h4>

    <div class="incredible-india-hr"></div>

    <img src="images/incredible-india.jpg">

    <div class="clr"></div>

  </div>

  

  <!-- start footer -->

  

  <footer> Copyright &copy; 2019, IMS Ghaziabad, All rights reserved | <a href="#">Privacy Policy</a>

    <div class="clr"></div>

  </footer>

  

  <!-- end footer -->

  

  <div class="clr"></div>

</div>



<script src="js/jquery.js"></script> 

<!-- Bootstrap JavaScript --> 

<script src="js/bootstrap.min.js"></script>



<script type="text/javascript">

  $(".answer").hide();

  $("#coupon_question").click(function() {

      if($(this).is(":checked")) {

          $(".answer").show();

      } else {

          $(".answer").hide();

      }

  });

  $("#coupon_question1").click(function() {

      if($(this).is(":checked")) {

          $(".answer").hide();

      }

  });

</script>



 <script src="js/jquery-1.9.1.min.js"></script>

  <script src="js/bootstrap-datepicker.js"></script>

        <script type="text/javascript">

            // When the document is ready

            $(document).ready(function () {

                

                $("#payment_date").datepicker({

                    format: "dd/mm/yyyy"

                });  

            

            });

        </script>

  <link rel="stylesheet" href="css/datepicker.css">



<script>

 function isAlphabet(evt) 

                      {



                                var keyCode = (evt.which) ? evt.which : evt.keyCode; 

                            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

                             {

                              if( keyCode == 8 || keyCode == 9)

                                    return true;

                                   return false;

                             }

                             else{

                            return true;

                             }

                            

                               

                      }



    function isNumeric(evt) 

                      {



                                var keyCode = (evt.which) ? evt.which : evt.keyCode; 

                            if (keyCode != 43 && keyCode > 31 && (keyCode < 48 || keyCode > 57))

                            {

                               return false;

                            }



                            return true;

                  

                      }

</script>

<!-- end dropdown script -->

<script>

$(document).ready(function() {

    $('#position').bind('change', function() {

        var elements = $('div.my').children();

    elements.hide(); // hide all the elements

    var sels = elements.find('select');

    sels.removeAttr('required');

    sels.removeAttr('name');

        var value = $(this).val();



        if (value.length) { // if somethings' selected

      var sb = elements.filter('.' + value);

      sb.show(); // show the ones we want

      sb.find('select').attr({required: "required", name: "category"});

        }

    }).trigger('change');

    

    $('.category').bind('change', function() {

        var elements = $('div.category').children().hide(); // hide all the elements

        var value = $(this).val();



        if (value.length) { // if somethings' selected

            elements.filter('.' + value).show(); // show the ones we want

        }

    }).trigger('change');





});

</script>



</body>

</html>