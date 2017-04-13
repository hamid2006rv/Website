<?php
	include_once('php/init.php');
	
	include_once $_SERVER['DOCUMENT_ROOT'] . '/website/admin/securimage/securimage.php';
	$securimage = new Securimage();
	
	if(isset($_POST['submit']))
	{
		if ($securimage->check($_POST['captcha_code']) == false) 
		{
     		$error="کد امنیتی اشتباه است";
			exit();
		}
		$username=htmlspecialchars($_POST['username']);
		$password=htmlspecialchars($_POST['pass']);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پانل مدیریت سایت</title>
<link rel="stylesheet" href="css/login.css">
</head>

<body dir='rtl'> 

<div id='content'>
	<h1>ورود به سایت موسسه آموزش عالی سپاهان</h1>
    <form method='post' action="<?=$_SERVER['PHP_SELF']?>">
    	<label for="#username">نام کاربری</label><input type="text" name="username" id="username" /><br>
        <label for="#pass">رمز عبور</label><input type="password" name="pass" id="pass"/><br>
        <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /><br>
        <label for="#pass">عبارت فوق را وارد کنید</label><input type="text" name="captcha_code" id="captcha_code" size="10" maxlength="6" />
    	<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><img src='img/refresh.jpg'></a><br>
        <input type="submit" name="submit" value="ورودبه سایت"/><br>
        <?php  if(isset($error)) echo "<b style='color:red'>$error</b>"?>
    </form>
</div>
</body>
</html>