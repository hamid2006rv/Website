<?php
    include('php/authority.php');
	include_once ('php/functions.php');
?>

<?php
	if(isset($_GET['id']))
	{
		$cid=htmlspecialchars($_GET['id']);
		$result=mysql_query("select * from content where cid=$cid");
		if($result && mysql_num_rows($result)==1)
			{
				$row=mysql_fetch_assoc($result);			
				$cbody=$row['cbody'];
				$ctitle=$row['ctitle'];
				//$day=date('N');
				$hasTitle=$row['hasTitle'];
				$org=$row['orgid'];
				$date=$row['cdate'];
				//$attach1=$row['attachment1'];
				//$attach2=$row['attachment2'];
				//$attach3=$row['attachment3'];
			}
	}
    if(isset($_POST['save']))
	{
		$cid=htmlspecialchars($_POST['cid']);
		$ctitle=htmlspecialchars($_POST['ctitle']);
		$cbody=htmlspecialchars($_POST['cbody']);
		$org=htmlspecialchars($_POST['org']);
		if(isset($_POST['hasTitle']))
			$hasTitle=htmlspecialchars($_POST['hasTitle']);
		else 
			$hasTitle=0;
		$sql="update content 
				set ctitle='$ctitle',
				    cbody='$cbody',
					orgid=$org,
					hasTitle=$hasTitle
				where cid=$cid";
		$result=mysql_query($sql);
		if ($result)
			header('location: content.php');
		
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/content.js"></script>
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
<h2>For Updateing Content use <a href='https://html-online.com/editor/' target='_blank'>Online HTML Editor</a></h2>
<div id='form'>
	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
    	<input type='hidden' name="cid" value="<?=$cid?>">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr>
        	<td><input type='checkbox' id='hasTitle' name='hasTitle' <?php if($hasTitle==1) echo "checked='checked'"; ?> value='1'>عنوان</td><td>
            <input type="text" size="200"  name='ctitle' id='ctitle' value='<?=$ctitle?>' <?php if($hasTitle==0) echo "disabled"; ?>></td>
            <td></td>
        </tr>
        <tr>
        	<td>محتوا</td><td>
            <textarea name='cbody' rows="20" cols="100"><?=trim($cbody)?></textarea></td>
            <td></td>
        </tr>
        <tr><td>مرجع اطلاعیه</td>
        <td>
		<select name='org'>
		<?php
		 $result=mysql_query("select * from organization order by name");
		 while($row=mysql_fetch_assoc($result))
		 {
			$selected=''; 
			if (isset($org) && $org==$row[id])
				$selected='selected';
			echo "<option value='$row[id]' $selected>$row[name]</option>";	 
		 }
		?>
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