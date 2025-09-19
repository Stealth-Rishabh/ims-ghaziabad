<?php include'loginQuery/session_start.php';
include'dbc.php'; ?>
<style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    font-size: 14px;
}
@media print {
  .top {
   background: #286090 !important;
   padding: 8px !important; 
  }
}

@media print {
  .whitetop {
   color: white !important;
  }
}

@media print {
  
  #orderdetails {
  background-color: #f9f9f9 !important;
}
}
</style>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




<?php
 date_default_timezone_set("Asia/Kolkata");
$dt= date('d/m/Y', time());
$tempinvoiceid=$_GET['tempinvoiceid'];

$q1=mysqli_query($conn,"select * from tbl_invoice where temp_invoiceid='$tempinvoiceid'");
$pl=mysqli_fetch_array($q1);
extract($pl);

$sqlC=mysqli_query($conn,"select * from tbl_vendor where id='$vendor_id'") or die(mysqli_error($conn));
$rows=mysqli_fetch_assoc($sqlC);
extract($rows);


?>

<div class="container" style="padding:30px 30px 0px 20px;">
<div class="row">
  <div class="top" style="background:black;padding: 8px">
<h4 style="color: white"><strong class="whitetop">INVOICE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style="float: right;" class="whitetop"><?php echo $pl['orderId']; ?>&nbsp&nbsp ₹ <?php echo $pl['afteramount']; ?></span></strong></h4>
</div>

    <div style="width:50%;float:left;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/hylimart_logo.png" style="height: 77px !important;margin-top: 7px;background-color:black!important;padding: 5px;border-radius: 8px;">
    </div>
    <div style="width:50%;float:right;text-align:right;padding-right: 20px;">
        <h3 style="font-weight: 600;">HYLIMART</h3>
        Email : info.hylimart@gmail.com<br>
        Contact : +91-8630839875 ,+91-7906813512<br>
       <br>
    </div>
    </div><hr>
    <div class="row">
    <div style="width:50%;float:left;padding-left:20px;">
        <h3 style="font-weight: 600;">VENDOR</h3>
        <b>Name : <?php echo $rows['vendor_name']; ?></b><br>
        <b>Email :</b> <?php echo $rows['email']; ?><br>
        <b>Mobile Number :</b> <?php echo $rows['mobile']; ?><br>
        <b>Business Name :</b> <?php echo $rows['businessname']; ?><br>
        <b>Business Address :</b> <?php echo $rows['businessaddress']; ?><br>
    </div>
    <div style="width:50%;float:right;text-align:right; padding-top: 55px;">
        <b>Invoice No. :</b> <?php echo $pl['invoice_number']; ?><br>
        <b>Invoice Date :</b> <?php echo $pl['invoice_date']; ?><br>
        <b>Payment Mode :</b> <?php echo $pl['paymentmode']; ?>
    </div>
    </div>
    
    <div>
    <div class="row" style="margin-top:30px;padding:20px;" id="orderdetails" >
         <table class="table table-striped"  >
                    <tr >
                      <th colspan="7" >
                        <center>
                          <h3><strong >Subscription Detail</strong></h3>
                        </center>
                      </th>
                    </tr>
                    <tr>
                      <th>Sr.No.</th>
                      <th>Plan Name</th>
                      <th >Start Date</th>
                      <th>End Date</th>
                      <th>Amount</th>
                      <th>Discount</th>
                      <th colspan="3">Total</th>
                    </tr>
              
                   
                    <tr>

                       <td>1</td>
                      <td><?php echo $pl['plan']; ?></td>
                      <td><?php echo $pl['startdate']; ?></td>
                      <td><?php echo $pl['enddate']; ?></td>
                      <td>₹ <?php echo $beforeamount; ?></td>
                      <td><?php echo $discount; ?>%</td>
                      <td colspan="3">₹ <?php echo $afteramount; ?></td>
                    </tr>
                    
                  </table>
    </div> 
    <hr>
        <center><p>Thank you for Subscription ! Contact us on helpline +91-8630839875 ,+91-7906813512 for any issues.</p></center>
</div>
 <script type="text/javascript">
// window.print();
</script> 
