<style>
    #side-menu li {
    border-bottom: 1px solid #eaeaea !important;
}
</style>  

<?php
 $email=$_SESSION['username'];
 $sqld=mysqli_query($conn,"select * from tbl_faculty_member where email='$email'") or die(mysqli_error($conn));
    $rowd=mysqli_fetch_array($sqld);
    
?>  
<aside id="menu" style="background-color: white;">
    <div id="navigation">
        <img src="../media/faculty/<?php echo $rowd['image']; ?>" style="width: 200px;height: 182px;">
        <center><button class="btn" style="width: 96%;font-weight: 700;text-transform: uppercase;"><?php echo $rowd['name']; ?></button></center>
        <ul class="nav" id="side-menu">
            <li>
                <a href="home.php"> <span class="nav-label">Dashboard</span> <span class="label label-success pull-right">v.1</span> </a>
            </li>
            <li>
                <a href="faculty-member.php"> <span class="nav-label">Update Profile</span></a>
            </li>
            <li>
                <a href="research-paper-list.php"> <span class="nav-label">Research Paper</span></a>
            </li>

            <!-- <li>
                <a href="home-logo-list.php"> <span class="nav-label">Home Logo</span></a>
            </li>
            <li>
                <a href="home-banner-list.php"> <span class="nav-label">Home Banner</span></a>
            </li>
            <li>
                <a href="home-counter-list.php"> <span class="nav-label">Home Counter</span></a>
            </li>
            <li>
                <a href="event-list.php"> <span class="nav-label">Events</span></a>
            </li>
            <li>
                <a href="news-list.php"> <span class="nav-label">News</span></a>
            </li>
            <li>
                <a href="placement-list.php"> <span class="nav-label">Placement Stories</span></a>
            </li>
            <li>
                <a href="blog-list.php"> <span class="nav-label">Blogs</span></a>
            </li>
            <li>
                <a href="#"><span class="nav-label">Faculty Master</span><span class="fa arrow"></span> </a>
                 <ul class="nav nav-second-level">
                     <li><a href="faculty-title-list.php">- Facutly Title</a></li>
                     <li><a href="faculty-member-list.php">- Facutly Memeber</a></li>
                 </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Staff & Admin Master</span><span class="fa arrow"></span> </a>
                 <ul class="nav nav-second-level">
                     <li><a href="staff-title-list.php">- Staff & Admin Title</a></li>
                     <li><a href="staff-member-list.php">- Staff & Admin Memeber</a></li>
                 </ul>
            </li> -->
             <li>
                <a href="change-password.php"> <span class="nav-label">Change Password</span> </a>
            </li>
            <li>
                <a href="loginQuery/logout.php"> <span class="nav-label">Logout</span> </a>
            </li>
        </ul>
    </div>
</aside>