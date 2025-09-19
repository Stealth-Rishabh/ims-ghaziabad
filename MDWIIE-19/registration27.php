<?php

error_reporting(E_STRICT);

if(isset($_POST["submit"]))

{

include("../admin/includes/connection.php");

//error_reporting(E_ALL & ~E_NOTICE);



extract($_POST);





	



if($submit)

  {

   $sql = "INSERT INTO `IntConf2017` (`name`, `affiliation`, `address`, `email`, `mobile`, `category`, `title_paper`, `amt_paid`, `mode_payment`, `bank_name`, `payment_ref_no`, `payment_date`, `coauthors1`, `coauthors2`, `paper_presenter`, `paper_code`, `do_coauthors`, `certi_require1`, `certi_require2`, `currency`) VALUES ('$name', '$affiliation', '$address', '$email', '$mobile', '$category', '$title_paper', '$amt_paid', '$mode_payment', '$bank_name', '$payment_ref_no', '$payment_date', '$coauthors1', '$coauthors2', '$presenter', '$paper_code', '$do_coauthors','$certi_require1','$certi_require2','$currency')"; 

 $rs = mysql_query($sql);

  
$mesasge='<p>Dear Participant / Observer / Delegate <br> Greetings from IMS Ghaziabad !!!<br>
We thank you for registering online on our website for International Conference on Corporate Governance: Retrospect and Prospects (ICCG IMSGZB 2017), February 11-12, 2017, at Radisson Blu Hotel, kaushambi, Delhi NCR India.<br>Please check the details entered by your kind self.</p>';
$mesasge.='<table><tbody> <tr> <td><b>Name</b></td><td>'.$name.'</td> </tr>';
$mesasge.='<tr><td><b>Affiliation</b></td><td>'.$affiliation.'</td> </tr>';
$mesasge.='<tr><td><b>Address</b></td><td>'.$address.'</td></tr>  ';
$mesasge.='<tr><td><b>Email</b></td><td>'.$email.'</td> </tr>';
$mesasge.='<tr><td><b>Mobile</b></td><td>'.$mobile.'</td> </tr>';
$mesasge.='<tr><td><b>Category</b></td> <td>'.$category.'</td></tr>';
$mesasge.='<tr><td><b>Title Paper</b></td><td>'.$title_paper.'</td> </tr>';
$mesasge.='<tr><td><b>Co-author 1 Name</b></td> <td>'.$coauthors1.'</td></tr>';
$mesasge.='<tr> <td><b>Co-author 2 Name</b></td> <td>'.$coauthors2.'</td></tr>';
$mesasge.='<tr><td><b>Currency</b></td>  <td>'.INR.'</td></tr>';
$mesasge.='<tr> <td><b>Amount Paid</b></td> <td>'.$amt_paid.'</td></tr>';
$mesasge.='<tr> <td><b>Mode of Payment</b></td> <td>'.$mode_payment.'</td> </tr>';
$mesasge.='<tr> <td><b>Bank Name</b></td> <td>'.$bank_name.'</td></tr>';
$mesasge.='<tr> <td><b>DD No / Transaction No </b></td>  <td>'.$payment_ref_no.'</td></tr>';
$mesasge.='<tr><td><b>Date of Payment</b></td><td>'.$payment_date.'</td> </tr></tbody></table>';
$mesasge.='<p><b>Note: This is an automated response. Please do not reply to this mail. In case of any discrepancy, kindly contact the Conference Conveners at conf2017@imsgzb.com or Call Dr. S K Dube- (Convener) :+91-9212162428, Dr. Pankaj K Agarwal (Co-Convener): +91-9839711444.</b></p>';

$mesasge.='<p>For all Updates, kindly refer to our website: </p>';


$mesasge.='<p>With Best Regards, <br>Team IntConf2017<br>IMS Ghaziabad<br></p>';   

$to = "conf2017@imsgzb.com , sk.dube@imsgzb.com";

$subject = "IntConf2017 Application Form (IMS Website)";
$txt = "Hello world!";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@ims-ghaziabad.ac.in>' . "\r\n";
$headers .= 'Cc: '.$email. "\r\n";
if(mail($to,$subject,$mesasge,$headers))
{

  echo "<script>document.location.href='https://www.ims-ghaziabad.ac.in/IntConf2017/thank-you.html';</script>";

}
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

<title>The International Conference on “Marketing in the Digital World: Impact on the Indian Economy”</title>



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

  <div class="banner"> <img src="images/marketing-banner.jpg">

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
        
		<p>An early bird discount of 20% will be given to authors of accepted papers/participants, in case registration is done by January 01, 2016.</p>
        
        <p>All fields are mandatory *</p>
        
        <form name="form" action="" method="post" enctype="multipart/form-data" >

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Name *</label>

              <input type="text" name="name" id="name" class="form-control"  onKeyPress="return isAlphabetWithDot(event)"  value="<?php echo $name;?>" required >

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Affiliation *</label>

              <input type="text" name="affiliation" id="affiliation" class="form-control"   required  value="<?php echo $affiliation;?>">

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Address *</label>

              <input type="text"  name="address" id="address" class="form-control"  required>

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Email Id *</label>

              <input type="email" name="email" class="form-control">

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Mobile No *</label>

              <input  type="text" name="mobile" id="mobile"  value= "<?php echo $mobile;?>" onKeyPress="return isNumeric(event)" class="form-control" pattern="\d{10}" title="only 10 digit mobile no" required>

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="form-group">

              <label>Category *</label>

              <select name="category" class="form-control"  required>

                <option value="Select">-- Select Category --</option>

                <option value="Academicians">Academicians (India) -  INR 2500</option>

                <option value="Research_Scholars">Research Scholars (India) - INR 1500</option>

                <option value="Corporate_Delegates">Corporate Delegates (India) -  INR 5000</option>

                <option value="International_Afro_Asian_Countries">International (Afro-Asian Countries) - USD 100</option>

                <option value="International_Rest_World">International (Rest of the World) -  USD 300</option>

               

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

                  <h3 style="text-align:left;">Are You Paper Presenter? &nbsp;&nbsp;<input id="coupon_question" type="radio" name="presenter" value="Paper Presenter" />

                  <span class="item-text">Yes</span></h3>

                </fieldset>

              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <h3 style="text-align:left;">Are You Observer/Delegate? &nbsp;&nbsp;<input id="coupon_question1" type="radio" name="presenter" value="Observer/Delegate"  /> <span>Yes</span></h3>

              </div>

            </div>

            <div class="row">

              <fieldset class="answer">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="form-group">

                      <label>Paper Code *</label>

                      <input type="text" name="paper_code" id="paper_code"  " value="<?php echo $paper_code;?>" palceholder="For eg. MKTCG01" class="form-control" >

                  </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                  <div class="form-group">

                    <label>Title of the Paper *</label>

                    <input  type="text" name="title_paper" id="title_paper" class="form-control" value="<?php echo $title_paper;?>" maxlength="500" Placeholder="Only 500 Characters are allowed. ">

                  </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="form-group">

                    <p>Do you have any Co-authors &nbsp;&nbsp;<input id="coupon_question12" type="checkbox" name="do_coauthors" value="Yes" />

                      <span class="item-text">Yes</span></p>

                  </div>

                  <fieldset class="answer1">

                    <div class="row">

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="form-group">

                          <label>Co-author 1 *</label>

                          <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                              <input type="text" name="coauthors1" id="coauthors1" onKeyPress="return isAlphabetWithDot(event)" class="form-control"  value="<?php echo $coauthors1;?>">

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                              <p>Separate Certificate Required &nbsp;&nbsp;<input id="coupon_question13" type="checkbox" name="certi_require1" value="Yes" /></p>

                            </div>

                          </div>

                        </div>

                        <div class="form-group">

                          <label>Co-author 2 *</label>

                          <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                              <input type="text" name="coauthors2" id="paper_code" class="form-control"  onKeyPress="return isAlphabetWithDot(event)" value="<?php echo $coauthors2;?>">

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                              <p>Separate Certificate Required &nbsp;&nbsp;<input id="coupon_question14" type="checkbox" name="certi_require2" value="Yes" /></p>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </fieldset>

                </div>



              </fieldset>

            </div>

          </div>

              

          



              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group">

                  <label>Currency *</label>

                  <select name="currency" class="form-control" required="">

                    <option value="">Select currency</option>

                                     

                    <option selected  value="India Rupees - INR">India Rupees – INR</option>

                    

                    <option value="United States Dollars - USD">United States Dollars – USD</option>


                  </select>



                </div>

              </div>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

               <div class="form-group">

                <label>Amount Paid<span class="redColorNew">*</span></label>

                 <input type="text" name="amt_paid" placeholder="Amount Paid" class="form-control" pattern="[0-9]+" onKeyPress="return isNumeric(event)" required>
          </div>

              </div>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

            <div class="form-group">

              <label>Mode of Payment *</label>

              <select name="mode_payment" class="form-control" required="">

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

                  <label>Bank Name *</label>

                 <input type="text" name="bank_name" id="bank_name" class="form-control"  onKeyPress="return isAlphabet(event)" required pattern="[a-zA-Z ]+" value="<?php echo $bank_name;?>">

                </div>

              </div>

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group">

                  <label>DD No / Transaction No *</label>

                  <input type="text" name="payment_ref_no" id="payment_ref_no" class="form-control"  value="<?php echo $payment_ref_no;?>" required>

                </div>

              </div>

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="form-group input-group date">

                  <label>Date of Payment *</label>

                  <input   type="text" name="payment_date" id="payment_date" class="form-control" value="<?php echo $payment_date;?>" required>

                </div>

              </div>

            </div>

          </div>

         

          



          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="form-group">

              <button class="btn btn btn-success" value="submit" name="submit" id="submit" type="submit"><b><i class="fa fa-send"></i> Send</b></button>

              <button class="btn btn btn-success" value="reset" type="submit"><b><i class="fa fa-refresh"></i> Reset</b></button>

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



  $(".answer1").hide();

  $("#coupon_question12").click(function() {

      if($(this).is(":checked")) {

          $(".answer1").show();

      } else {

          $(".answer1").hide();

      }

  });



  $(".answer2").hide();

  $("#coupon_question13").click(function() {

      if($(this).is(":checked")) {

          $(".answer2").show();

      } else {

          $(".answer2").hide();

      }

  });



  $(document).ready(function(){

    $("#hide").click(function(){

        $(".answer2").hide();

    });

  });



  $(".answer3").hide();

  $("#coupon_question14").click(function() {

      if($(this).is(":checked")) {

          $(".answer3").show();

      } else {

          $(".answer3").hide();

      }

  });



  $(document).ready(function(){

    $("#hide1").click(function(){

        $(".answer3").hide();

    });

  });

</script>



<style type="text/css">

  .answer2{

    position: fixed;

    width: 100%;

    max-width: 500px;

    height: 240px;

    background-color: #fff;

    border:2px solid #ddd;

    left: 50%;

    margin-left: -250px;

    top: 50%;

    margin-top: -120px;

    display: none;

    padding: 15px;

    z-index: 99999999;

    -moz-box-shadow:    0px 0px 7px 3px #000;

  -webkit-box-shadow: 0px 0px 7px 3px #000;

  box-shadow:         0px 0px 7px 3px #000;

  }

  .answer2 span{

    color: #ff0000;

  }



  #hide{

    cursor: pointer;

  }



  .answer3{

    position: fixed;

    width: 100%;

    max-width: 500px;

    height: 240px;

    background-color: #fff;

    border:2px solid #ddd;

    left: 50%;

    margin-left: -250px;

    top: 50%;

    margin-top: -120px;

    display: none;

    padding: 15px;

    z-index: 99999999;

    -moz-box-shadow:    0px 0px 7px 3px #000;

  -webkit-box-shadow: 0px 0px 7px 3px #000;

  box-shadow:         0px 0px 7px 3px #000;

  }

  .answer3 span{

    color: #ff0000;

  }



  #hide1{

    cursor: pointer;

  }

