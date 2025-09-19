
// JavaScript Document
jQuery(document).ready(function ($) {
var pdfID;
$('#applicationname').keyup(function() { 
    pdfID = this.value; 
    var metakey=pdfID;
    pdfID = pdfID.replace(/ /gi,'-');
    pdfID = pdfID.replace(/&/gi,'and');
    pdfID=pdfID.toLowerCase();
    $("#setpageName").val(pdfID);
    // $("#setpageName1").val(pdfID);
    // $("#metatitleid").val(metakey);
    // $("#metadescriptionid").val(metakey);
}); 
    
$( "#getPackage" ).change(function() {

	var pid=$( "#getPackage" ).val();
	window.location.href="package-program.php?p="+pid;
});



$( "#getcategoryid2" ).change(function() {

	var categoryid=$( "#getcategoryid2" ).val();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	var varientid=$("#getvarientid").val();
	if(mode=="addProductVarient"){
		window.location.href="product-varient.php?cid="+categoryid+"&varientid="+varientid;
	}else{
		window.location.href="product-varient.php?cid="+categoryid+"&id="+id+"&varientid="+varientid;
	}	
});

$( "#getcategoryid" ).change(function() {

	var categoryid=$( "#getcategoryid" ).val();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	if(mode=="addProduct"){
		window.location.href="product.php?cid="+categoryid;
	}else{
		window.location.href="product.php?cid="+categoryid+"&id="+id;
	}	
});

$( "#getsubcategoryid2" ).change(function() {

	var subcategoryid=$( "#getsubcategoryid2" ).val();
	var categoryid=$( "#getcategoryid2" ).val();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	var varientid=$("#getvarientid").val();
	if(mode=="addProductVarient"){
	window.location.href="product-varient.php?cid="+categoryid+"&varientid="+varientid+"&sid="+subcategoryid;
	}else{
		window.location.href="product-varient.php?cid="+categoryid+"&id="+id+"&varientid="+varientid+"&sid="+subcategoryid;
	}	
});

$( "#getsubcategoryid" ).change(function() {

	var subcategoryid=$( "#getsubcategoryid" ).val();
	var categoryid=$( "#getcategoryid" ).val();
// 	alert(categoryid)
// 	exit();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	if(mode=="addProduct"){
		window.location.href="product.php?sid="+subcategoryid+"&cid="+categoryid;
	}else{
		window.location.href="product.php?sid="+subcategoryid+"&cid="+categoryid+"&id="+id;
	}	
});

$( "#getsecondgetcategoryid" ).change(function() {

	var categoryid=$( "#getsecondgetcategoryid" ).val();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	if(mode=="addSubSubCategory"){
		window.location.href="sub-sub-category.php?cid="+categoryid;
	}else{
		window.location.href="sub-sub-category.php?cid="+categoryid+"&id="+id;
	}	
});

$( "#getsecondgetcategoryidvendor" ).change(function() {

	var categoryid=$( "#getsecondgetcategoryidvendor" ).val();
	var mode=$( "#getaction" ).val();
	var id=$( "#getid" ).val();
	if(mode=="editVendor"){
		window.location.href="edit-vendor.php?cid="+categoryid;
	}else{
		window.location.href="edit-vendor.php?cid="+categoryid+"&id="+id;
	}	
});

$("#checktest").click(function(){
    var idd=$('#checktest').val();
   //alert(idd)
   //alert(idd)
    
            $.ajax({
                type: "POST",
                url: 'function/function.php',
                data: "action=testCheck&quepaperid="+idd,
                success: function(returndata){
                    //alert(returndata)
                    if(returndata==0){
                        window.location.href="paper.php?quepaperid="+idd;   
                    }else{
                        alert(returndata);
                    }
                }
            }); 
            //alert("test")
  });



/*-------------------new working admin----------------------------------------------*/
$('#getsku').focusout(function(){
	var sku=$('#getsku').val();
	var id=$('#getid').val();
	
	if(sku.length>15){
		alert("Please enter less then and equal 15 Digit SKU Code");
		$('#getsku').focus();
		return false;
	}else{
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=checkSku&itemid="+id+"&sku="+sku,
				success: function(returndata){
					if(returndata==1){
							
					}else{
						alert(returndata);
					}
				}
			});	
	}
});					

