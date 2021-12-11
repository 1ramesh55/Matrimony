<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php include_once("functionC.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>MeroRojai -| Contact :: BMC-groups
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Contact</li>
     </ul>
   </div>
   <div class="grid_5">
      <p>This is the code project of bmc seventh semester.
      This is the code project of bmc seventh semester.
    This is the code project of bmc seventh semester.
  This is the code project of bmc seventh semester.</p>
      <address class="addr row">
        <dl class="grid_4">
            <dt>Address :</dt>
            <dd>
                butwl- 15, golpark<br>
            </dd>
        </dl>
        <dl class="grid_4">
            <dt>Telephones :</dt>
            <dd>
                
                +071 -922822 <br>
                +071 -922823
            </dd>
        </dl>
        <dl class="grid_4">
            <dt>E-mail :</dt>
            <dd><a href="MeroRojai@gmail.com">Bmc</a></dd>
        </dl>
      </address>
    </div>
   </div>
</div>
<div class="about_middle">
  <div class="container">
	 <h2>Contact Form</h2>
	  <form id="contact-form" class="contact-form" method="post" >
        <fieldset>
          <input type="text" value = "name" class="text"  name="name"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
           <input type="text" value="surname"class="text"  name="surname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'surname';}">
           <input type="text" value="email"class="text"  name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
          <input type="text" value="phone" class="text"  name="phone"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
          
          <textarea value="Message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
          <input name="ok" type="submit" id="submit" value="Submit" name="">
        </fieldset>
      </form>
  </div>
</div>
  <?php 
            if(isset($_POST['ok'])){
                include_once 'functionC.php';
                $obj=new matrimony();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>
<?php include_once("footer.php");?>

</body>
</html>	