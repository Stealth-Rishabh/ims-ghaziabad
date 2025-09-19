
<?php  
include'../dbc.php';
$sqlMA =mysqli_query($conn,"select * from  tbl_order_status") or die(mysqli_error());
while($rowMA=mysqli_fetch_assoc($sqlMA))
{
	$key				=	$rowMA['id'];
	$orderStatusAry[$key]	=	$rowMA['name'];
}
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
    
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Date</th>
                        <th>Order Status</th>
                        
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php  $sql=mysqli_query($conn,"select * from tbl_order $getquerystring  ORDER BY order_id desc LIMIT $start_from, $limit")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
				{extract($row)
				?>
                    <tr>
    
                        <td><?php echo $order_id;?></td>
                        <td><?php echo $customer_id;?></td>
                        <td><?php echo $filter_date." ".$date;?></td>
                        <td><?php echo $orderStatusAry[$order_status];?></td>
                        
                        
                        
                       <td ><a href="order-details.php?id=<?php echo $id;?> "  data-toggle="tooltip" data-placement="top" title="View Details" ><i class="fa fa-eye " aria-hidden="true"></i></a>
                       <?php if($order_status!="4"){?>
                       <button status="<?php echo $order_status;?>" orderid="<?php echo $order_id;?>" class="btn btn-info btn-xs getorderid" type="button" data-toggle="modal" data-target="#myModal">Change Status</button>
                       <?php }?>
                       </td>
					</tr>
                    <?php }?>
                    </tbody>
                </table>