<!-----------------------------social submit----------------------------------->
$("#frmsoicalpages").submit(function (event) {
				event.preventDefault();
		$("#socialbtn").html('');
		$("#socialbtn").html(' <strong><span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span></strong>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'dataQuery/process.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					
					if(returndata==1)
					{
						$("#socialbtn").html('Save');
						//toastr.success("Record has been update");
						$("#socialmsg").html('<span class="text-success">Record has been update</span>');
					}
					else 
					{
						$("#socialbtn").html('Save');	
						//toastr.success("Record has already update");
						$("#socialmsg").html('<span class="text-danger">Record has already update</span>');
					}
				
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
<!---------------------------------------------------------------->


<!-----------------------------social submit----------------------------------->
$("#frmbusiness").submit(function (event) {
				event.preventDefault();
		$("#bussinessbtn").html('');
		$("#bussinessbtn").html('<strong><span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span></strong>');
		
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'dataQuery/process.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1)
					{
						$("#bussinessbtn").html('Save');
						$("#bussinessmsg").html('<span class="text-success">Record has been update</span>');
						//toastr.success("Record has been update");
					}
					else 
					{
						$("#bussinessbtn").html('Save');	
						$("#bussinessmsg").html('<span class="text-danger">Record has already update</span>');
						//toastr.success("Record has already update");
					}
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
<!---------------------------------------------------------------->
<!-----------------------------social submit----------------------------------->
$("#frmcompanylocation").submit(function (event) {
		event.preventDefault();
		$("#companybtn").html('');
		$("#companybtn").html('<strong><span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span></strong>');
		
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'dataQuery/process.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1)
					{
						$("#companybtn").html('Save');
						$("#companymsg").html('<span class="text-success">Record has been update</span>');
						//toastr.success("Record has been update");
					}
					else 
					{
						$("#companybtn").html('Save');	
						$("#companymsg").html('<span class="text-danger">Record has already update</span>');
						//toastr.success("Record has already update");
					}
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
<!---------------------------------------------------------------->
<!-----------------------------social submit----------------------------------->
$("#frmhomepage").submit(function (event) {
		event.preventDefault();
		$("#homepagebtn").html('');
		$("#homepagebtn").html('<strong><span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span></strong>');
		
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'dataQuery/process.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1)
					{
						$("#homepagebtn").html('Save');
						$("#homepagemsg").html('<span class="text-success">Record has been update</span>');
						//toastr.success("Record has been update");
					}
					else 
					{
						$("#homepagebtn").html('Save');	
						$("#homepagemsg").html('<span class="text-danger">Record has already update</span>');
						//toastr.success("Record has already update");
					}
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
<!---------------------------------------------------------------->

<!-----------------------------social submit----------------------------------->
$("#frmcommon").submit(function (event) {
		event.preventDefault();
		$("#submitbtn").html('');
		$("#submitbtn").html('<strong><span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span></strong>');
			
			var buttonname=$("#buttonname").val();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'dataQuery/process.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1){
						
						$("#submitbtn").html(buttonname);
						toastr.success("Record has been inserted");
						$("form").trigger("reset");
						
					}else if(returndata==4){
						
						$("#submitbtn").html(buttonname);
						toastr.success("Record has been updated");
						$("form").trigger("reset");
						
					}else {
						
						$("#submitbtn").html(buttonname);	
						toastr.success(returndata);
						$("form").trigger("reset");
						
					}
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
<!---------------------------------------------------------------->
var GloblecategoryID="";
<!----------------------------set category id ------------------------------------>
$(".opnefilterwindow").click(function () {
	//$('#selorderstatus').val($(this).attr("status")).trigger('change');
	var categoryID=$(this).attr("categoryid");
	var caetgoryname=$(this).attr("caetgoryname");
	GloblecategoryID=$(this).attr("caetgoryid");
	
	$("#titlename").html(caetgoryname);
	$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
	
	$("#categoryid").val(GloblecategoryID);
	$("#categoryid2").val($(this).attr("caetgoryid"));

			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=showSubCategory&category="+GloblecategoryID,
				success: function(returndata){
					$("#showfilterdata").html(returndata);
				}
			});	
			//$('#myModal').modal({backdrop: 'static', keyboard: true})  
});

$('#searchfilter').focusout(function(){
	var searchV=$('#searchfilter').val()
	$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
	
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=searchShowFilterTable&category="+GloblecategoryID+"&search="+searchV,
				success: function(returndata){
					
					$("#showfilterdata").html(returndata);
				}
			});	
	
});					

$("#frmsearch").submit(function (event) {
				event.preventDefault();
		 
		
		$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'function/ajax_function.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					
					$("#showfilterdata").html(returndata);
			  	},
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});


$("#addnewfilter").click(function () {
	//$('#selorderstatus').val($(this).attr("status")).trigger('change');
	$("#subcategoryname").focus();
	$("#action").val("addSubCategory");
	$("#addnewfilter").hide()
	
	$("#subcategoryname").val('');
	$("#sorder").val('');
	$("#stitle").val('');
	$("#skeyword").val('');
	$("#sdescription").val('');
    $('input:checkbox').removeAttr('checked');
			
});


$("#frmsubcategory").submit(function (event) {
				event.preventDefault();
		$("#btnchangestatus").html('');
		$("#btnchangestatus").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span>');
		var categoryID=$("#categoryid").val();
		
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'function/ajax_function.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					//alert(returndata)
					if(returndata==1)
					{
						$("#btnchangestatus").html('Save');
						toastr.success("Record has been added.");
						/*-----------------------------------*/
						$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
	
						$("#categoryid").val($(this).attr("caetgoryid"));
						$("#categoryid2").val($(this).attr("caetgoryid"));
						
								$.ajax({
									type: "POST",
									url: 'function/ajax_function.php',
									data: "action=showSubCategory&category="+categoryID,
									success: function(returndata){
										$("#showfilterdata").html(returndata);
									}
								});	
						/*---------------------------------------*/
						$("#categoryid").val(categoryID);
						$("#categoryid2").val(categoryID);
						//window.location.href="category-list.php?m=1";
					}else if(returndata==2)
					{
						$("#btnchangestatus").html('Save');
						toastr.success("Record has been updated.");
						/*-----------------------------------*/
						$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
	
						$("#categoryid").val($(this).attr("caetgoryid"));
						$("#categoryid2").val($(this).attr("caetgoryid"));
								$.ajax({
									type: "POST",
									url: 'function/ajax_function.php',
									data: "action=showSubCategory&category="+categoryID,
									success: function(returndata){
										$("#showfilterdata").html(returndata);
									}
								});	
						/*---------------------------------------*/
						$("#categoryid").val(categoryID);
						$("#categoryid2").val(categoryID);
						$("#action").val("addSubCategory");
						//window.location.href="category-list.php?m=1";
					}
					else 
					{
						$("#categoryid").val(categoryID);	
						$("#categoryid2").val(categoryID);	
						//window.location.href="category-list.php?m=0";
						$("#btnchangestatus").html('Save');
						toastr.error(returndata);
					}
				$("#subcategoryname").val('');
				$("#sorder").val('');
				$("#stitle").val('');
				$("#skeyword").val('');
				$("#sdescription").val('');
				 $('input:checkbox').removeAttr('checked');
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});


<!----------------------------item page js------------------------------------>

$(".getFilterID").click(function () {

	var filterID = $(this).attr('filterid');								  
	var filterName = $(this).attr('filtername');
	var filterType = $(this).attr('filtertype');
	//alert("Filter ID ="+filterID+" Filter Name ="+filterName+" Filter Type ="+filterType);	
	$("#showfiltername").html(filterName);
	$("#insertfilterid").val(filterID);
	$("#insertfiltertype").val(filterType);
});
<!--add type 1 add value-->
$("#frmfiltervalue").submit(function (event) {
				event.preventDefault();
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		var type	 	 =$("#insertfiltertype").val();
		var filterID	 =$("#insertfilterid").val();
		var filtervalue  =$("#insertfiltervalue").val();
		if(filtervalue==""){
			alert("Please enter the Value");
			return false;
		}
		$("#savefiltervaluerecord").html('');
		$("#savefiltervaluerecord").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
		/*--------------------------------------------------------------------------------------*/
		$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'function/ajax_function.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1)
					{
						$("#savefiltervaluerecord").html('Add');
						toastr.success("Not Add Successfully");
					}
					else if(returndata==2)
					{
						$("#savefiltervaluerecord").html('Add');
						toastr.error("this Value already exists in this Filter");
					}
					else 
					{	
						if(type==0){
				
							$("#savefiltervaluerecord").html('Add');
							toastr.success("Add Successfully");
							$('#myModal3').modal('hide')
							var arraydata = returndata.split(',');
							$('#filter'+filterID).append('<option selected value="'+arraydata[0]+'">'+arraydata[1]+'</option>')
							$('#filter'+filterID).val(arraydata[0]).trigger('change');
						}else{
							$("#savefiltervaluerecord").html('Add');
							toastr.success("Add Successfully");
							$('#myModal3').modal('hide')
							$('#filter'+filterID).append(returndata)
						}
					}
			  	},
				error: function(){
				alert("error in ajax form submission");
			 }
			});
			$("#insertfiltervalue").val('');
			/*--------------------------------------------------------------------------------------*/
});
<!--type 1 filter value add color-->
$(".getswitchcategorydata").click(function () {
	var categoryID=$(this).attr('categoryid');
	var categoryIDa=categoryID+",";
 	var subcategoryid=$(this).attr('subcategoryid');
 	var subcategoryname=$(this).attr('subcategoryname');
	
 	var arraydata = categoryIDa.split(',');
	$("#switchsubcateoryid").val(subcategoryid);
	$("#switchcateoryid").val(categoryID);
	$("#titleswitchname").html(subcategoryname);
	
 	$('#switchcategoryid').val(arraydata[0]).trigger('change');
});
<!--add type 1 add value-->
$("#frmswitchsubcategory").submit(function (event) {
				event.preventDefault();
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		
		$("#btnswitchchangestatus").html('');
		$("#btnswitchchangestatus").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
		/*--------------------------------------------------------------------------------------*/
		$("#showfilterdata").html('<span id="progress"><i class="fa fa-spinner fa-spin" style="color:#000;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'function/ajax_function.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					if(returndata==1)
					{
						$("#btnswitchchangestatus").html('Add');
						 window.location.href="category-list.php?m=4";
					}
					else 
					{
						$("#btnswitchchangestatus").html('Add');
						toastr.error(returndata);
					}
					
			  	},
				error: function(){
				alert("error in ajax form submission");
			 }
			});
			/*--------------------------------------------------------------------------------------*/
});
<!--type 1 filter value add color-->
<!--add sub category-->
$("#btnsubcategory").click(function () {
									 
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		var subcategoryname =$("#subcategoryname").val();
		var categoryid =$("#categoryid").val();
		
		if(subcategoryname==""){
			alert("Please enter the sub category");
			return false;
		}
		
		$("#btnsubcategory").html('');
		$("#btnsubcategory").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
			
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=addSubCategory&subcategoryname="+subcategoryname+"&categoryid="+categoryid,
				success: function(returndata){

					if(returndata==1)
					{
						$("#btnsubcategory").html('Add');
						toastr.success("Not Add Successfully");
					}
					else if(returndata==2)
					{
						$("#btnsubcategory").html('Add');
						toastr.error("this Sub Category already exists in this category");
					}
					else 
					{
						
						$("#btnsubcategory").html('Add');
						toastr.success("Add Successfully");
						$('#myModal4').modal('hide')
						$('#sizelist').append(returndata)
					}

				}
			});	
			$("#sizename").val('');
});
<!--add sub category-->
$("#btnb2b").click(function () {
									 
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		
		var inputbtob =$("#inputbtob").val();
		
		if(inputbtob==""){
			alert("Please enter the category");
			return false;
		}
		
		$("#btnb2b").html('');
		$("#btnb2b").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
			
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=addBTOB&name="+inputbtob,
				success: function(returndata){

					if(returndata==1)
					{
						$("#btnb2b").html('Add');
						toastr.success("Not Add Successfully");
					}
					else if(returndata==2)
					{
						$("#btnb2b").html('Add');
						toastr.error("this Category already exists in this category");
					}
					else 
					{
						
						$("#btnb2b").html('Add');
						toastr.success("Add Successfully");
						$('#myModal1').modal('hide')
						$('#b2blist').append(returndata)
					}

				}
			});	
			$("#inputbtob").val('');
});

