<?php    
 	require_once '../loginQuery/session_start.php';  
	require_once '../dbc.php'; 
	
	$action = isset($_POST['action']) ? $_POST['action'] : ''; 
	switch($action) 
	{
		case 'addSubCategory': 
		 	addSubCategory($conn);
			break;
		case 'editSubCategory': 
		 	editSubCategory($conn);
			break;
		case 'deleteSubCategory': 
		 	deleteSubCategory($conn);
			break;			
			
		case 'checkSku': 
		 	checkSku($conn);
			break;
		case 'editFilter': 
		 	editFilter($conn);
			break;	
			
		case 'showSubCategory': 
		 	showSubCategory($conn);
			break;
		case 'deleteFilter': 
		 	deleteFilter($conn);
			break;
		case 'searchShowFilterTable': 
		 	searchShowFilterTable($conn);
			break;
		case 'addFilterValue': 
		 	addFilterValue($conn);
			break;
		
		case 'addBTOB': 
		 	addBTOB($conn);
			break;
		case 'addSwitchSubCategory': 
		 	addSwitchSubCategory($conn);
			break;		
			
			
		case 'matrialName': 
		 	matrialName($conn);
			break;	
		case 'soleName': 
		 	soleName($conn);
			break;	
		case 'sizeName': 
		 	sizeName($conn);
			break;			
			
		case 'personCategoryName': 
		 	personCategoryName($conn);
			break;	
		case 'fieldCategoryName': 
		 	fieldCategoryName($conn);
			break;
		case 'brandCategoryName': 
		 	brandCategoryName($conn);
			break;
		case 'productName': 
		 	productName($conn);
			break;	
		case 'getProductCategoryList': 
		 	getProductCategoryList($conn);
			break;
		case 'addstatus': 
		 	addstatus($conn);
			break;
		case 'updatestatus': 
		 	updatestatus($conn);
			break;
		case 'deleteImage1': 
		 	  deleteImage1($conn);
			break;
		case 'deleteImage2': 
		 	  deleteImage2($conn);
			break;
			case 'deleteImage3': 
		 	  deleteImage3($conn);
			break;
			case 'deleteImage4': 
		 	  deleteImage4($conn);
			break;
			case 'deleteImage5': 
		 	  deleteImage5($conn);
			break;
			case 'deleteImage6': 
		 	  deleteImage6($conn);
			break;
										
			
			
		default :
		//header('Location: ../product_category.php');
	}
	
	// 0- Record has not been saved successfully
	// 1- Record has been saved successfully
	// 2- this image content two dot (.) 
	// 3- Pleas Select Image
	// 4- Record has been updated 
	// 5- Record has not been updated
	// 6- Rrecord has been delteted
	// 7- Record has not been delteted
	
	function deleteImage1($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image1='',
					thumb1='' where id ='$imageid' and image1='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

	function deleteImage2($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image2='',
					thumb2='' where id ='$imageid' and image2='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

	function deleteImage3($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image3='',
					thumb3='' where id ='$imageid' and image3='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

	function deleteImage4($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image4='',
					thumb4='' where id ='$imageid' and image4='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

	function deleteImage5($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image5='',
					thumb5='' where id ='$imageid' and image5='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

	function deleteImage6($conn)
{
 	$imageid =isset($_POST['imageid'])? $_POST['imageid'] : "";
 	$imagename =isset($_POST['imagename'])? $_POST['imagename'] : "";
 	
		$update = mysqli_query($conn,"update tbl_product set 
					image6='',
					thumb6='' where id ='$imageid' and image6='$imagename'") or die(mysqli_error($conn));

	if(mysqli_affected_rows($conn) > 0)
	{
	
		echo "1";
	}
	else
	{
		echo "0";
	}
	
}

function checkSku($conn)
{
	$id = $_POST['itemid'];
	$sku = $_POST['sku'];

	if($id==""){
		
		$sqlc=mysqli_query($conn, "select * from tbl_item where sku='$sku'") or die(mysqli_query($conn));
		
	}else{
		
		$sqlc=mysqli_query($conn, "select * from tbl_item where sku='$sku' and id!='$id'") or die(mysqli_query($conn));
	}
	if(mysqli_num_rows($sqlc)>0){
		echo "this sku already exists in this category";
	}else{
		echo "1";
	}
	
} 
function addSubCategory($conn)
{  
	$name	= mysqli_real_escape_string($conn,$_POST['subcategoryname']); 
	$url	= strtolower(str_replace(" ","-",$name));
	$categoryID = $_POST['categoryid']; 
	$sortorder	= mysqli_real_escape_string($conn,$_POST['txtsortorder']); 
	
	$title	= mysqli_real_escape_string($conn,$_POST['txttitle']); 
	$keyword	= mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
	$decription	= mysqli_real_escape_string($conn,$_POST['txtdecription']); 
	if(isset($_POST['status'])){$status	=1;}else{$status=0;}
	
	$sqlc=mysqli_query($conn,"select * from tbl_sub_category where url='$url' and category_id='$categoryID'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		echo "this category already exists in this category";
	}else{
			$sql="insert into  tbl_sub_category(name,category_id,url,visibility_status,sort_order,meta_title,meta_keyword,meta_description) values('$name','$categoryID','$url','$status','$sortorder','$title','$keyword','$decription')";
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				echo '1';		
			}
			else
			{
				echo "Record has not been added.";
			}
	}		
}
function editSubCategory($conn)
{  
			$id			= $_POST['txtsubcateoryid']; 
			$name	= mysqli_real_escape_string($conn,$_POST['subcategoryname']); 
			$url	= strtolower(str_replace(" ","-",$name));
			$categoryID = $_POST['categoryid']; 
			$sortorder	= mysqli_real_escape_string($conn,$_POST['txtsortorder']); 
			
			$title	= mysqli_real_escape_string($conn,$_POST['txttitle']); 
			$keyword	= mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
			$decription	= mysqli_real_escape_string($conn,$_POST['txtdecription']); 
			if(isset($_POST['status'])){$status	=1;}else{$status=0;}
			$sqlc=mysqli_query($conn,"select * from tbl_sub_category where url='$url' and category_id='$categoryID' and id!='$id'") or die(mysqli_query($conn));
			if(mysqli_num_rows($sqlc)>0){
				echo "this category already exists in this category";
			}else{
					$sqladd = mysqli_query($conn,"update tbl_sub_category set 
					name='$name',
					url='$url',
					category_id='$categoryID',
					visibility_status='$status',
					sort_order='$sortorder',
					meta_title='$title',
					meta_keyword='$keyword',
					meta_description='$decription' where id = '$id'") or die(mysqli_error($conn));
					 if(mysqli_affected_rows($conn) > 0)
					 {
					//$sql="insert into  tbl_filter(name,category_id,status 	) values('$filtername','$categoyid','$v')";
					//if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
					///{
						echo "2";
					}
					else
					{
						echo "Record has not been updated.";
					}
			}		
}
function deleteSubCategory($conn)
{
	$id =isset($_POST['subcategoryid'])? $_POST['subcategoryid'] : "";
	
	$sqlc=mysqli_query($conn,"select * from   tbl_item where sub_category_id='$id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($sqlc)>0){
		echo "This sub category record content other record ";
	
	}else{
	//-------------------------------------------------------------------------------------------------	
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_sub_category where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		echo "1";
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		echo "Record has not been deleted";
	}
		//-------------------------------------------------------------------------------------------------
		}

}
function addSwitchSubCategory($conn){
	$id					= $_POST['txtsubcateoryid']; 
	$categoryID			= $_POST['categoryid'];
	$oldCategoryID			= $_POST['oldcategoryid']; 


			
			
					$sqladd = mysqli_query($conn,"update tbl_sub_category set 
					category_id='$categoryID' where id = '$id'") or die(mysqli_error($conn));
					 if(mysqli_affected_rows($conn) > 0)
					 {
						/*-------------------*/
						$sqlcheck=mysqli_query($conn,"select * from tbl_item where category_id = '$oldCategoryID' and sub_category_id='$id'") or die(mysqli_error($conn));
						if(mysqli_num_rows($sqlcheck)>0){
							$sqladd = mysqli_query($conn,"update tbl_item set 
							category_id='$categoryID' where category_id = '$oldCategoryID' and sub_category_id='$id'") or die(mysqli_error($conn));
							 if(mysqli_affected_rows($conn) > 0)
							 {
								echo "1";
							}
							else
							{
								echo "Record has not been updated.";
							}
						}else{
							echo "1";
						}
						/*-------------------*/
					}
					else
					{
						echo "Record has not been updated.";
					}
					
}
function addFilter($conn)
{  
			$categoyid	= $_POST['txtcategoyid']; 
			$filtername	= mysqli_real_escape_string($conn,$_POST['txtfiltername']); 

			if(isset($_POST['chkvisible'])){$v=1;}else{$v=0;}
			if(isset($_POST['chkmultiple'])){$m=1;}else{$m=0;}
			if(isset($_POST['chkvalidation'])){$vl=1;}else{$vl=0;}

			 
			$sqlc=mysqli_query($conn,"select * from tbl_filter where name='$filtername' and category_id='$categoyid'") or die(mysqli_query($conn));
			if(mysqli_num_rows($sqlc)>0){
				echo "this filter already exists in this category";
			}else{
					$sql="insert into  tbl_filter(name,category_id,status,multiple,validation	) values('$filtername','$categoyid','$v','$m','$vl')";
					if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
					{
						echo "1";
					}
					else
					{
						echo "Record has not been added.";
					}
			}		
}
function editFilter($conn)
{  
			$id			= $_POST['txtfilterid']; 
			$categoyid	= $_POST['txtcategoyid']; 
			$filtername	= mysqli_real_escape_string($conn,$_POST['txtfiltername']); 
			
			if(isset($_POST['chkvisible'])){$v=1;}else{$v=0;}
			if(isset($_POST['chkmultiple'])){$m=1;}else{$m=0;}
			if(isset($_POST['chkvalidation'])){$vl=1;}else{$vl=0;}
			
			$sqlc=mysqli_query($conn,"select * from tbl_filter where name='$filtername' and category_id='$categoyid' and id!='$id'") or die(mysqli_query($conn));
			if(mysqli_num_rows($sqlc)>0){
				echo "this filter already exists in this category";
			}else{
					$sqladd = mysqli_query($conn,"update tbl_filter set 
					name='$filtername',
					category_id='$categoyid',
					status='$v',
					multiple='$m',
					validation='$vl' where id = '$id'") or die(mysqli_error($conn));
					 if(mysqli_affected_rows($conn) > 0)
					 {
					//$sql="insert into  tbl_filter(name,category_id,status 	) values('$filtername','$categoyid','$v')";
					//if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
					///{
						echo "2";
					}
					else
					{
						echo "Record has not been updated.";
					}
			}		
}


function showSubCategory($conn)
{  
			$category	= $_POST['category']; 
			showSubCategoryTable($conn,$category);
}
function showSubCategoryTable($conn,$category)
{
			$sqlc=mysqli_query($conn,"select * from tbl_sub_category where category_id='$category' order by id desc") or die(mysqli_query($conn));
			if(mysqli_num_rows($sqlc)>0){
				/*-----------------------------------*/
				
				echo '<table id="example2" cellpadding="1" cellspacing="1" class="table table-bordered table-striped"><thead><tr><th width="20" >S.No</th><th >Name</th><th >Sort Order </th><th>Visible</th><th  width="170">Control</th></tr></thead><tbody>';
				$i=1;
				while($rows=mysqli_fetch_assoc($sqlc)){
				extract($rows);
				
				if($visibility_status==1){$v="visible";}else{$v="Invisible";}
				
				
					echo "<tr><td>".$i++."</td>"."<td class='text-left' >".$name."</td>"."<td  class='text-left' >".$sort_order."</td><td class='text-left' >".$v."</td><td><a class='btn btn-success btn-xs editrecord' subcategoryid='".$category_id."' subid='".$id."'  subname='".$name."' substatus='".$visibility_status."' suborder='".$sort_order."' subtitle='".$meta_title."' subkeyword='".$meta_keyword."' subdescription='".$meta_description."' id='edit".$id."'><i  class='fa fa-pencil ' aria-hidden='true' ></i> Edit</a> 
                <a class='btn btn-danger btn-xs deleterecord'  subcategoryid='".$id."' categoryid='".$category_id ."'><i class='fa fa-trash' aria-hidden='true'></i> Delete</a></td></tr>";
				}
				
                echo '</tbody></table>';
				/*-----------------------------------*/
			}else{
				echo "no record";
			}	
}

function searchShowFilterTable($conn)
{
			$category=$_POST['category'];
			$search=$_POST['search'];
			
			$sqlc=mysqli_query($conn,"select * from tbl_sub_category where name like '%$search%' and category_id='$category' ") or die(mysqli_query($conn));
			if(mysqli_num_rows($sqlc)>0){
				/*-----------------------------------*/
				
				echo '<table id="example2" cellpadding="1" cellspacing="1" class="table table-bordered table-striped"><thead><tr><th width="20" >S.No</th><th >Name</th><th >Sort Order </th><th>Visible</th><th  width="170">Control</th></tr></thead><tbody>';
				$i=1;
				while($rows=mysqli_fetch_assoc($sqlc)){
				extract($rows);
				
				if($visibility_status==1){$v="visible";}else{$v="Invisible";}
				
				
					echo "<tr><td>".$i++."</td>"."<td class='text-left' >".$name."</td>"."<td  class='text-left' >".$sort_order."</td><td class='text-left' >".$v."</td><td><a class='btn btn-success btn-xs editrecord' subcategoryid='".$category_id."' subid='".$id."'  subname='".$name."' substatus='".$visibility_status."' suborder='".$sort_order."' subtitle='".$meta_title."' subkeyword='".$meta_keyword."' subdescription='".$meta_description."' id='edit".$id."'><i  class='fa fa-pencil ' aria-hidden='true' ></i> Edit</a> 
                <a class='btn btn-danger btn-xs deleterecord'  subcategoryid='".$id."' categoryid='".$category_id ."'><i class='fa fa-trash' aria-hidden='true'></i> Delete</a></td></tr>";
				}
				
				
                echo '</tbody></table>';
				/*-----------------------------------*/
			}else{
				echo "no record";
			}	
}
function deleteFilter($conn)
{
	$id =isset($_POST['filterID'])? $_POST['filterID'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_filter where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		echo "1";
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		echo "Record has not been deleted";
	}

}

	
function addProduct($conn)
{  
			$name	= mysqli_real_escape_string($conn,$_POST['productcategoryname']); 
			$sql="insert into  tbl_category(name,department_id 	) values('$name',1)";
			if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
			{
				$sqls=mysqli_query($conn,"SELECT * FROM tbl_category order by id desc limit 1")or die(mysqli_error($conn));
				$rows=mysqli_fetch_assoc($sqls);
				echo $rows['id'].",".$rows['name'];		
			}
			else
			{
				
				echo "1";
			}
}
function addFilterValue($conn)
{  
	$type			= mysqli_real_escape_string($conn,$_POST['txtfitertype']); 
	$fiterid		= mysqli_real_escape_string($conn,$_POST['txtfiterid']); 
	$filtervalue	= mysqli_real_escape_string($conn,$_POST['txtfiltervalue']); 
	$sqlc=mysqli_query($conn,"select * from tbl_filter_value where filter_id='$fiterid' and filter_value='$filtervalue'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		echo "2";
	}else{
	
		$sql="insert into tbl_filter_value(filter_id , filter_value) values('$fiterid' , '$filtervalue')";
		if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
		{
			$sqls=mysqli_query($conn,"SELECT * FROM tbl_filter_value order by id desc limit 1")or die(mysqli_error($conn));
			$rows=mysqli_fetch_assoc($sqls);
			if($type==0){
				echo $rows['id'].",".$rows['filter_value'];		
			}else{
				echo '<li><label><input name="chkfilter'.$fiterid.'[]" type="checkbox" value="'.$rows['id'].'" checked>'.$rows['filter_value'].'</label></li>';
			}
		}
		else
		{
			echo "1";
		}
	}	
}


function addBTOB($conn)
{  
	$name = $_POST['name']; 
	$sqlc=mysqli_query($conn,"select * from tbl_b2b where name='$name'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		echo "2";
	}else{
			$sql="insert into  tbl_b2b(name) values('$name')";
			if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
			{
				$sqls=mysqli_query($conn,"SELECT * FROM tbl_b2b order by id desc limit 1")or die(mysqli_error($conn));
				$rows=mysqli_fetch_assoc($sqls);
				echo '<li><label ><input name="btob[]" type="checkbox" value="'.$rows['id'].'" checked>'.$rows['name'].'</label></li>';		
			}
			else
			{
				echo "1";
			}
	}		
}



function matrialName($conn)
{  

			$name	= mysqli_real_escape_string($conn,$_POST['matrialname']); 
			$sql="insert into  tbl_matrial(name) values('$name')";
			if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
			{
				$sqls=mysqli_query($conn,"SELECT * FROM tbl_matrial order by id desc limit 1")or die(mysqli_error($conn));
				$rows=mysqli_fetch_assoc($sqls);
				echo $rows['id'].",".$rows['name'];		
			}
			else
			{
				
				echo "1";
			}
			
			
}
function soleName($conn)
{  
	$name	= mysqli_real_escape_string($conn,$_POST['solename']); 
	$sql="insert into  tbl_sole(name) values('$name')";
	if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
	{
		$sqls=mysqli_query($conn,"SELECT * FROM tbl_sole order by id desc limit 1")or die(mysqli_error($conn));
		$rows=mysqli_fetch_assoc($sqls);
		echo $rows['id'].",".$rows['name'];		
	}
	else
	{
		echo "1";
	}
}




function personCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_person_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function fieldCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_field_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function brandCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_field_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function productName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_product where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function getProductCategoryList($conn)
{  
	$departmentID=$_POST['departmentID'];

	?> <select name="selproductcategory" id="selproductcategory" class="form-control js-source-states border-radius-right" >
                                        <option value="">Select</option><?php  
	$sqlp =mysqli_query($conn,"select * from   tbl_category where  department_id = '$departmentID'") or die(mysqli_error($conn));
	while($rowp=mysqli_fetch_assoc($sqlp))
	{?>
		<option  value="<?php echo $rowp['id']?>"><?php echo $rowp['name']; ?></option>
<?php }?></select>
<?php 
}
function addstatus($conn){
	$orderid				= $_POST['orderid'];
	$orderstatus			= $_POST['selorderstatus'];
	$dispatchedthrough		= $_POST['txtdispatchedthrough'];
	$tracking				= $_POST['txttracking'];
	$dateofdispatch			= $_POST['dateofdispatch'];
	$sqladd = mysqli_query($conn,"update tbl_order set order_status='$orderstatus' where order_id = '$orderid'") or die(mysqli_error($conn));
	 if(mysqli_affected_rows($conn) > 0)
	 {
	 	//------------------------------------------
		$sql="insert into tbl_dipatch(order_id ,dispatched_through,	tracking ,date_of_dipatch) values('$orderid','$dispatchedthrough','$tracking','$dateofdispatch')";
		if(mysqli_query($conn,$sql) or die(mysqli_error($conn))){
			echo "1";
		}else{
			echo "0";
		}
		//---------------------------------------------
	 }
	 else
	 {
	 	echo "0";
	 }
}
function updatestatus($conn){
	$orderid				= $_POST['orderid'];
	$orderstatus			= $_POST['selorderstatus'];
	$sqladd = mysqli_query($conn,"update tbl_order set order_status='$orderstatus' where order_id = '$orderid'") or die(mysqli_error($conn));
	 if(mysqli_affected_rows($conn) > 0)
	 {
	 	//------------------------------------------
			echo "1";
		//---------------------------------------------
	 }
	 else
	 {
	 	echo "0";
	 }
}

?>	 
	
