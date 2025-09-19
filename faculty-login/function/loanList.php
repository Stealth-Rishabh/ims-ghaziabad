
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
                        <th>Enquiry For</th>
                        <th>Booking Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php  
                 $i=$limit* ($page-1);
                   $i++;
                   $sql=mysqli_query($conn,"select * from tbl_travel_enquiry $getquerystring  ORDER BY id desc LIMIT $start_from, $limit")or die(mysqli_error($conn));
                while($row=mysqli_fetch_assoc($sql))
				{extract($row)
				?>
                    <tr>
    
                        <td><?php echo $i++;?></td>
                        <td><?php echo $package_name;?></td>
                        <td><?php echo $r_date;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $phone;?></td>
                        <td><?php echo $message;?></td>
                        <td><?php echo $date;?></td>
					           </tr>
                    <?php }?>
                    </tbody>
                </table>