$( "#getCategoryID" ).change(function() {
	var categoryID=$( "#getCategoryID" ).val();
	window.location.href="item.php?cid="+categoryID;
});
<!--end sub category-->

$(".removesector").click(function () {
var totalCheck=0;		
	$(".removesector").each(function(){
	  var $this = $(this);
	  if ($this.is(':checked')) {
		totalCheck++;
	  }
	  else
	  {
		
	  }
	});
	if(totalCheck>0){
		$('.removesector').removeAttr('required');
	}else{
		$('.removesector').attr('required', 'required');
	}
	/*if(filtervalidation==1){
		$('#chkvalidation').prop('checked', true);
	}else{
		$('#chkvalidation').prop('checked', false);
	}*/
});

$(".removemultiple").click(function () {
	var className=$(this).attr('getclass');								 
var totalCheck=0;		
	$("."+className).each(function(){
	  var $this = $(this);
	  if ($this.is(':checked')) {
		totalCheck++;
	  }
	  else
	  {
		
	  }
	});
	if(totalCheck>0){
		$('.'+className).removeAttr('required');
	}else{
		$('.'+className).attr('required', 'required');
	}
	
});

$("#itembtn").click(function () {
	/*$(".selectfeild").each(function () {alert("call"+ $(this).attr('getid'))});*/							   
	var selectString	=	$("#validationbox").val();
	var arraydata = selectString.split('/');
	for(var i=0;i<arraydata.length-1;i++){
	
		var singledata = arraydata[i].split(',');
		if($("#"+singledata[0]).val()==""){
			alert("Please select the "+singledata[1]);
			return false;
		}
	}
});



