<?php 
include'../admin/dbc.php';
	header('Access-Control-Allow-Origin: *');//old
	header('Access-Control-Allow-Methods: GET, POST,PATCH,PUT,DELETE,OPTIONS');
	header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
	header('Content-Type:application/json');//old
$sqlMA =mysqli_query($conn,"select * from  tbl_order_status") or die(mysqli_error());
while($rowMA=mysqli_fetch_assoc($sqlMA))
{
	$key				=	$rowMA['id'];
	$orderStatusAry[$key]	=	$rowMA['name'];
}
$sqlMA =mysqli_query($conn,"select * from   tbl_product") or die(mysqli_error());
while($rowMA=mysqli_fetch_assoc($sqlMA))
{
	$key					=	$rowMA['id'];
	$productNameAry[$key]	=	$rowMA['name'];
	$productCodeAry[$key]	=	$rowMA['code'];
}
	

if(isset($_GET['userID'])){
		$userID	= $_GET['userID'];
		$sql=mysqli_query($conn,"select * from tbl_order where  customer_id ='$userID' order by id desc ") or die(mysqli_error($conn));
		if(mysqli_num_rows($sql)>0)
		{
			$response['orderStatusList']=array();
			while($row=mysqli_fetch_assoc($sql))
			{
			$totalQuantity=0;

				
				extract($row);
				$showname=array();
				$showname["orderID"]	= $order_id;
				$showname["refNo"] 		= $ref_no;
				$showname["orderdate"]	= $date;
				$nice_date = date('d-m-Y', strtotime( $filter_date ));				
				$showname["filterDate"]	= $nice_date;
				

				$showname["orderstatus"]	= $orderStatusAry[$order_status];
				
				/* --------------- order details ---------------*/
				$orderDetailsAry=array();
				$showname["orderDetails"]=array();
				$sqls=mysqli_query($conn,"select * from tbl_order_details where  order_id ='$order_id'") or die(mysqli_error($conn));
				while($rows=mysqli_fetch_assoc($sqls))
				{			
					$orderDetailsAry['itemName']=$productNameAry[$rows['item_id']];
					$orderDetailsAry['itemCode']=$productCodeAry[$rows['item_id']];
					$orderDetailsAry['itemSize']=$rows['size'];
					$orderDetailsAry['itemQuantity']=$rows['quantity'];
					$totalQuantity+=$rows['quantity'];
					array_push($showname["orderDetails"],$orderDetailsAry);
				}
				/*----------------if order status is dispatched then entry */
				if($order_status==4){
					$dispatchDetailsAry=array();
					$showname["dispatchDetails"]=array();
					$sqld=mysqli_query($conn,"select * from  tbl_dipatch where  order_id ='$order_id'") or die(mysqli_error($conn));
					$rowd=mysqli_fetch_assoc($sqld);
					$dispatchDetailsAry['dispatchedThrough']=$rowd['dispatched_through'];
					$dispatchDetailsAry['Tracking']=$rowd['tracking'];
					$dispatchDetailsAry['dateOfDipatch']=$rowd['date_of_dipatch'];
					array_push($showname["dispatchDetails"],$dispatchDetailsAry);
				}else{
					$dispatchDetailsAry=array();
					$showname["dispatchDetails"]=array();
					$dispatchDetailsAry['dispatchedThrough']="";
					$dispatchDetailsAry['Tracking']="";
					$dispatchDetailsAry['dateOfDipatch']="";
					array_push($showname["dispatchDetails"],$dispatchDetailsAry);
				}
				
				/*------------------------------------------------*/
				$showname["totalQuantity"]	= $totalQuantity;
				
				array_push($response['orderStatusList'],$showname);
			}
				//$response["success"]=1;
			echo json_encode($response);
			
		}
		else
		{
			$response=array();
			$showname=array();
			$showname["success"]="0";
			array_push($response,$showname);
			echo json_encode($response);
		}
}
			
			
?>
