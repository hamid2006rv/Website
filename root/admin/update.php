<?php
    include('php/authority.php');
	include_once ('php/functions.php');
?>

<?php
	if(isset($_GET['id']))
	{
		$nid=htmlspecialchars($_GET['id'],ENT_QUOTES);
		$result=mysql_query("select * from notification where nid=$nid");
		if($result && mysql_num_rows($result)==1)
			{
				$row=mysql_fetch_assoc($result);			
				$ndesc=$row['ndesc'];
				$ntitle=$row['ntitle'];
				$day=date('N');
				
				$org=$row['orgid'];
				$date=$row['ndate'];
				$attach1=$row['attachment1'];
				$attach2=$row['attachment2'];
				$attach3=$row['attachment3'];
			}
	}
    if(isset($_POST['save']))
	{
		$nid=htmlspecialchars($_POST['nid'],ENT_QUOTES);
		$ntitle=htmlspecialchars($_POST['ntitle'],ENT_QUOTES);
		$ndesc=htmlspecialchars($_POST['ndesc'],ENT_QUOTES);
		$org=htmlspecialchars($_POST['org'],ENT_QUOTES);
		$sql="update notification 
				set ntitle='$ntitle',
				    ndesc='$ndesc'
				where nid=$nid";
		$result=mysql_query($sql);
		if ($result)
			header('location: index.php');
		
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
<h2>بروز رسانی اطلاعیه شماره <?=$nid?></h2>
<div id='form'>
	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
    	<input type='hidden' name="nid" value="<?=$nid?>">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr>
        	<td>عنوان اطلاعیه</td><td>
            <input type="text" size="100" name='ntitle' value='<?=$ntitle?>'></td>
            <td></td>
        </tr>
        <tr>
        	<td>توضیحات</td><td>
            <textarea name='ndesc' rows="10" cols="100"><?=trim($ndesc)?></textarea></td>
            <td></td>
        </tr>
        <tr><td>مرجع اطلاعیه</td>
        <td>
        <select name='org'>
           <option value='1' selected>آموزش</option>
        </select>
        </td></tr>
        <tr><td>تاریخ</td><td><input type='text' id='' name='date' value='<?=str_replace('-','/',$date)?>' disabled/>
        </td></tr>
        <tr><td><input type="submit" name="save" value="ذخیره"></td><td></td></tr>
        </table>
   </form>
</div>
</div>
	

</body>
</html>