<!----------------------------end item page js------------------------------------>

var pdfID;
$('#applicationname').keyup(function() { 
    pdfID = this.value; 
	var metakey=pdfID;
	pdfID = pdfID.replace(/ /gi,'-');
	pdfID=pdfID.toLowerCase();
	$("#setpageName").val(pdfID);
	$("#setpageName1").val(pdfID);
	$("#metatitleid").val(metakey);
	$("#metadescriptionid").val(metakey);
});
/*------------------------------*/
$("#editUrl").click(function(){
	  $('#setpageName').attr('disabled', false);
	  $("#editUrl").hide();
	  $("#saveUrl").show()
});	
$("#saveUrl").click(function(){
	var url=$("#setpageName").val();
	$("#setpageName1").val(url);
	$('#setpageName').attr('disabled', true);
  	  $("#editUrl").show();
	  $("#saveUrl").hide()
});	
<!--add color-->
$("#productcategorybtn").click(function () {
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		var productcategoryname =$("#productcategoryname").val();
		if(productcategoryname==""){
			alert("Please enter the product category");
			return false;
		}
		$("#productcategorybtn").html('');
		$("#productcategorybtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
			
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=addProduct&productcategoryname="+productcategoryname,
				success: function(returndata){
					
					if(returndata==1)
					{
						$("#colorbtn").html('Add');
						toastr.success("Not Add Successfully");
					}
					else 
					{
						
						$("#productcategorybtn").html('Add');
						toastr.success("Add Successfully");
						$('#myModal3').modal('hide')
						
						var arraydata = returndata.split(',');
						$('#selproductcategory').append('<option selected value="'+arraydata[0]+'">'+arraydata[1]+'</option>')
						$('#selproductcategory').val(arraydata[0]).trigger('change');
					}

				}
			});	
			$("#productcategoryname").val('');
});

