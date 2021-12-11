<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>MeroRojai - BMC-groups | Home :: 
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="banner"style="background-image: url(../images/ramesh.jpg)no-repeat center top;">
  <div class="container">
    <div class="banner_info">
      <h3>join us</h3>
      <a href="register.php" class="hvr-shutter-out-horizontal">Create account</a><br>
      <br>

      <h4 style="color:Tomato;"> Already have an account?</h4><br>

      <a href="login.php" class="hvr-shutter-out-horizontal">login</a>
    </div>
  </div>
 
</div> 
<!--<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
        <?php
        	$sql="SELECT * FROM customer";
        	$result=mysqlexec($sql);
        	if($result){
        		while($row=mysqli_fetch_assoc($result)){
        			$name=$row['firstname'] . " " . $row['lastname'];
        			$profileid=$row['cust_id'];
        			$age=$row['age'];
        			$place=$row['state'] . "," . $row['district'];
        			$job=$row['occupation'];

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
					echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
					echo "<div class=\"center-middle\">About {$name}</div>";
					echo "</div>";
					echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
					echo "</li>";
				
        		}
        	}

        ?>
          </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>-->
<div class="grid_2">
	<div class="container">
		<h2>Success Stories</h2>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
	     <div class="col-md-8 suceess_story">
	         <ul> 
			   <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 12, 2020</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/romieo.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">romieo & juliet</a></h4>				        	
				        	<p>Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare's most popular plays during his lifetime and, along with Hamlet, is one of his most frequently performed plays.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 10, 2020</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/muna.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a href="#">muna & madan</a></h4>				        	
				        	<p>Muna Madan is a Nepali episodic love poem published in 1936 by the poet Laxmi Prasad Devkota. Considered a classic of Nepali literature, Muna Madan remains a popular poem and is taught in schools.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	        </ul>
	    </div>
	    <div class="col-md-4 row_1-right">
	      <h3>News</h3>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/dipika.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2020-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2020-05-25T10:11:51+00:00">Dec</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">Dipika and Ranvir</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">Actor Ranveer Singh earned major husband points when he said that he is trying to follow in the footsteps of his beautiful wife, Deepika Padukone. The actor, who has never held back on gushing about his superstar wife, was all praise for the beauty when he revealed a little lesson he is trying to learn from her.</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/nischal.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2020-05-25T10:15:43+00:00">24</time>
					</span>
					<span class="month">
					<time datetime="2020-05-25T10:11:51+00:00">Dec</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#"> Swostima and Nischal</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">Khadka debuted as an actress in the 2015 teen romance Hostel Returns, for which she was nominated for the National Film Awards for Best Supporting Actress. This initial success was followed by a series of commercially successful films. After her debut, she appeared in the 2017 romantic-drama Love Love Love, which received positive reviews from critics. In 2017, Khadka appeared in social drama film Chhakka Panja 2, which became commercially successful, grossing 60 million Nepalese rupees within the first six days of release, and became the second highest-grossing Nepali film.</div>
				<a href="#" class="vertical">Read More</a>
			  
	        </div>
	     </div>
	     <div class="clearfix"> </div>
	   </div> 
	  </div>
    </div>
    <div class="bg">
		<div class="container"> 
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Bride</h5>
            		<p>"Actually, this is very trustable site . Friend of mine got a perfect life partner and they are very happy togther. Thank you Merorojai... Best wishes.....</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Groom</h5>
            		<p>"Actually, this is very trustable site . Friend of mine got a perfect life partner and they are very happy togther. Thank you Merorojai... Best wishes....</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="clearfix"> </div>
		</div>
	</div>
	
    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"This is the matrimonial site which will help you to find your best match. We try to find your match. Give us a chance to find your mate"</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<!--<li><a href="services.php">Services</a></li>-->
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2020 projectwork . All Rights Reserved  | Brought To You By BMC-groups
	        </div>
    	</div>
    </div>
</body>
</html>	