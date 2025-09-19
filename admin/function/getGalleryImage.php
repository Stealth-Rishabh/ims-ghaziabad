
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
<?php 
   $sql=mysqli_query($conn,"select * from tbl_gallery_name")or die(mysqli_error());
    while($row=mysqli_fetch_assoc($sql))
    {
        $galleyNameAry[$row['id']]=$row['name'];
    }
?>           
 				 <table  class="table table-striped table-bordered table-hover">
                <thead>
               <tr>
                        <th width="30">#</th>
                        <th>Year</th>
                        <th>Gallery Name</th>
                        <th>Image</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
               <?php 
			   $i=$limit* ($page-1);
			   $i++;
			   $sql=mysqli_query($conn,"select * from tbl_gallery_image $getquerystring  ORDER BY id desc LIMIT $start_from, $limit")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
				{
				extract($row);
				
				?>
                   <tr>
                        <td><?php echo $i++;;?></td>
                        <td><?php echo $year;?></td>
                        <td><?php echo $galleyNameAry[$gallery_id];?></td>
                       <td><img height="50" width="50" src="../media/product/thumb/<?php echo $thumb;?>"></td>
                        
                        
                       <td style="position:relative"> 
                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><strong>Action</strong></a>
                        <ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                
                                <li><a class="demo3" path="dataQuery/process.php?action2=deleteGallery&id=<?php echo $id?>" ><i class="fa fa-trash"> </i> Remove</a></li>
                                <li class="divider"></li>
                                <li><a ><i class="fa "> </i> Cancel</a></li>
                            </ul>
                    </td>
          </tr>
                    <?php }?>
                </tbody>
                </table>
