<?php
    include('php/authority.php');
	include_once ('php/functions.php');
?>

<?php
	if(isset($_GET['id']))
	{
		$id=htmlspecialchars($_GET['id'],ENT_QUOTES);
		$result=mysql_query("select * from news where eid=$id");
		if($result && mysql_num_rows($result)==1)
			{
				$row=mysql_fetch_assoc($result);			
				$edesc=$row['edesc'];
				$etitle=$row['etitle'];
			}
	}
    if(isset($_POST['save']))
	{
		$id=htmlspecialchars($_POST['id'],ENT_QUOTES);
		$etitle=htmlspecialchars($_POST['etitle'],ENT_QUOTES);
		$edesc=htmlspecialchars($_POST['edesc'],ENT_QUOTES);
		$sql="update news 
				set etitle='$etitle',
				    edesc='$edesc'
				where eid=$id";
		$result=mysql_query($sql);
		if ($result)
			header('location: news.php');
		
	}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پانل مدیریت سایت</title>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body dir='rtl'>

<div id='header'>
<h1>پانل مدیریت سایت</h1>
</div>
<div id='menu'>
<ul>
	<li><a href='index.php'>اطلاعیه ها</a></li>
	<li><a href='content.php'>محتوای سایت</a></li>
	<li><a href='news.php'>اخبار</a></li>
    <li><a href='php/login.php'>خروج</a></li>
</ul>
</div>
<div id='content'>
<h2>خبر شماره <?=$id?></h2>
<div id='form'>
	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST">
    	<input type='hidden' name="id" value="<?=$id?>">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr>
        	<td>عنوان خبر</td><td>
            <input type="text" size="100" name='etitle' value='<?=$etitle?>'></td>
            <td></td>
        </tr>
        <tr>
        	<td>توضیحات</td><td>
            <textarea name='edesc' rows="10" cols="100"><?=trim($edesc)?></textarea></td>
            <td></td>
        </tr>
        <tr><td><input type="submit" name="save" value="ذخیره"></td><td></td></tr>
        </table>
   </form>
</div>
</div>
	

</body>
</html>