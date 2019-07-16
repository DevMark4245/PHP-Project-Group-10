<?php
	include_once('collegedbinc.php');
	$ID = $_GET['id'];
	$sql = "SELECT * FROM college_info where college_id='$ID';";
	$result = mysqli_query($conn, $sql) or die("Bad Query:$sql");
	$row = mysqli_fetch_array($result);
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Varsity | College Detail</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <?php include 'header.html';
 ?>
 
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>College Detail</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Course Detail</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                          <a href="#"><img src="<?php echo $row['college_image']?>" alt="img" height="300"></a>
                          <figcaption class="mu-latest-course-imgcaption">
                          </figcaption>
                        </figure>
                        <div class="mu-latest-course-single-content">
                          <h2><a href="#"><?php echo $row['college_name']?></a></h2>
                          <h4>College Description</h4>
                          <ul>
                           
                            <li> <span>Location</span> <span><?php echo $row['college_location']?></span></li>
                            <li> <span>Institution Type</span> <span><?php echo $row['college_type']?></span></li>
                          
                          </ul>
                          <h4>Description</h4>
                          <p><?php echo $row['college_desc']?></p>
						  <h4>College Info</h4>
						  <p><?php echo $row['college_info']?></p>
                          <h4>Courses</h4>
                          <div class="table-responsive">
                            <table class="table">
                            <thead>
                              <tr>
                                <th> Title </th>
								<th> Course Type </th>
								<th> Qualification</th>
                                <th> Duration </th>
                                <th> Mode</th>
                                <th> Price </th>
                              </tr>
                            </thead>
                            <tbody>
							<?php
						     $stmt = "SELECT * FROM courses WHERE college_id='$ID';";
						     $result2 = mysqli_query($conn, $stmt) or die("Bad Query:$stmt");
						  
							while($row2 = mysqli_fetch_array($result2))
							{
							?>
                              <tr>
                                <td><?php echo $row2['Course_name']?></td>
                                <td><?php echo $row2['Course_type']?></td>
                                <td><?php echo $row2['Course_qual']?></td>
                                <td><?php echo $row2['Course_duration']?></td>
								<td><?php echo $row2['Course_mode']?></td>
								<td><?php echo $row2['Course_fee']?></td>
                              </tr>
							  <?php
							}
							?>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                  <h3>Related Courses</h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="college-detail.php?id=1"><img alt="img" src="assets/image/colleges/IT.jpeg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              Computer Science, IT
                              <span><i class="fa fa-clock-o"></i>2 Years</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="college-detail.php?id=1">Diploma in Information Technology</a></h4>
                            <div class="mu-latest-course-single-contbottom">
                              <span class="mu-course-price">RM35,885</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="college-detail.php?id=1"><img alt="img" src="assets/image/colleges/Engineering.jpeg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              Engineering     
							 <span><i class="fa fa-clock-o"></i>3 Years</span> 
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="college-detail.php?id=1">Bachelor of Engineering</a></h4>                      
                            <div class="mu-latest-course-single-contbottom">                            
                              <span class="mu-course-price">RM68,915</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="college-detail.php?id=4"><img alt="img" src="assets/image/colleges/Culinary.jpeg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              Culinary
                              <span><i class="fa fa-clock-o"></i>2 Years</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="college-detail.php?id=4">Diploma in Culinary Arts</a></h4>                       
                            <div class="mu-latest-course-single-contbottom">                             
                              <span href="college-detail.php?id=4" class="mu-course-price">RM38,900</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="college-detail.php?id=4"><img alt="img" src="assets/image/colleges/Business.jpeg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              Business, Account
                              <span><i class="fa fa-clock-o"></i>2 Years</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="college-detail.php?id=4">Diploma in Business Administration</a></h4>                         
                            <div class="mu-latest-course-single-contbottom">                              
                              <span href="college-detail.php?id=4" class="mu-course-price">RM27,900</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <!-- end start related course item -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Course Types</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="search.php?search=IT&submit-search=true">IT</a></li>
                      <li><a href="search.php?search=Business&submit-search=true">Business</a></li>
                      <li><a href="search.php?search=Engineering&submit-search=true">Engineering</a></li>
                      <li><a href="search.php?search=Media&submit-search=true">Media</a></li>
                      <li><a href="search.php?search=Science&submit-search=true">Science</a></li>
                      <li><a href="search.php?search=Finance&submit-search=true">Finance</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
				  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Locations</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="search.php?search=Penang&submit-search=true">Penang</a></li>
                      <li><a href="search.php?search=kuala+lumpur&submit-search=true">Kuala Lumpur</a></li>
                      <li><a href="search.php?search=ipoh&submit-search=true">Ipoh</a></li>
                      <li><a href="search.php?search=perak&submit-search=true">Perak</a></li>                    
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular Colleges</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/image/colleges/utar.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="college-detail.php?id=5">Universiti Tunku Abdul Rahman (UTAR)</a></h4>                      
                          
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/image/colleges/sunway.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="college-detail.php?id=4">Sunway College Ipoh</a></h4>                      
                         
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/image/colleges/taylors.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="college-detail.php?id=2">Taylor's College</a></h4>                      
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <?php include 'footer.html';
 ?>





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>