<!--end color-->

<!--add matrial-->
$("#matrialbtn").click(function () {
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		var matrialname =$("#matrialname").val();
		if(matrialname==""){
			alert("Please enter the matrial name");
			return false;
		}
		$("#matrialbtn").html('');
		$("#matrialbtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
			
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=matrialName&matrialname="+matrialname,
				success: function(returndata){
					
					if(returndata==1)
					{
						$("#matrialbtn").html('Add');
						toastr.success("Not Add Successfully");
					}
					else 
					{
						
						$("#matrialbtn").html('Add');
						toastr.success("Add Successfully");
						$('#myModal1').modal('hide')

						
						var arraydata = returndata.split(',');
						$('#selmatrialname').append('<option selected value="'+arraydata[0]+'">'+arraydata[1]+'</option>')
						$('#selmatrialname').val(arraydata[0]).trigger('change');
					}

				}
			});	
			$("#matrialname").val('');
});
<!--end matrial-->
<!--add matrial-->
$("#solebtn").click(function () {
      toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		var solename =$("#solename").val();
		if(solename==""){
			alert("Please enter the sole name");
			return false;
		}
		$("#solebtn").html('');
		$("#solebtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;font-size:14px;" aria-hidden="true"></i></span>');
			
			$.ajax({
				type: "POST",
				url: 'function/ajax_function.php',
				data: "action=soleName&solename="+solename,
				success: function(returndata){
					
					if(returndata==1)
					{
						$("#solebtn").html('Add');
						toastr.success("Not Add Successfully");
					}
					else 
					{
						
						$("#solebtn").html('Add');
						toastr.success("Add Successfully");
						$('#myModal2').modal('hide')
						
						var arraydata = returndata.split(',');
						$('#selsolename').append('<option selected value="'+arraydata[0]+'">'+arraydata[1]+'</option>')
						$('#selsolename').val(arraydata[0]).trigger('change');
					}

				}
			});	
			$("#matrialname").val('');
});
<!--end matrial-->


//onactive
//setActiveClass

$("input").focus(function(){
    $(this).addClass("onactive");
});
$("input").focusout(function(){
    $(this).removeClass("onactive");
});
$("textarea").focus(function(){
    $(this).addClass("onactive");
});
$("textarea").focusout(function(){
    $(this).removeClass("onactive");
});
$("select").focus(function(){
    $(this).addClass("onactive");
});
$("select").focusout(function(){
    $(this).removeClass("onactive");
});


$('#departmentcategory').on('change', function() {
var pagemode	= $("#pagemode").val();											  
var did			= $("#departmentcategory").val();
var getProductID= $("#getid").val();
//alert(pagemode+"DepartmentID"+did)
if(pagemode==1)//edit mode
{	
	window.location.href="item.php?d="+did+"&id="+getProductID;
}
else if(pagemode==2)//normal
{
	window.location.href="item.php?d="+did;
}
else if(pagemode==3)//varian mode
{
	window.location.href="item.php?d="+did+"&pid="+getProductID;
}

	/*	$.ajax({
			type: "POST",
			url: 'function/ajax_function.php',
			data: "action=getProductCategoryList&departmentID="+ did ,
			success: function(html){
			alert(html)
			$("#showcategory").html(html);
		}
	});*/	
});	
/*-----product code-------------------------*/


function productCode(){
	var productmonth=$('#productmonth').val();
	/*if(productmonth==""){
		alert("Please select the month")
		return true;
	}*/
	var productyear=$('#productyear').val();
	/*if(productyear==""){
		alert("Please select the Year")
		return  true;
	}*/
	var productcode=$('#productcode1').val();
	$('#finalcode').val("CH-"+productmonth+""+productyear+"-"+productcode)
	
	
}
$('#productyear').on('change', function() {
	productCode();
});
$('#productmonth').on('change', function() {
	productCode();
});
$("#productcode1").keydown(function (e) {
	var productmonth=$('#productmonth').val();
	var productyear=$('#productyear').val();
	if(productmonth==""){
		alert("Please select the month")
		return false;
	}else if(productyear==""){
		alert("Please select the Year")
		return  false;
	}
	productCode();				   
});

/*$("#productcode1").focusout(function(){
	productCode();
});												*/
$(".getorderid").click(function () {
	$('#selorderstatus').val($(this).attr("status")).trigger('change');
	$("#orderid").val($(this).attr("orderid"))
});
$("#frmchangestatus").submit(function (event) {
				event.preventDefault();
		$("#btnchangestatus").html('');
		$("#btnchangestatus").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'function/ajax_function.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					
					if(returndata==1)
					{
						$("#loginbtn").html('Login');
						//toastr.success("Record has been update");
						window.location.href="order-list.php?m=1";
					}
					else 
					{
						window.location.href="order-list.php?m=0";
						//$("#loginbtn").html('Login');
						//toastr.error("Record has not been update");
					}
				
			  },
				error: function(){
				alert("error in ajax form submission");
			 }
			});
	return false;
	
});
$('#selorderstatus').on('change', function() {
	var mode=$('#selorderstatus').val();

	if(mode==4){
		$("#frmaction").val("addstatus");
		$("#togglesection").show();
		//alert("call")
	}else{
		$("#frmaction").val("updatestatus");	
		$("#togglesection").hide();
	}
});

