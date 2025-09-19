
<?php  
include'../dbc.php';

 $limit = 1;  

if (isset($_POST["pageID"])) { $page  = $_POST["pageID"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$getquerystring= $_POST["getquerystring"];

$sqlMA =mysqli_query($conn,"select * from  tbl_location_category") or die(mysqli_error());
							while($rowMA=mysqli_fetch_assoc($sqlMA))
							{
								$key				=	$rowMA['id'];
								$locationAry[$key]	=	$rowMA['name'];
							}
							$sqlMA =mysqli_query($conn,"select * from  tbl_city") or die(mysqli_error());
							while($rowMA=mysqli_fetch_assoc($sqlMA))
							{
								$key				=	$rowMA['id'];
								$cityAry[$key]	=	$rowMA['name'];
							}
							$sqlMA =mysqli_query($conn,"select * from  tbl_state") or die(mysqli_error());
							while($rowMA=mysqli_fetch_assoc($sqlMA))
							{
								$key				=	$rowMA['id'];
								$stateAry[$key]	=	$rowMA['name'];
							}
  			
?>        
 				 <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th >location_type_id</th>
                        <th>Adreess</th>
                        <th>Phone</th>
                        <th>pincode</th>
                        <th>city</th>
                        <th>state</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php  $sql=mysqli_query($conn,"select * from tbl_location $getquerystring  ORDER BY id desc LIMIT $start_from, $limit")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
				{extract($row)
				?>
                    <tr>
                        <td><?php echo $locationAry[$location_type_id];?></td>
                        <td><?php echo $company_address_line1."<br>".$company_address_line2;?></td>
                        <td><?php echo $phone1."<br>".$phone2;?></td>
                        <td><?php echo $pincode;?></td>
                        <td><?php echo $cityAry[$city];?></td>
                        <td><?php echo $stateAry[$state];?></td>
                        
                        
                        
                       <td style="position:relative">	
                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><strong>Action</strong></a>
                    		<ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                               <li><a href="location.php?id=<?php echo $id;?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                <li><a href="dataQuery/process.php?action2=deleteLocation&id=<?php echo $id;?>"><i class="fa fa-trash"> </i> Remove</a></li>
                                <li class="divider"></li>
                                <li><a ><i class="fa "> </i> Cancel</a></li>
                            </ul>
                    </td>
					</tr>
                    <?php }?>
                    </tbody>
                </table>
