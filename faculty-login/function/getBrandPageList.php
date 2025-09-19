
<?php  
include'../dbc.php';

 $limit = 50;  

if (isset($_POST["pageID"])) { $page  = $_POST["pageID"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$getquerystring= $_POST["getquerystring"];
/*	if($getstatus==0){
	   	$queryString="";
	   }else if($getstatus==1){
	   	$queryString="where visible=1";
		}else if($getstatus==2){
	   	$queryString="where visible=0";	
	   }*/
//======================================	
 		
?>        
 				<table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th width="30">#</th>
                        <th>Brand Name</th>
                        <th>Company Name</th>
                        <th>Image</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php  
				    $i=$limit* ($page-1);
				   $i++;	
				   $sql=mysqli_query($conn,"select * from tbl_brand $getquerystring  ORDER BY id desc LIMIT $start_from, $limit")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
				{extract($row)
				?>
                    <tr>
                        <td><?php echo $i++;;?></td>
                        <td><?php echo $brand_name;?></td>
                        <td><?php echo $company_name;?></td>
                        <td><img height="50" width="50" src="../media/brand/thumb/<?php echo $thumb1;?>"></td>
                        
                        
                       <td style="position:relative">	
                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><strong>Action</strong></a>
                    		<ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                <li><a href="brand.php?id=<?php echo $id;?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                <li><a class="demo3" path="dataQuery/process.php?action2=deleteBrand&id=<?php echo $id?>" ><i class="fa fa-trash"> </i> Remove</a></li>
                                <li class="divider"></li>
                                <li><a ><i class="fa "> </i> Cancel</a></li>
                            </ul>
                    </td>
					</tr>
                    <?php }?>
                    </tbody>
                </table>