<!---------------------inner page seting-------------------------->

		
$("#loginForm").submit(function (event) {
				event.preventDefault();
       toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		
		
		
		
		 
		$("#loginbtn").html('');
		$("#loginbtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'loginQuery/login-query.php',   
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					
					if(returndata==1)
					{
						$("#loginbtn").html('Login');
						window.location.href="home.php";
						toastr.success("Login Successfully");
					}
					else 
					{
						$("#loginbtn").html('Login');
						toastr.error(returndata);
					}
				
			  },
				error: function(){
				alert("error in ajax form submission");
									}
			});
	return false;
	
});

$("#forgotForm").submit(function (event) {
				event.preventDefault();
       toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-center",
            "closeButton": true,
            "toastClass": "animated fadeInDown",
        };
		
		
		
		
		 
		$("#loginbtn").html('');
		$("#loginbtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'loginQuery/resetPassword.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					
					toastr.success("Password has been send your mail");
					/*if(returndata==1)
					{
						$("#loginbtn").html('Login');
						window.location.href="home.php";
						toastr.success("Login Successfully");
					}
					else 
					{
						$("#loginbtn").html('Login');
						toastr.error(returndata);
					}*/
					$("#loginbtn").html('SEND RQUEST');
				
			  },
				error: function(){
				alert("error in ajax form submission");
									}
			});
	return false;
	
});



