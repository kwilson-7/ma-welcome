<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	.form-contro{border:none;
		border-bottom:1px solid gray;height:40px;}
		.form-contro:focus{border:none;box-shadow:none;border-bottom:2px solid #26a69a;outline:none;}
		.fa{font-size:20px;color:#26a69a;}
		.btn-start{font-family:"Roboto", sans-serif;color:white;background-color:#26a69a;border-radius:0px;padding:7px 22px;font-weight:bold;}
		.cints{font-family:"Roboto", sans-serif;font-size: 18px; }
		.heis{margin-top: 10px;
    margin-bottom: 15px;}
</style>
<body style="background-image:url('img/bg.jpg');">
	<br><br><br><br>
	<div class="container">
		<div class="">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background-color: white;padding:10px;" align="center">
				<img src="img/logo.svg" class="img-responsive" style="width:63%;">
				<br>
				<span class="cints" style="text-align:center;padding-bottom:2px !important;">
					Begin Your Application Development TODAY!
				</span>
				<hr class="heis">
				
				<?php
$success=0;
if(isset($_POST['claim'])){
$toururl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$body.="<br>";
$body.="===================================================================";
$body.="<br>";
$body.="Query Details :: ";
$body.="<br>";
$body.="===================================================================";
$body.="<br>";
$body="IP Address: ".$_SERVER['REMOTE_ADDR'];
$body.="<br>";
$body.="Enquery Date : ".date("d-m-Y");
$body.="<br>";
$body.="Name : ".$_POST['name'];
$body.="<br>";
$body.="Email : ".$_POST['email'];
$body.="<br>";
$body.="Mobile No : ".$_POST['phone'];
$body.="<br>";
$body.="===================================================================";
$to="info@wilsondevelops.com";
$from=$_POST['email'];
$subject="Subject : Seo Enquiry";
$message = $body;
//die;
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: ".$_POST['name']." <".$_POST['email']."> \r\n";
$headers .='Reply-To: '.$_POST['email']. "\r\n" ;
@mail($to,$subject,$message,$headers);
$success=1;
$body="<h3 style='text-transform: uppercase;'>Dear ".$_POST['name'].",</h3>";
$body.="Greetings From"."<b> Wilson Develops</b>.";
$body.="<br>";
$body.="<p>Thanks for visiting our website. We are glad to receive your email message and thank you for the same.</p>";
$body.="<p style='text-align:center; padding-bottom:4px; border-bottom:1px solid blue; font-size:16px;'><b>Below are the details provided by you:</b></p>";
$body.="<b>Name : </b>".$_POST['name'];
$body.="<br>";
$body.="<b>Email : </b>".$_POST['email'];
$body.="<br>";
$body.="<b>Mobile No : </b>".$_POST['phone'];
$body.="<br>";
$body.="<p style='font-size: 15px;color: #ec0000;font-style: italic;'>This is an auto generated email. Please Don't reply.</p>";
$body.="<br>";
$body.="=================================================================================================================================";
$to=$_POST['email'];
$from="info@wilsondevelops.com";
$message = $body;
$subject="Subject : Thank You for Your Enquiry on Wilson Develops";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: "." <info@wilsondevelops.com> \r\n";
@mail($to,$subject,$message,$headers);
}
?>		<?php 
				if($success==1){
echo '<span style="color:green;">Thank You for your enquiry, we will revert you soon.</span>';
}
		?>
				<form method="post">
					<div class="form-group">
						<label style="width:10%;padding:9px;" align="right">
							<span class="fa fa-user-o"></span>
						</label><input type="text" class="form-contro" required placeholder="Enter Your Name" name="name" style="width:90%;float:right;">
					</div>
					<div class="form-group">
						<label style="width:10%;padding:9px;" align="right">
							<span class="fa fa-envelope-o"></span>
						</label><input type="email" placeholder="Enter Your email" required class="form-contro" name="email" style="width:90%;float:right;">
					</div>
					
					<div class="form-group">
						<label style="width:10%;padding:9px;" align="right">
							<span class="fa fa-phone"></span>
						</label><input type="tel" class="form-contro" placeholder="Phone" name="phone" style="width:90%;float:right;">
					</div>
		
					<div class="form-group" align="center">
						<button type="submit" class="btn btn-start" name="claim">Get In Touch</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>