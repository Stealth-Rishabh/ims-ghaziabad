
<?php  
include'../dbc.php';

 $limit = 2;  

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
$sqlMA =mysqli_query($conn,"select * from  tbl_color") or die(mysqli_error());
while($rowMA=mysqli_fetch_assoc($sqlMA))
{
	$key				=	$rowMA['id'];
	$colorAry[$key]		=	$rowMA['name'];
}
  			
?>        
 				 <table  class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                		
                        <th width="250">Business Name</th>
                        <th>GST</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php  $sql=mysqli_query($conn,"select * from tbl_user_regestration $getquerystring  ORDER BY id desc LIMIT $start_from, $limit")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
				{extract($row)
				?>
                    <tr>
                        <td><?php echo $business_name;?></td>
                        <td><?php echo $gst;?></td>
                        <td><?php echo $phone;?></td>
                        <td><?php echo $email;?></td>
                        
                        
                        
                       <td style="position:relative">	
                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><strong>Action</strong></a>
                    		<ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                <li><a href="regestration.php?id=<?php echo $id;?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                <li><a href><i class="fa fa-copy"> </i> View</a></li>
                                <li><a href><i class="fa fa-trash"> </i> Remove</a></li>
                                <li class="divider"></li>
                                <li><a ><i class="fa "> </i> Cancel</a></li>
                            </ul>
                    </td>
					</tr>
               	<?php  } ?>
                </tbody>
                </table>
