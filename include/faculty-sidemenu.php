<?php  include'admin/dbc.php'; ?>
<div class="col-lg-4 col-md-4 col-sm-12">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <div class="sidebar-listing">
                <h4 class="text-blue text-center py-2" style="background-color: #01152c;color: white;font-size: 22px;">Faculty</h4>
                <ul class="metismenu" id="metismenu1">
                                       <?php  
                                           
                                           $sql2=mysqli_query($conn,"select * from tbl_faculty_title ORDER BY title desc")or die(mysqli_error());
                                        while($row2=mysqli_fetch_assoc($sql2))
                                        {extract($row2)
                                        ?>
                                        
                                        <li><a href="faculty/<?php echo $url; ?>"><?php echo $title; ?></a></li>
                                        <?php }?> 
                </ul>
            </div>
        </nav>
    </div>
</div>