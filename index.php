<?php
	if(isset($_POST['send'])){
			
		$to = "rbaruimca22@gmail.com";
		$subject = "Testing By RB";
		
		$message = "<b>This is HTML message.</b>";
		$message .= "<h1>This is headline.</h1>";
		
		/*$header = "From:abc@somedomain.com \r\n";
		$header .= "Cc:afgh@somedomain.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";*/
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		//echo $to." | ".$message." | ".$subject; die;
		$ok = mail($to,$subject,$message,$headers);

		if($ok){
		?>
			<script type="text/javascript">
				alert('Pleasse check your Mail for Reg Id (also check on spam folder)');
				window.location.href="index.php";
			</script>
		<?php
		}else{
		?>
			<script type="text/javascript">
				alert('Something Wrong..Please Try Again');
				window.location.href="index.php";
			</script>
		<?php
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sending HTML email using PHP</title>
</head>

<body>
	<br /><br /><br />
	<p align="center">
	<font color="#0033FF" size="3"><b>Simple Mail Function</b></font><br /><br />
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<center>
				<input type="submit" name="send" value="SEND MAIL" />
			</center>
		</form>
	</p>
</body>
</html>
