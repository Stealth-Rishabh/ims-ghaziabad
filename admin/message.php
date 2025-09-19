<?php
$messsageType="";
	
	$m = isset($_GET['m']) ? $_GET['m'] : '9';
		$n = isset($_GET['n']) ? $_GET['n'] : '';
			 if($m==0){$messsageType=0;$message = "Record has not been saved successfully.";}
		else if($m==1){$messsageType=1;$message = "Record has been saved successfully.";}
		else if($m==2){$messsageType=0;$message = $n." image name content two dot (.)";}
		else if($m==3){$messsageType=0;$message = "Pleas Select Image ".$n;}
		else if($m==4){$messsageType=1;$message = "Record has been updated.";}
		else if($m==5){$messsageType=0;$message = "Record has not been updated";}
		else if($m==6){$messsageType=1;$message = "Record has been deleted.";}
		else if($m==7){$messsageType=0;$message = "Record has not been deleted.";}
		else if($m==8){$messsageType=0;$message = "This  name already exists.";}
		else if($m==10){$messsageType=0;$message = "This email id already exists.";}
		else if($m==11){$messsageType=0;$message = "This phone no already exists.";}
		else if($m==12){$messsageType=0;$message = "This category cannot be deleted. It has items associated with it.";}
		else if($m==13){$messsageType=0;$message = "Image width  should be greater then ".$n;}
		else if($m==14){$messsageType=0;$message = "This category already exists ";}
		else if($m==15){$messsageType=0;$message = "This record content other record  ";}
		else if($m==16){$messsageType=0;$message = "Only select jpg, jpeg image";}
		else if($m==17){$messsageType=0;$message = "This category contain subcategory.";}
		else if($m==18){$messsageType=0;$message = "This subcategory contain Product.";}
		else if($m==19){$messsageType=1;$message = "Category Activated.";}
		else if($m==20){$messsageType=0;$message = "Category De-Activated.";}
		else if($m==21){$messsageType=1;$message = "OTP Send successfully.";}
		else if($m==22){$messsageType=0;$message = "OTP not send.";}
		else if($m==23){$messsageType=1;$message = "Franchise Activated.";}
		else if($m==24){$messsageType=0;$message = "Franchise De-Activated.";}
		else if($m==25){$messsageType=1;$message = "Sub Category Activated.";}
		else if($m==26){$messsageType=0;$message = "Sub Category De-Activated.";}
		else if($m==27){$messsageType=1;$message = "Child Category Activated.";}
		else if($m==28){$messsageType=0;$message = "Child Category De-Activated.";}
		else if($m==31){$messsageType=0;$message = "Invalid OTP ! Please try again.";}
		else if($m==33){$messsageType=1;$message = "Franchise Register Successfully.";}
		else if($m==34){$messsageType=1;$message = "Clinic & Hospital Activated.";}
		else if($m==35){$messsageType=0;$message = "Clinic & Hospital De-Activated.";}
		else if($m==36){$messsageType=0;$message = "This Doctor have lisiting. Please delete it first.";}
		else if($m==37){$messsageType=1;$message = "Show on Clinic & Specialization.";}
		else if($m==38){$messsageType=0;$message = "Hide on Clinic & Specialization.";}
		else if($m==39){$messsageType=1;$message = "Show on Book your Doctor.";}
		else if($m==40){$messsageType=1;$message = "Hide on Book your Doctor.";}
		else if($m==41){$messsageType=0;$message = "This Hospital have lisiting. Please delete it first.";}
	    else if($m==42){$messsageType=1;$message = " Account Unlock.";}
		else if($m==43){$messsageType=0;$message = " Account Locked.";}
		else if($m==44){$messsageType=1;$message = "Clinic Activated.";}
		else if($m==45){$messsageType=0;$message = "Clinic De-Activated.";}
		else if($m==46){$messsageType=0;$message = "This Clinic have Doctor. Please delete it first.";}
		else if($m==47){$messsageType=1;$message = "Clinic has been deleted.";}
		else if($m==48){$messsageType=1;$message = "Doctor Activated.";}
		else if($m==49){$messsageType=0;$message = "Doctor De-Activated.";}
		else if($m==50){$messsageType=1;$message = "Doctor Deleted.";}
     	else if($m==51){$messsageType=0;$message = "Doctor Not Deleted.";}
		else if($m==52){$messsageType=1;$message = "Hospital Activated.";}
		else if($m==53){$messsageType=0;$message = "Hospital De-Activated.";}
	    else if($m==54){$messsageType=0;$message = "This Hospital have Doctor. Please delete it first.";}
		else if($m==55){$messsageType=1;$message = "Hospital has been deleted.";}
		else if($m==62){$messsageType=1;$message = "Review Activated.";}
		else if($m==63){$messsageType=0;$message = "Review De-Activated.";}
			else if($m==64){$messsageType=1;$message = "Patient Care Activated.";}
		else if($m==65){$messsageType=0;$message = "Patient Care De-Activated.";}
		 
		else
		{
			$message = "";
		}
	
	if($m!=9)
	{?>
   <!-- <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                
                                            </div>-->
	<?php }	
?>	

		
<script>
   toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
} 
</script>
<script>
	<?php if($message!=""){
			if($messsageType==1){?>
		toastr.success('<?php echo $message; ?>');	
			<?php }else{
			?>
		 toastr.error('<?php echo $message; ?>');
		 <?php }}?>
</script>