$("#changepasswordForm").submit(function (event) {
					
		var newpassword	=	$("#newpassword").val();
		var confirmpassword	=	$("#confirmpassword").val();
	
		if (newpassword != confirmpassword) {
            alert("Passwords do not match.");
            return false;
        }
		
		$("#loginbtn").html('');
		$("#loginbtn").html(' <span id="progress"><i class="fa fa-spinner fa-spin" style="color:#fff;position:absolute;top:18%;font-size:20px;" aria-hidden="true"></i></span>');
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: 'loginQuery/changePassword.php',
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (returndata) 
				{
					//alert(returndata);
					if(returndata=="yes")
					{
						$("#loginbtn").html('Login');
						// toastr.success("Successfully password has been changed");
						alert("password has been changed Successfully");
						 //window.location.href="home.php";
					}
					else 
					{
						$("#loginbtn").html('Login');
						alert(returndata);
					}
				
			  },
				error: function(){
				alert("error in ajax form submission");
									}
			});
	return false;
});




$(".brand-logo").change(function() {
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#imageprv1");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-logo"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});
$(".brand-img1").change(function() {
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv1");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img1"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});
$(".brand-img2").change(function() {
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv2");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img2"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});
$(".brand-img3").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv3");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img3"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});
$(".brand-img4").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv4");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img4"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
});
$(".brand-img5").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv5");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img5"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
});
$(".brand-img6").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv6");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img6"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	});

$(".brand-img7").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv7");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img7"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	});

$(".brand-img8").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv8");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img8"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	});
$(".brand-img9").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv9");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img9"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	});

$(".brand-img10").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#brandimageprv10");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "brand-img10"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	});
	
