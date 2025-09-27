<?php  include'admin/dbc.php'; ?>
<style>
    .header.sticky .desktoplogo img {
    width: 150px !important;
}
.header-top .top__navBr li a {
    font-weight: 400 !important;
}
.wsmenu > .wsmenu-list > li > ul.sub-menu > li > a {
    color: black!important;
    font-weight: 400 !important;}
    
.wsmenu > .wsmenu-list > li > ul.sub-menu > li > ul.sub-menu > li > a {
    color: black!important;
    font-weight: 400 !important;}   
.wsmenu > .wsmenu-list > li > ul.sub-menu > li > ul.sub-menu > li:hover > a {
    background-color: white!important;
}
</style>
<header id="header" class="header">
    <div class="header-top position-relative">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 toll_dv">

                    <p class="fs-14"><a class="font-weight-700" href="tel:18001024170"><i class="fas fa-phone-square-alt" style="font-size: 15px;"></i> 1800-102-4170</a></p>
                </div>

                <div class="col-lg-10 col-10">
                    <div class="top__navBr float-end">
                        <ul>
                            <li><a href="Admission/b-school-ranking">Ranking</a></li>
                            <li><a href="research-and-development">Research & Development</a></li>
                            <li><a href="eoms-policy">EOMS-Policy</a></li>
                            <li><a href="lifeims/learn-grow">Gallery</a></li>
                            <li><a target="_blank" href="https://journal.ims-ghaziabad.ac.in/index.php/journal-ims-group">Journal</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Conferences <b class="caret"></b></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a href="https://sites.google.com/imsgzb.ac.in/imsncon-agi" target="_blank">IMSNCON.AGI-2025</a></li>
                                    <li><a href="international-conference" target="_blank">IMSICON-2024</a></li>
                                    <li><a href="IMSICON-2023" target="_blank">IMSICON-2023</a></li>
                                    <li class="divider"></li>
                                    <li><a href="NCETADI-22" target="_blank">NCETADI-22</a></li>
                                    <li class="divider"></li>
                                    <li><a href="ICTSEADC2022" target="_blank">ICTSEADC 2022</a></li>
                                    <li class="divider"></li>
                                    <li><a href="ICMIC-21" target="_blank">ICMIC 21</a></li>
                                    <li class="divider"></li>
                                    <li><a href="MDWIIE-19" target="_blank">MDWIIE-19</a></li>
                                    <li><a href="NCEPFCES-20" target="_blank">NCEPFCES 2020</a></li>
                                    <li><a href="INCTHR2020" target="_blank">INCTHR 2020</a></li>
                                    <li><a href="INCETITDS-20" target="_blank">INCETITDS 2020</a></li>
                                    <li><a href="NCICPFD-20" target="_blank">NCICPFD-20</a></li>
                                </ul>
                            </li>

                            <li><a href="mou">MoU</a></li>
                            <!--<li><a href="https://erp.imsuc.ac.in/" target="_blank">ERP LOGIN</a></li>-->

                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">ERP LOGIN <b class="caret"></b></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a href="http://erp.ims-ghaziabad.ac.in/faculty/" target="_blank">Faculty and staff</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://erp.ims-ghaziabad.ac.in/student/" target="_blank">Student ERP login</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>

                            <!--<li><a href="{{ url('online-payment') }}">E-PAYMENT</a></li>-->
                            <!--<li><a href="https://paytm.com/education/Uttar%20Pradesh/Ghaziabad/IMS%20Group%20of%20Institution/IMS-%20PGDM,%20Lal%20Quan,%20Ghaziabad?utm_source=web&amp;utm_medium=smarturl&amp;utm_campaign=feeweb&amp;utm_term=fees" target="_blank">E-PAYMENT</a></li>-->
                            <li><a href="http://18.136.171.207/login" target="_blank">E-PAYMENT</a></li>
                             <li><a href="https://sites.google.com/imsgzb.ac.in/samagam2025-thedisruptorsplayg/fee-and-registration" target="_blank">Melange 2025</a></li>
                            <li class="download"><a class="apply-btn text-uppercase text-white" href="https://imsgroup.ac.in/" target="_blank">IMS Group</a></li>
                            <!--<li class="download"><a class="apply-btn text-uppercase text-white" href="https://imsgroup.ac.in/" target="_blank">Alma Shine</a></li>-->
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_absolute w-100 py-2">
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"><a href="https://www.ims-ghaziabad.ac.in/"><img src="public/frontend/images/IMS-logo.webp"  width="100" alt="" /></a></span>
        </div>
        <!-- Mobile Header -->
        <div class="wsmainfull clearfix">
            <div class="wsmainwp container clearfix">
                <div class="desktoplogo"  style="width: 221px;">
                    <a href="https://www.ims-ghaziabad.ac.in/"><img class="img-fluid" src="public/frontend/images/IMS-logo.webp" style=" width: 64%;margin-top: 5px" alt=""></a>
                </div>

                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list" id="wsmenu-list">

                        <li aria-haspopup="true">
                            <a href="javascript:void(0)">About us <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="about/ims-ghaziabad">IMS Ghaziabad</a></li>
                                <li aria-haspopup="true"><a href="about/executive-council">Executive Council</a></li>
                                <li aria-haspopup="true"><a href="about/governing-council">Governing Council</a></li>
                                <li aria-haspopup="true"><a href="about/academic-council">Academic Council</a></li>
                                <li aria-haspopup="true"><a href="about/board-of-studies">Board of Studies</a></li>
                                <li aria-haspopup="true"><a href="about/chairmans-message">Chairman's Message</a></li>
                                <li aria-haspopup="true"><a href="about/managing-trustees-message">Managing Trustee's Message</a></li>
                                <li aria-haspopup="true"><a href="about/directors-message">Director's message</a></li>
                                <li aria-haspopup="true"><a href="about/vision-and-mission">Vision and Mission</a></li>
                            </ul>
                        </li>

                        <li aria-haspopup="true"><a href="javascript:void(0)">Admissions <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true">
                                    <a href="javascript:void(0)">PGDM</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="Admission/admission-procedure">Admission Procedure</a></li>
                                        <li aria-haspopup="true"><a href="Admission/approval-and-accreditation">Approval & Accreditation</a></li>
                                        <li aria-haspopup="true"><a href="Admission/gdpi">GD/PI</a></li>
                                        <li aria-haspopup="true"><a href="Admission/scholarship">Scholarship</a></li>
                                        <li aria-haspopup="true"><a href="Admission/b-school-ranking">B-School Ranking</a></li>
                                        <li aria-haspopup="true"><a href="Admission/fee-structure">Fee Structure</a></li>
                                        <li aria-haspopup="true"><a href="Admission/e-brochure">E-Brochure</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="javascript:void(0)">Fellowship Promgramme in Management (FPM)</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="Admission/fpm-admission-procedure">Admission Procedure</a></li>
                                        <li aria-haspopup="true"><a href="Admission/fpm-approval-and-accreditation">Approval and Accreditation</a></li>
                                        <li aria-haspopup="true"><a href="Admission/fpm-b-school-ranking">B-School Ranking</a></li>
                                        <li aria-haspopup="true"><a href="Admission/fpm-e-brochure">E-Brochure</a></li>
                                        <li aria-haspopup="true"><a href="http://18.136.171.207/signup">Apply Now</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li aria-haspopup="true"><a href="javascript:void(0)">Faculty & Staff <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true">
                                    <a href="javascript:void(0)">Faculty</a>
                                    <ul class="sub-menu">
                                        <?php  
                                           
                                           $sql2=mysqli_query($conn,"select * from tbl_faculty_title where status='1' ORDER BY title asc")or die(mysqli_error());
                                        while($row2=mysqli_fetch_assoc($sql2))
                                        {extract($row2)
                                        ?>
                                        
                                        <li aria-haspopup="true"><a href="faculty/<?php echo $url; ?>"><?php echo $title; ?></a></li>
                                        <?php }?> 
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="javascript:void(0)">Staff & Administration</a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="faculty/accounts-department">Accounts Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/academics-department">Academics Department </a></li>
                                        <li aria-haspopup="true"><a href="faculty/administration">Administration Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/director-office">Director Office</a></li>
                                        <li aria-haspopup="true"><a href="faculty/admission-department-pgdm">Admission Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/examination-department">Examination Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/hr-department">HR Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/it-department">IT Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/library">Library</a></li>
                                        <li aria-haspopup="true"><a href="faculty/training-and-placement">Placement Department</a></li>
                                        <li aria-haspopup="true"><a href="faculty/registrar-office">Registrar Office</a></li>
                                        <!--<li aria-haspopup="true"><a href="faculty/mdp">MDP</a></li>-->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li aria-haspopup="true">
                            <a href="javascript:void(0)">Placements <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="placements/corporate-resource-centre">Corporate Resource Centre </a></li>
                                <li aria-haspopup="true"><a href="placements/placement-recruitment">Campus Placement</a></li>
                                <li aria-haspopup="true"><a href="placements/placement-report">Placement Report</a></li>
                                <li aria-haspopup="true"><a href="placements/recruiter-testimonial">Recruiter Testimonial </a></li>
                                <li aria-haspopup="true"><a href="placements/post-a-job">Post a Job</a></li>
                            </ul>
                        </li>

                        <li aria-haspopup="true">
                            <a href="javascript:void(0)">Programmes <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="programmes/pgdm-in-marketing">PGDM in Marketing</a></li>
                                <li aria-haspopup="true"><a href="programmes/pgdm-in-operations">PGDM in Operations</a></li>
                                <li aria-haspopup="true"><a href="programmes/pgdm-in-business-analytics">PGDM in Business Analytics</a></li>
                            </ul>
                        </li>

                        <li aria-haspopup="true">
                            <a href="javascript:void(0)">Research & Resources <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="research">Research</a></li>
                                <li aria-haspopup="true"><a href="library-resources">Library </a></li>
                            </ul>
                        </li>
                      
                        <li aria-haspopup="true">
                            <a href="javascript:void(0)">More <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="faculty/mdp">MDP</a></li>
                                <li aria-haspopup="true"><a href="alumni">Alumni</a></li>
                                <li aria-haspopup="true"><a href="blog">Blogs</a></li>
                                <li aria-haspopup="true">
                                    <a href="javascript:void(0)"> Life@IMS <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="lifeims/lecture-rooms">Lecture Rooms</a></li>
                                        <li aria-haspopup="true"><a href="lifeims/learn-grow">Learn & Grow </a></li>
                                        <li aria-haspopup="true"><a href="lifeims/residential-accommodation">Residential Accommodation </a></li>
                                        <li aria-haspopup="true"><a href="lifeims/cafeteria">Cafeteria</a></li>
                                        <li aria-haspopup="true"><a href="lifeims/computer-labs">Computer Labs</a></li>
                                        <li aria-haspopup="true"><a href="lifeims/club-ims">Clubs IMS </a></li>
                                        <li aria-haspopup="true">
                                            <a href="javascript:void(0)">Events</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="https://sites.google.com/imsgzb.ac.in/imsncon-agi">IMSNCON.AGI 2025</a></li>
                                                <li aria-haspopup="true"><a href="lifeims/event-melange-december-2024">Melange December 2024</a></li>
                                                <li aria-haspopup="true"><a href="lifeims/event-melange-january-2024">Melange January 2024</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        
                        <li aria-haspopup="true" class="last-child"><a href="contact" style="font-weight: 600;text-transform: uppercase;font-size: 14px;border-radius: 0px;">Contact Us</a></li>

                        <!--<li aria-haspopup="true"><a class="shadow" href="#">Apply Now</a></li>-->
                        <!--<li class="mobile" aria-haspopup="true"><a href="ranking">Ranking</a></li>
      <li class="mobile" aria-haspopup="true"><a href="research-and-development">Research &amp; Development</a></li> 
      <li class="mobile" aria-haspopup="true"><a href="eoms-policy">EOMS-Policy</a></li>
      <li class="mobile" aria-haspopup="true"><a href="{{ url('learn-grow') }}">Gallery</a></li>-->
                        <li class="mobile" aria-haspopup="true"><a target="_blank" href="https://journal.ims-ghaziabad.ac.in/index.php/journal-ims-group">Journal</a></li>
                        <li class="mobile" aria-haspopup="true"><a href="javascript:void(0)">Conferences <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                 <li><a href="https://sites.google.com/imsgzb.ac.in/imsncon-agi" target="_blank">IMSNCON.AGI-2025</a></li>
                                    <li><a href="international-conference" target="_blank">IMSICON-2024</a></li>
                                <li aria-haspopup="true"><a href="IMSICON-2023" target="_blank">IMSICON-2023</a></li>
                                <li aria-haspopup="true"><a href="NCETADI-22/" target="_blank">NCETADI-22</a></li>
                                <li aria-haspopup="true"><a href="ICTSEADC2022/" target="_blank">ICTSEADC 2022</a></li>
                                <li aria-haspopup="true"><a href="ICMIC-21/" target="_blank">ICMIC 21</a></li>
                                <li aria-haspopup="true"><a href="MDWIIE-19/" target="_blank">MDWIIE-19</a></li>
                                <li aria-haspopup="true"><a href="NCEPFCES-20/" target="_blank">NCEPFCES 2020</a></li>
                                <li aria-haspopup="true"><a href="INCTHR2020/" target="_blank">INCTHR 2020</a></li>
                                <li aria-haspopup="true"><a href="INCETITDS-20/" target="_blank">INCETITDS 2020</a></li>
                                <li aria-haspopup="true"><a href="NCICPFD-20/" target="_blank">NCICPFD-20</a></li>
                            </ul>
                        </li>

                        <!--<li class="mobile" aria-haspopup="true"><a href="{{ url('mou') }}">MoU</a></li>-->
                        <!--<li class="mobile" aria-haspopup="true"><a href="https://erp.imsuc.ac.in/" target="_blank">ERP LOGIN</a></li>-->

                        <li class="mobile" aria-haspopup="true"><a href="javascript:void(0)">ERP LOGIN <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="http://erp.ims-ghaziabad.ac.in/faculty/" target="_blank">Faculty and staff</a></li>
                                <li aria-haspopup="true"><a href="http://erp.ims-ghaziabad.ac.in/student/" target="_blank">Student ERP login</a></li>
                            </ul>
                        </li>
                        <!--<li class="mobile" aria-haspopup="true"><a href="{{ url('online-payment') }}">E-PAYMENT</a></li>-->
                        <li class="mobile" aria-haspopup="true"><a href="http://18.136.171.207/login">E-PAYMENT</a></li>
                          <li class="mobile" aria-haspopup="true"><a href="https://sites.google.com/imsgzb.ac.in/samagam2025-thedisruptorsplayg/fee-and-registration" target="_blank">Melange 2025</a></li>
                        <li class="download mobile" aria-haspopup="true"><a class="apply-btn text-uppercase text-white" href="https://imsgroup.ac.in/" target="_blank">IMS Group</a></li>
                        <li class="download mobile" aria-haspopup="true"><a class="apply-btn text-uppercase text-white" href="https://imsgroup.ac.in/" target="_blank">Alma Shine</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>