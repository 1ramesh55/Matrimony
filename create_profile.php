<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>MeroRojai - BMC-groups 
 | Register ::
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
var countryObject = {
  "Nepal": {
  "province no 1":[ "Taplejung", "Sankhuwasabha", "Solukhubu", "Okhaldhunga", "Khotang", "Bhojpur" ,"Dhankuta" ,"Terhathum", "Panchthar" ,"Ilam", "Jhapa", "Morang", "Sunsari"," Udayapur"],
  "Janakpur":["Saptari", "Siraha", " Dhanusa" ,"Mahottari", "Sarlahi", "Rautahat", "Bara" ,"Parsa"],
    "Bagmati": ["Dolakha","Sindhupalchok","Rasuwa" ,"Dhading" , "Nuwakot" ,"Kathmandu " ,"Bhaktapur " ,"Lalitpur","Kavrepalanchok" ,"ramechhap" ," Sindhuli" ,"Makawanpur","Chitawan"],
    "Gandaki":["Gorkha","Manang","Mustang","Myagdi","Kaski","Lamjung","Tanahu","Nawalparasi East","Syangja","Parbat","Baglung"],
    "lumbini": ["Rukum East","Rolpa","Pyuthan", "Gulmi","Arghakhanchi"," Palpa"," Nawalparasi west","Rupandehi","Kapilbastu"," Dang","Banke","Bardiya"],
    "karnali": ["Dolpa","Mugu","Humla","Jumla","Kalikot","Dailekh","Jajarkot","Rukum West","Salyan"," Surkhet",],
    "Sudurpachim":["Bajura","Bajhang","Darchula","Baitadi", "Dadeldhura","Doti","Achham","Kailali","Kanchanpur"
],
       
  },
 
  }
window.onload = function() {
  var countrySel = document.getElementById("country");
  var stateSel = document.getElementById("state");
  var districtSel = document.getElementById("district");
  for (var x in countryObject) {
    countrySel.options[countrySel.options.length] = new Option(x, x);
  }
  countrySel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    stateSel.length = 1;
    districtSel.length = 1;
    //display correct values
    for (var y in countryObject[this.value]) {
      stateSel.options[stateSel.options.length] = new Option(y, y);
    }
  }
  stateSel.onchange = function() {
    //empty Chapters dropdown
    districtSel.length = 1;
    //display correct values
    var z = countryObject[countrySel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      districtSel.options[districtSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Create Your Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" required="" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="lname" required="" size="60" maxlength="128" class="form-text required">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex" required="">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	               
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">
 Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day" required="">
		                    <option value=""></option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month" required="">
		                    <option value="">Month</option>
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year" required="">
		                    <option value="">Year</option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="religion" required="">
		                    <option value="Hindu">Hindu</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
		                    
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="caste" required="">
		                    <option value="Hindu-Brahmin">Hindu-Brahmin</option>
		                    <option value="Hindu-Chettri">Hindu-Chettri</option>
		                    <option value="Hindu-Janajati">Hindu-Janajati</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
	                    </select>
	                  </div>
	                 </div>
	                 <!--<div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="subcaste">
		                    <option value="Not Applicable">Not Applicable</option>
		                    <option value="sub cast1">sub cast1</option>
		                    <option value="sub caste2">sub caste2</option>
		                  
	                    </select>
	                   </div>
	                  </div>-->
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country" id="country" required="">
		                    <option value="Nepal">select your country</option>
		                    
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="state" id="state" required="">
		                    <option value="">Please select your country</option>
            				
       					</select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="district" id="district" required="">
		                    <option value=""> select state first </option>
            				
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age" required="">
	                     <option value=""></option>
		                   
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                </select>
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus" required="">
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="profileby" required="">
	                    <option value="Self">Self</option>
	                    <option value="Son/Daughter">Son/Daughter</option> 
	               		<option value="Other">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education" required="">
	                    <option value="Primary">Primary</option>
	                    <option value="Tenth level">Tenth level</option> 
	               		<option value="+2">+2</option> 
	               		<option value="Degree">Degree</option> 
	               		<option value="PG">PG</option> 
	               		<option value="Doctorate">Doctorate</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="edudescr" required="" value="" size="60" maxlength="60" class="form-text">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bodytype" required="">
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option> 
	               		<option value="Average">Average</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="physicalstatus" required="">
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option> 
	               		<option value="Deaf">Deaf</option> 
	                </select>
			    </div>
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink" required="">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke" required="">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option>
	                </select>
			    </div>
		    </div>
		    
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge" required="">
	                    <option value="Nepali">Nepali</option>
            			<option value="Tharu">Tharu</option>
            			<option value="Maithali">Maithali</option>
            			<option value="Abadhi">Abadhi</option>
            			<option value="Gurung">Gurung</option>
            			<option value="Bhojpuri">Bhojpuri</option>
            			<option value="Magar">Magar</option>
            			<option value="Sherpa">Sherpa</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bloodgroup" required="">
	                    <option value="O +ve">O +ve</option>
	                    <option value="O -ve">O -ve</option> 
	               		<option value="AB -ve">AB -ve</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" required="" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		    <div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" required="" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   	<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour" required="">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet" required="">
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" required="" value="" size="60" maxlength="60" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation Descr <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupationdescr" required="" value="" size="130" maxlength="120" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="income" required="" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   
		   
		    
</div>


             <!-- Seventh Row ends-->
  
           <!-- eighth Row starts-->
           <div class="col-lg-12">
            <div class="form-group col-sm-3">
		    		<label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
			  		<input type="text" id="edit-name" name="fatheroccupation" required="" value="" size="60" maxlength="500" class="form-text">
		   </div>
           <div class="form-group col-sm-3">
		      <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="motheroccupation" required="" value="" size="60" maxlength="500" class="form-text">
		    </div>
		    
          <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sis" required="">
	                	<option value="0">5</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                     	
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bros" required="" >
	                	<option value="0">5</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" required="" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
			  </div>
             <!-- eighth Row ends-->
         <hr/>
			  

		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	