</style>



<div class="answer2">

  <p>The number of co-authors for a paper is capped at <span>Three</span>. If the paper is in Joint names and one of the coauthors attends and makes a presentation, one certificate will be issued in the joint names. </p>



  <p>If more than one coauthors attend or require Separate certificate, fee registration will be required to be done for each co-author.The amount in that case would be <span>doubled</span> in case of Two Separate Certificates and <span>Tripled</span> for Three Separate Certificates.</p>

  <a href="javascript:void(0);" id="hide" class="btn btn-success btn-md">I Agree.</a>

</div>



<div class="answer3">

  <p>The number of co-authors for a paper is capped at <span>Three</span>. If the paper is in Joint names and one of the coauthors attends and makes a presentation, one certificate will be issued in the joint names. </p>



  <p>If more than one coauthors attend or require Separate certificate, fee registration will be required to be done for each co-author.The amount in that case would be <span>doubled</span> in case of Two Separate Certificates and <span>Tripled</span> for Three Separate Certificates.</p>

  <a href="javascript:void(0);" id="hide1" class="btn btn-success btn-md">I Agree.</a>

</div>



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

                   function isAlphabetWithDot(evt)

{
   var theEvent = evt || window.event;
   if (theEvent.keyCode == 09) //if its a enter key
   {
       var tabindex = $(this).attr('tabindex');
       tabindex++; //increment tabindex
       $('[tabindex=' + tabindex + ']').focus();
       return false;
   }
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode(key);
   var regex = /^[A-Za-z_@. ]*$/
   if (!regex.test(key)) {
       theEvent.returnValue = false;
       if (theEvent.preventDefault) theEvent.preventDefault();
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