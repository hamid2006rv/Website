<?php
    include('php/authority.php');
	include_once ('php/functions.php');
?>

<?php
    if(isset($_POST['save']))
	{
		if(isset($_POST['hasTitle']))
			$hasTitle=1;
		else
			$hasTitle=0;
			
		if(isset($_POST['ctitle']))
			$ctitle=htmlspecialchars($_POST['ctitle']);
		else
			$ctitle='';
		$cbody=htmlspecialchars($_POST['cbody']);
		
	
		if (isset($_POST['menu3']) && $_POST['menu3']!=-1)
			$org=htmlspecialchars($_POST['menu3']);
			else
				if (isset($_POST['menu2']) && $_POST['menu2']!=-1)
				$org=htmlspecialchars($_POST['menu2']);
				else
					if (isset($_POST['menu1']) && $_POST['menu3']!=-1)
						$org=htmlspecialchars($_POST['menu1']);
						
					
		if(isset($_POST['collapse']))
			$collapse=1;
		else
			$collapse=0;			
			
		
		$date=htmlspecialchars($_POST['date']);
        $er=0;
		//if (!isset($ntitle) || trim($ntitle)=='')
		//	$er=$er | 0b00001;
		
		if (!isset($cbody) || trim($cbody)=='')
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
			
			$sql="insert into content values (null,'$ctitle','$cbody',$org,null,'$date',";
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
			$sql.="$hasTitle,$collapse)";

			$result=mysql_query($sql);
			if ($result)
			{
				$error="<b style='color:green'>اطلاعات در سیستم ذخیره شد</b>";
				$id=mysql_insert_id();
				if(isset($attach1)||isset($attach2)||isset($attach3))
					mkdir('../uploads/cont/c'.$id);
				if(isset($attach1))
				{
  			  		move_uploaded_file($_FILES['attach1']['tmp_name'], '../uploads/cont/c'.$id.'/'.$attach1);
				}
				if(isset($attach2))
				{
  			  		move_uploaded_file($_FILES['attach2']['tmp_name'], '../uploads/cont/c'.$id.'/'.$attach2);
				}
				if(isset($attach3))
				{
  			  		move_uploaded_file($_FILES['attach3']['tmp_name'], '../uploads/cont/c'.$id.'/'.$attach3);
				}
			  	$ctitle='';
				$cbody='';
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
   <script type="text/javascript" src="js/content.js"></script>
   
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
	<li><a href='index.php'>اطلاعیه ها</a></li>
	<li><a href='content.php'>محتوای سایت</a></li>
	<li><a href='news.php'>اخبار</a></li>
    <li><a href='php/login.php'>خروج</a></li>
</ul>
</div>
<div id='content'>
<h2>محتوای سایت</h2>
<div id='form'>

<div>
<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
   <b>ایجاد لینک عکس</b><input type='file' name='pic' accept="image/*"><input type='submit' name='picsub' value='دریافت لینک'>
   <?php
		if(isset($_POST['picsub']))
		{
			if($_FILES['pic']['error']==0)
			{
				$pic= $_FILES['pic']['name'];	
			}
			if(isset($pic))
			{
  			  		move_uploaded_file($_FILES['pic']['tmp_name'], '../uploads/pic/'.$pic);
					echo "<div style=' direction: ltr;text-align:center;'>../uploads/pic/$pic</div>";
			}
		}
   ?>
</form>
</div>
<h3>ادیتور HTML <a href='https://html-online.com/editor/' target='_blank'>Online HTML Editor</a></h3>

	<form action='<?=$_SERVER['PHP_SELF']?>' method="POST" enctype="multipart/form-data">
    	<table cellpadding="0" cellspacing="0" border="0"> 
    	<tr><td></td>
        <td>
		<span>منو سطح 1</span>
        <select id='menu1' name='menu1'>
           <option value='-1' selected></option>
		<?php
		 $result=mysql_query("select * from organization where top_id is null order by menu_order");
		 while($row=mysql_fetch_assoc($result))
		 {
			$selected=''; 
			if (isset($org) && $org==$row[id])
				$selected='selected';
			echo "<option value='$row[id]' $selected>$row[name]</option>";	 
		 }
		?>
        </select>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<span>منو سطح 2</span>
        <select id='menu2' name='menu2'>
           <option value='-1' selected></option>
	    </select>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<span>منو سطح 3</span>
        <select id='menu3' name='menu3'>
           <option value='-1' selected></option>
	    </select>
        <?php if(isset($er) && ($er & 0b00100) >0) echo "<span style='color:red'>*</span>"; ?></td></tr>
        <tr><td>تاریخ</td><td><input type='text' id='observer' name='date'/>
        <?php if(isset($er) && ($er & 0b01000) >0) echo "<span style='color:red'>*</span>"; ?>
        </td></tr>

		<tr>
        	<td><input type='checkbox' id='hasTitle' name='hasTitle' checked='checked' value='1'>عنوان</td><td><input type="text" size="200" name='ctitle' id='ctitle'
			<?php if(isset($ntitle)) echo " value='$ctitle'";?>></td>
            <td><?php if(isset($er) && ($er & 0b00001)>0) echo "<span style='color:red'>*</span>"; ?></td>
        </tr>
		<tr>
			<td></td><td><input type='checkbox' id='collapse' name='collapse' value='1'>عنوان از قبل بسته باشد</td><td></td>
		</tr>
        <tr>
        	<td>محتوا</td><td>
            <textarea name='cbody' rows="20" cols="100"><?php if(isset($cbody)) echo trim($cbody);?></textarea></td>
            <td><?php if(isset($er) && ($er & 0b00010) >0) echo "<span style='color:red'>*</span>"; ?></td>
        </tr>
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
    
<br><hr>
<form action='<?=$_SERVER['PHP_SELF']?>' method='get'>
<span>منو سطح 1</span>
        <select id='menux1' name='menux1'>
           <option value='-1' selected></option>
		<?php
		 $result=mysql_query("select * from organization where top_id is null order by menu_order");
		 while($row=mysql_fetch_assoc($result))
		 {
			$selected=''; 
			if (isset($org) && $org==$row[id])
				$selected='selected';
			echo "<option value='$row[id]' $selected>$row[name]</option>";	 
		 }
		?>
        </select>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<span>منو سطح 2</span>
        <select id='menux2' name='menux2'>
           <option value='-1' selected></option>
	    </select>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<span>منو سطح 3</span>
        <select id='menux3' name='menux3'>
           <option value='-1' selected></option>
	    </select>
		<input type='submit' name='show' value='نمایش'>
</form>
<?php
	if (isset($_GET['show'])):

	if (isset($_GET['menux3']) && $_GET['menux3']!=-1)
			$orgx=htmlspecialchars($_GET['menux3']);
			else
				if (isset($_GET['menux2']) && $_GET['menux2']!=-1)
				$orgx=htmlspecialchars($_GET['menux2']);
				else
					if (isset($_GET['menux1']))
						$orgx=htmlspecialchars($_GET['menux1']);
?>
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
		$result=mysql_query("select * from content 
		                     inner join organization on content.orgid =organization.id
							 where content.orgid=$orgx
							 order by cdate desc");
		while($row=mysql_fetch_assoc($result))
		{
			echo "<tr class='row' >";
			echo "<td class='col'><a class='edit' href='updateContent.php?id=$row[cid]'><img width='20' height='20' src='pic/edit.png'></a></td>";
			echo "<td class='col'><input class='delete' value='$row[cid]' type='image' width='20' height='20' src='pic/delete.png'></input></td>";
			echo "<td class='col'>$row[cid]</td>";
			echo "<td class='col'>$row[ctitle]</td>";
			echo "<td class='col'>".html_entity_decode($row['cbody'])."</td>";
			echo "<td class='col'>$row[name]</td>";
			echo "<td class='col'>$row[cdate]</td>";
			echo "<td class='col'>$row[attachment1]</td>";
			echo "<td class='col'>$row[attachment2]</td>";
			echo "<td class='col'>$row[attachment3]</td>";
			echo "</tr>";
		}
	?>
	</table>
<?php endif;?>

</div>
</div>
	

</body>
</html>