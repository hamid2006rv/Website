<?php
    include_once ('php/init.php');
	include_once ('php/functions.php');
?>

<?php
    if(isset($_POST['save']))
	{
		$ntitle=htmlspecialchars($_POST['ntitle']);
		$ndesc=htmlspecialchars($_POST['ndesc']);
		$org=htmlspecialchars($_POST['org']);
		$date=htmlspecialchars($_POST['date']);
        $er=0;
		if (!isset($ntitle) || trim($ntitle)=='')
			$er=$er | 0b00001;
		
		if (!isset($ndesc) || trim($ndesc)=='')
			$er=$er | 0b00010;
			
		if (!isset($org) || $org==-1)
			$er=$er | 0b00100;
		
		if (!isset($date))
			$er=$er | 0b01000;
			
		if($_FILES['attach1']['error']==0)
			{
				$attach1= $_FILES['attach1']['name'];	
			}
		if($_FILES['attach2']['error']==0)
			{
				$attach2= $_FILES['attach2']['name'];	
			}
		if($_FILES['attach3']['error']==0)
			{
				$attach3= $_FILES['attach3']['name'];	
			}
		if($er==0)
		{
			
			$sql="insert into notification values (null,'$ntitle','$ndesc',$org,null,'$date',1,";
			if (isset($attach1))
				$sql.="'$attach1',";
			else
				$sql.="null,";
			if (isset($attach2))
				$sql.="'$attach2',";
			else
				$sql.="null,";
			if (isset($attach3))
				$sql.="'$attach3',";
			else
				$sql.="null,";
			$sql.="0)";
			$result=mysql_query($sql);
			if ($result)
			{
				$error="<b style='color:green'>اطلاعات در سیستم ذخیره شد</b>";
				$id=mysql_insert_id();
				if(isset($attach1)||isset($attach2)||isset($attach3))
					mkdir('uploads/notif/n'.$id);
				if(isset($attach1))
				{
  			  		move_uploaded_file($_FILES['attach1']['tmp_name'], 'uploads/notif/n'.$id.'/'.$attach1);
				}
				if(isset($attach2))
				{
  			  		move_uploaded_file($_FILES['attach2']['tmp_name'], 'uploads/notif/n'.$id.'/'.$attach2);
				}
				if(isset($attach3))
				{
  			  		move_uploaded_file($_FILES['attach3']['tmp_name'], 'uploads/notif/n'.$id.'/'.$attach3);
				}
			  	$ntitle='';
				$ndesc='';
		        $org=-1;
			}
			else
			{
				$error="<b style='color:red'>خطا در ذخیره سازی اطلاعات!</b>";
			}
		}
		else
		{
			$error="<b style='color:red'>فیلد مشخص شده وارد شود!!</b>";	
		}
	}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پانل مدیریت سایت</title>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
   
   <link href="css/persian-datepicker-dark.css" rel="stylesheet" type="text/css"/>
   <link href="css/persian-datepicker-redblack.css" rel="stylesheet" type="text/css"/>
   <link href="css/persian-datepicker-cheerup.css" rel="stylesheet" type="text/css"/>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/notification.js"></script>
   
   <script type="text/javascript" src="js/persian-date.js"></script>
   
    <script type="text/javascript" src="js/mousewheel.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/constant.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="js/template.js"></script>
    <script type="text/javascript" src="js/base-class.js"></script>
    <script type="text/javascript" src="js/compat-class.js"></script>
    <script type="text/javascript" src="js/helper.js"></script>
    <script type="text/javascript" src="js/monthgrid.js"></script>
    <script type="text/javascript" src="js/monthgrid-view.js"></script>
    <script type="text/javascript" src="js/datepicker-view.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/navigator.js"></script>
    <script type="text/javascript" src="js/daypicker.js"></script>
    <script type="text/javascript" src="js/monthpicker.js"></script>
    <script type="text/javascript" src="js/yearpicker.js"></script>
    <script type="text/javascript" src="js/toolbox.js"></script>
    <script type="text/javascript" src="js/timepicker.js"></script>
    <script type="text/javascript" src="js/state.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body dir='rtl'>
<script>
 $(document).ready(function(e) {
        $("#observer").persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD'

        });
});
</script>
<div id='header'>
<h1>پانل مدیریت سایت</h1>
</div>
<div id='menu'>
<ul>
	<li><a href='#'>اطلاعیه ها</a></li>
    <li><a href='#'>اخبار</a></li>
    <li><a href='#'>خروج</a></li>
</ul>
</div>
<div id='content'>
<div id='form'>
	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr>
        	<td>عنوان اطلاعیه</td><td><input type="text" size="100" name='ntitle' 
			<?php if(isset($ntitle)) echo " value='$ntitle'";?>></td>
            <td><?php if(isset($er) && ($er & 0b00001)>0) echo "<span style='color:red'>*</span>"; ?></td>
        </tr>
        <tr>
        	<td>توضیحات</td><td>
            <textarea name='ndesc' rows="5" cols="50"><?php if(isset($ndesc)) echo trim($ndesc);?></textarea></td>
            <td><?php if(isset($er) && ($er & 0b00010) >0) echo "<span style='color:red'>*</span>"; ?></td>
        </tr>
        <tr><td>مرجع اطلاعیه</td>
        <td>
        <select name='org'>
           <option value='-1' selected></option>
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
        <?php if(isset($er) && ($er & 0b00100) >0) echo "<span style='color:red'>*</span>"; ?></td></tr>
        <tr><td>تاریخ</td><td><input type='text' id='observer' name='date'/>
        <?php if(isset($er) && ($er & 0b01000) >0) echo "<span style='color:red'>*</span>"; ?>
        </td></tr>
        <tr><td>ضمیمه 1</td><td><input type='file' name="attach1" /></td></tr>
        <tr><td>ضمیمه 2</td><td><input type='file' name="attach2" /></td></tr>
        <tr><td>ضمیمه 3</td><td><input type='file' name="attach3" /></td></tr>
        <tr><td><input type="submit" name="save" value="ذخیره"></td><td></td></tr>
        </table>

        <div>
        	<?php
			if(isset($error))
				echo $error;
			?>
        </div>
        
        
    </form>
    
	<table class='table' style='width:100%'>
	<tr class='row'>
        <th class='head'></th>
		<th class='head'></th>
		<th class='head'>کد</th>
		<th class='head'>عنوان</th>
        <th class='head'>توضیحات</th>
        <th class='head'>مرجع</th>
        <th class='head'>تاریخ</th>
        <th class='head'>فایل همراه 1</th>
        <th class='head'>فایل همراه 2</th>
        <th class='head'>فایل همراه 3</th>
    </tr>
    <?php
		$result=mysql_query("select * from notification 
		                     inner join organization on notification.orgid =organization.id
							 order by ndate desc");
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr class='row' >";
			echo "<td class='col'><input class='edit' value='$row[nid]' type='image' width='20' height='20' src='pic/edit.png'></input></td>";
			echo "<td class='col'><input class='delete' value='$row[nid]' type='image' width='20' height='20' src='pic/delete.png'></input></td>";
			echo "<td class='col'>$row[nid]</td>";
			echo "<td class='col'>$row[ntitle]</td>";
			echo "<td class='col'>$row[ndesc]</td>";
			echo "<td class='col'>$row[name]</td>";
			echo "<td class='col'>$row[ndate]</td>";
			echo "<td class='col'>$row[attachment1]</td>";
			echo "<td class='col'>$row[attachment2]</td>";
			echo "<td class='col'>$row[attachment3]</td>";
			echo "</tr>";
		}
	?>
	</table>
</div>
</div>
	

</body>
</html>