$(".fbimagefile").change(function() {
								
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#fbimageprv1");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "fbimagefile"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});

$('#applicationid').on('change', function() {
var cid= $("#applicationid").val();
//alert(cid);
		$.ajax({
			type: "POST",
			url: "getApplicationSubmenu.php",
			data: "cid="+ cid ,
			success: function(html){

			$("#showapplication").html(html);
		}
	});	
});	
$('#condtionmainid').on('change', function() {
var cid= $("#condtionmainid").val();
//alert(cid);
		$.ajax({
			type: "POST",
			url: "getConditionSubmenu.php",
			data: "cid="+ cid ,
			success: function(html){

			$("#showcondition").html(html);
		}
	});	
});	
$('#condtionsubid').on('change', function() {
var cid= $("#condtionsubid").val();

		$.ajax({
			type: "POST",
			url: "getConditionSubmenu2.php",
			data: "cid="+ cid ,
			success: function(html){

			$("#showcondition2").html(html);
		}
	});	

});	


 $(".onlyNumber").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
 



$(".imagefile").change(function() {

		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#imageprv1");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "imagefile"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
    });
/*----------------------------*/
$(".imagefile1").change(function() {
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") 
		{
			if (typeof (FileReader) != "undefined") {
	
				var image_holder = $("#imageprv2");
				image_holder.empty();
	
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
							"class": "imagefile1"
					}).appendTo(image_holder);
	
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);
			} else {
				alert("This browser does not support FileReader.");
			}
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only images");
		}
	
});
/*-----------------------------------*/

$(".imagefile2").change(function() {
		var imgPath = $(this)[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

		if ( extn == "pdf") 
		{
			
		} 
		else 
		{
			var imgPath = $(this)[0].value="";	
			alert("Pls select only PDF");
		}
	
    });
	//section open close
	$("#addsection").click(function(){
		
		$(".right").show();
		$(".right-search").hide();
	});
		$("#searchsection").click(function(){
		
		$(".right").hide();
		$(".right-search").show();
	});
	
	//search submit section 
	$("#searchsbmit").submit(function (event) {
		event.preventDefault();
		
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'search-record.php',
			type: 'POST',
			data: formData,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (returndata) {
			$("#search-record").html(returndata);
			//alert(returndata);
			/*--------------------------*/
			},
			error: function(){
				alert("error in ajax form submission");
				}
		});
		return false;
	});

//----------------

<!----------------------------------------------->
  $("#image111").click(function() {
         document.getElementById("image1id").value = "";
         var image_holder = $("#brandimageprv1");
				image_holder.empty();
    });
     $("#image222").click(function() {
         document.getElementById("image2id").value = "";
         var image_holder = $("#brandimageprv2");
				image_holder.empty();
    });
    $("#image333").click(function() {
         document.getElementById("image3id").value = "";
         var image_holder = $("#brandimageprv3");
				image_holder.empty();
    });
    $("#image444").click(function() {
         document.getElementById("image4id").value = "";
         var image_holder = $("#brandimageprv4");
				image_holder.empty();
    });
    $("#image555").click(function() {
         document.getElementById("image5id").value = "";
         var image_holder = $("#brandimageprv5");
				image_holder.empty();
    });
    $("#image666").click(function() {
         document.getElementById("image6id").value = "";
         var image_holder = $("#brandimageprv6");
				image_holder.empty();
    });
    
    // image delete 1
    
    $(".removeimage1").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
 
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage1&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

    // image delete 2
    
    $(".removeimage2").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
 
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage2&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

    // image delete 3
    
    $(".removeimage3").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage3&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

    // image delete 4
    
    $(".removeimage4").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
 
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage4&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

    // image delete 5
    
    $(".removeimage5").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
 
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage5&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

    // image delete 6
    
    $(".removeimage6").click(function () {

    var imageid = $(this).attr('imageid');
    var imagename = $(this).attr('imagename');
  
      $(this).html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
      $.ajax({
        type: "POST",
        url: 'function/ajax_function.php',
        data: "action=deleteImage6&imageid="+imageid+"&imagename="+imagename,
        success: function(returndata){
            
            if(returndata==1){
               location.reload();
            }

      }
  });
});

});
